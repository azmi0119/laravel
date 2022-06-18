<?php

use App\Models\Lac;
use App\Models\Tag;
use App\Models\Blog;
use App\Models\City;
use App\Models\User;
use App\Models\Admin;
use App\Models\Level;
use App\Models\Order;
use App\Models\State;
use App\Models\Module;
use App\Models\School;
use App\Models\LacPost;
use App\Models\Category;
use App\Models\District;
use App\Models\DrlClass;
use App\Models\Language;
use App\Models\Question;
use App\Models\UserInfo;
use App\Models\SiteConfig;
use App\Models\BlogComment;
use App\Models\DrlLanguage;
use App\Models\DrlMetadata;
use App\Models\Leaderboard;
use App\Models\OrderDetail;
use App\Models\CategoryType;
use App\Models\Notification;
use App\Models\UserFollower;
use App\Models\AnswerComment;
use App\Models\ClassMetadata;
use App\Models\DrlLessonPlan;
use App\Models\BannerMetadata;
use App\Models\CourseMetadata;
use App\Models\DrlContentType;
use App\Models\EdtechMetadata;
use App\Models\ModuleMetadata;
use App\Models\ModuleResource;
use App\Models\QuestionAnswer;
use App\Models\NotificationLog;
use App\Models\ProductMetadata;
use App\Models\WebinarMetadata;
use App\Models\CategoryMetadata;
use App\Models\TeachingLanguage;
use App\Models\UserEnrollCourse;
use App\Models\UserEnrollModule;
use App\Models\UserSavedContent;
use App\Models\LeaderboardConfig;
use App\Models\PopupNotification;
use Illuminate\Http\UploadedFile;
use App\Models\CustomNotification;
use App\Models\UserViewedResource;
use Illuminate\Support\Facades\DB;
use App\Models\CompetitionMetadata;
use App\Models\UserCompletedModule;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use App\Models\CategoryTypeMetadata;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Models\AdminLessonPlanMetadata;
use App\Models\NtbrQuestionCategory;
use Illuminate\Support\Facades\Storage;
use App\Models\UserAttemptedQuestionnaire;

function s3ImageUpload(UploadedFile $image, string $directory)
{
    $name = $directory . time() . '.' . $image->getClientOriginalExtension();
    $filePath = "gurushala/$directory/" . $name;
    $uploaded = Storage::disk('s3')->put($filePath, file_get_contents($image), 'public');
    // dd($uploaded);
    /**throw exception in case image upload fails */
    if (!$uploaded) {
        throw new Exception(__('message.image-upload.failed'));
    }
    return $filePath;
}

function getThumbFile($path)
{
    $name = explode('/', explode('.', $path)[0])[2];
    $thumbpath = config('filesystems.disks.s3.url') . 'gurushala/thumb/' . $name . '.jpg';
    return $thumbpath;
}

/**
 * Show Status text based on status ID
 *
 * @var int status
 */

function statusText(int $status, string $customText = null)
{
    $statusText = '';
    switch ($status) {
        case ACTIVE:
            $statusText = 'Active';
            break;

        case INACTIVE:
            $statusText = 'Inactive';
            break;

        case DRAFT:
            $statusText = 'Draft';
            break;

        default:
            $statusText = $customText ?? 'NA';
            break;
    }

    return $statusText;
}

/**
 * convert duration - minute & Hours to seconds
 *
 * @var int duration_hh Hours
 * @var int duration_mm Minutes
 */

function durationInSeconds(int $duration_hh, int $duration_mm)
{
    return $seconds = $duration_hh * 60 * 60 + $duration_mm * 60;
}

/**
 * convert duration - seconds to minute & Hours
 */
function durationInHourMinutes($duration)
{
    $data = [];

    if (!empty($duration)) {
        $data['duration_hh'] = floor($duration / 3600);
        $data['duration_mm'] = floor(($duration / 60) % 60);
    } else {
        $data['duration_hh'] = '';
        $data['duration_mm'] = '';
    }

    return $data;
}
function getMegaMenuCategories()
{
    $data = [];
    CategoryTypeMetadata::defaultLanguage()
        ->with(['categories' => function ($q) {
            $q->active();
        }])
        ->whereHas('categories', function ($q) {
            $q->orderBy('is_popular', 'desc');
        })
        // ->where('category_type_id', '<>', COMPETITION)
        ->whereNotIn('category_type_id',  [BLOGS])
        ->get()
        ->map(function ($val, &$key) use (&$data) {
            if ($val->categories->isNotEmpty()) {
                $data[] = $val;
            }
        });

    // dd(collect($data));

    return collect($data);
}
function getPopularcategories($onlyPopular = false)
{
    return Category::active()
        ->with(['categoryMetadata' => function ($q) {
            $q->where('language_id', getDefaultLanguage());
        }])
        ->when($onlyPopular, function ($q) {
            $q->where('is_popular', 1);
        })
        ->orderBy('is_popular')
        // ->limit(10)
        ->get()
        ->groupBy('category_type_id');
}

function getUserIntrest($section)
{
    return CategoryMetadata::dataByLanguage()
        ->with(['category'])
        ->whereHas('category', function ($q) {
            $q->active()->with(['categoryType' => function ($q) {
                $q->where('category_type_id', NETWORKING);
            }]);
        })
        ->whereHas('favourite')
        ->orderBy('title')
        ->get()
        ->where('category.categoryType.category_type_id', $section);
}
function secondsToHourMinute($seconds)
{
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds / 60) % 60);

    $time = "";
    if ($hours >= 1) {
        $time .= "$hours hr(s)";
        if ($minutes > 0) {
            $time .= ", $minutes min(s)";
        }
    } else {
        if ($minutes > 0) {
            $time .= "$minutes min(s)";
        }
    }
    return $time;
    // return $hours >= 1 && $minutes > 0 ? "$hours hr(s), $minutes min(s)" : ($minutes >= 1 ? "$minutes min(s)" : "");
}

/**
 * Show Popular text based on popular ID
 *
 * @var int popular
 */

function popularText(int $popular, string $popularText = null)
{
    $popularText = '';
    switch ($popular) {
        case YES:
            $popularText = 'Yes';
            break;

        case NO:
            $popularText = 'No';
            break;

        default:
            $popularText = $popularText ?? 'NA';
            break;
    }

    return $popularText;
}

/**
 * @function encryptDecrypt
 * @description A common function to encrypt or decrypt desired string
 *
 * @param string $string String to Encrypt
 * @param string $type option encrypt or decrypt the string
 * @return type
 */
function encryptDecrypt($string, $type = 'encrypt')
{
    if ($type == 'decrypt') {
        $enc_string = base64_decode($string);
    } elseif ($type == 'encrypt') {
        $enc_string = base64_encode($string);
    }
    return $enc_string;
}
function getLevel($defaultLanguage = null)
{
    return Level::with(['metadata' => function ($q) use ($defaultLanguage) {
        return $q->whereLanguageId($defaultLanguage);
    }])
        ->select('id')
        ->active()
        ->get();
}

function getDrlContentType($defaultLanguage = null)
{
    return DrlContentType::with(['metadata' => function ($q) use ($defaultLanguage) {
        return $q->whereLanguageId($defaultLanguage);
    }])
        ->select('id')
        ->active()
        ->get();
}

function getCategories($type = NETWORKING)
{
    // return CategoryMetadata::where('language_id', getDefaultLanguage())->get()->toArray();
    return Category::active()->with([
        'categoryMetadata' => function ($query) {
            return $query->where('language_id', getDefaultLanguage());
        },
        'categoryType' => function ($q) {
            return $q->where('language_id', getDefaultLanguage());
        },
    ])
        ->where('category_type_id', $type)
        ->orderBy('is_popular', 'asc')
        ->get();
}

function getLanguages()
{
    return Language::active()->get();
}

function schoolCode()
{
    return rand(111111, 999999);
}

function getPartner()
{
    return Admin::select(['id', 'name'])->where('role_id', PARTNER)->orderBy('is_other', 'DESC')->get();
}

function getSchools($partner_id)
{
    return School::select(['id', 'code', 'name', 'partner_id'])->orderBy("name", "asc")->where('partner_id', $partner_id)->get();
}

function getDefaultLanguage()
{
    $locale = App::getLocale() ? App::getLocale() : 'en';
    $language = [
        'en' => 1,
        'hi' => 2
    ];
    return $language[$locale];
    // return Language::active()->where('locale', $locale)->value('id');
}

function getMediaType($mime)
{
    $mime = explode('/', $mime);
    $mime = current($mime);
    $return = "N/A";
    switch ($mime) {
        case "image":
            $return = __('headings.media_image');
            break;
        case "application":
            $return = __('headings.media_doc');
            break;
        case "video":
            $return = __('headings.media_video');
            break;
        case "audio":
            $return = __('headings.media_audio');
            break;
        case "text":
            $return = __('headings.media_text');
            break;
        case "simulation":
            $return = __('headings.simulation');
            break;
        default:
            $return = "N/A";
    }
    return $return;
}

function getTinyUrl($url)
{
    try {
        //for checking already encoded url
        $curl_url = 'https://api-ssl.bitly.com/v3/link/lookup?url=' . $url . '&access_token=' . env('BITLY_ACCESS_TOKEN');
        $ch = curl_init($curl_url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $arr_result = curl_exec($ch);

        $arr_response = json_decode($arr_result, true);

        if (isset($arr_response['data']['link_lookup'][0]['error'])) {
            if ($arr_response['data']) {
                $curl_url = 'https://api-ssl.bitly.com/v3/shorten?longUrl=' . $url . '&access_token=' . env('BITLY_ACCESS_TOKEN');
            }
            $ch = curl_init($curl_url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $arr_result = curl_exec($ch);

            $arr_response = json_decode($arr_result);
            return $arr_response->data->url;
        } else {
            return $arr_response['data']['link_lookup'][0]['aggregate_link'];
        }
    } catch (Exception $e) {
        Log::info($e->getMessage());
        return $url;
    }
}

function getStates()
{
    return State::orderBy("title", "asc")->get();
}

function getCities($state)
{
    return City::where('state_id', $state)->orderBy("title", "asc")->get();
}



function timeago($date)
{
    $timestamp = strtotime($date);

    $lan = getDefaultLanguage();
    if ($lan == ENGLISH) {
        $strTime = array("sec", "min", "hr", "days", "mon", "year");
    } else {
        $strTime = array("सेकंड", "मिनट", "घंटे", "दिन", "माह", "साल");
    }
    $length = array("60", "60", "24", "30", "12", "10");

    $currentTime = time();
    if ($currentTime >= $timestamp) {
        $diff = time() - $timestamp;
        for ($i = 0; $diff >= $length[$i] && $i < count($length) - 1; $i++) {
            $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        return $diff . " " . ($strTime[$i] == "days" && $diff  == 1 ? "day" :  $strTime[$i])  . __('headings.ago');
    }
}

function checkResourceView($resource_id, $user_id)
{
    $return = false;
    $response = UserViewedResource::where([
        'resource_id' => $resource_id,
        'user_id' => $user_id,
    ])->select('id')->first();
    if (!is_null($response)) {
        $return = true;
    }
    return $return;
}

function countResourceView($module_id, $module_cat_id, $user_id)
{
    $resourceId = ModuleResource::where(['module_id' => $module_id, 'module_category_id' => $module_cat_id, 'language_id' => getDefaultLanguage()])->select('id')->get()->toArray();
    $resourceId = array_column($resourceId, 'id');
    $count = UserViewedResource::whereIn('resource_id', $resourceId)->where('user_id', $user_id)->count();
    return $count;
}

function checkQuestionnaireView($module_id, $module_cat_id, $user_id, $module_metadata_id)
{
    $return = false;
    $response = UserAttemptedQuestionnaire::where([
        'module_id' => $module_id,
        'user_id' => $user_id,
        'module_category_id' => $module_cat_id,
        'module_metadata_id' => $module_metadata_id,
        'language_id' => getDefaultLanguage(),
    ])->select('id')->first();
    if (!is_null($response)) {
        $return = true;
    }
    return $return;
}
function getYoutubeVideoInfo($url, $all = false)
{
    $youtube_id = null;
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }
    if ($all) {
        $thumbnail['max'] = 'https://img.youtube.com/vi/' . $youtube_id . '/maxresdefault.jpg';
        $thumbnail['hq'] = 'https://img.youtube.com/vi/' . $youtube_id . '/hqdefault.jpg';
    } else {
        $thumbnail = 'https://img.youtube.com/vi/' . $youtube_id . '/maxresdefault.jpg';
    }
    return $thumbnail;
}

function checkModuleCompletion($user_id, $course_id, $module_id)
{
    $data = UserCompletedModule::where(['module_id' => $module_id, 'course_id' => $course_id, 'user_id' => $user_id, 'language_id' => getDefaultLanguage()])->first();
    if (!is_null($data)) {
        return true;
    }
    return false;
}

function prettyNumber($number)
{
    $number = preg_replace('/[^\d]+/', '', $number);
    if (!is_numeric($number)) {
        return 0;
    }
    if ($number < 1000) {
        return $number;
    }
    $unit = intval(log($number, 1000));
    $units = ['', 'K', 'M', 'B', 'T', 'Q'];
    if (array_key_exists($unit, $units)) {
        return sprintf('%s%s', rtrim(number_format($number / pow(1000, $unit), 1), '.0'), $units[$unit]);
    }
    return $number;
}

/**
 * This fucntion checks if the passed url is youtube url.
 * Returns YT embedded url if found YT url.
 * Returns original url if match not found
 */
function getYoutubeEmbedUrl($url)
{
    $returnOriginal = true;
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }
    /**if  */
    $returnUrl = ($returnOriginal) ? $url : 'https://www.youtube.com/embed/' . $youtube_id . "?enablejsapi=1&version=3&playerapiid=ytplayer";
    return $returnUrl;
}

function getDocumentEmbedUrl($url)
{
    return config('services.documentviewer.url') . config('filesystems.disks.s3.url') . $url;
}

function mediaTypePath($mime)
{
    $mime = explode('/', $mime);
    $mime = current($mime);
    $return = "N/A";
    switch ($mime) {
        case "image":
            $return = 'front/images/Img.png';
            break;
        case "application":
            $return = 'front/images/sm-pdf.png';
            break;
        case "video":
            $return = 'front/images/media.png';
            break;
        case "audio":
            $return = 'front/images/speaker.png';
            break;
        case "text":
            $return = 'front/images/link-icon.png';
            break;
        default:
            $return = 'front/images/media.png';
    }
    return $return;
}

function getCategoryByType($type)
{
    return Category::active()
        ->with(['categoryMetadata' => function ($q) {
            $q->where('language_id', getDefaultLanguage());
        }])
        ->where('category_type_id', $type)
        ->orderBy('is_popular')
        ->simplePaginate(LIMIT_OF_CATEGORY);
}

function getSelectedTags($search)
{
    /**selected tags */
    $selectedTags = null;
    if ($search) {
        $selectedTags = Tag::active()->select(['id', 'title'])->whereIn('id', explode(',', $search))->get();
    }
    /**selected tags close */
    return $selectedTags;
}

function sideBarMenu()
{
    $user =  auth()->user();
    // $permissions = $user->pluck('name')->toArray();
    $menu = null;
    if ($user->role_id == PARTNER) {
        foreach (PARTNER_SIDEBAR as $key => $value) {
            $current_route = explode('.', Route::currentRouteName());
            // if (in_array($value['action'],$permissions)) {
            $route = $value['action'];
            $title = $value['title'];
            $icon = $value['icon'];
            // $active = strpos(URL::current(), $value == 'admin' ? 'home' : $value) ? "active" : "";
            $active = strpos($value['action'], $current_route[0] . '.') === 0 ? "active" : "";
            $url = route($route);

            // if ($value == 'network') {
            //     $url = route($route, ['list' => 'unanswered']);
            // }

            $menu .= '<li>' .
                '<a href="' . $url . '" title="' . $title . '" class="' . $active . '">' .
                '<span class="icon ' . $icon . '"></span>' .
                '<span class="nav_txt">' . $title . '</span>' .
                '</a>' .
                '</li>';
            // }
        }
    } else {
        foreach (ADMIN_SIDEBAR as $key => $value) {
            if ($user->can($value['action'])) {
                $current_route = explode('.', Route::currentRouteName());
                // if (in_array($value['action'],$permissions)) {
                $route = $value['action'];
                $title = $value['title'];
                $icon = $value['icon'];
                // $active = strpos(URL::current(), $value == 'admin' ? 'home' : $value) ? "active" : "";
                $active = strpos($value['action'], $current_route[0] . '.') === 0 ? "active" : "";
                $url = route($route);

                // if ($value == 'network') {
                //     $url = route($route, ['list' => 'unanswered']);
                // }

                $menu .= '<li>' .
                    '<a href="' . $url . '" title="' . $title . '" class="' . $active . '">' .
                    '<span class="icon ' . $icon . '"></span>' .
                    '<span class="nav_txt">' . $title . '</span>' .
                    '</a>' .
                    '</li>';
                // }
            }
        }
    }

    return $menu;
}

function bulkImportData($index, $content)
{
    $base_url = env('AWS_ELASTIC_URL');
    $endpoint = $base_url . $index . '/_bulk';

    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', $endpoint, [
        'headers' => [
            'Content-type' => 'application/x-ndjson',
        ],
        'body' => $content . "\n",
    ]);

    $statusCode = $response->getStatusCode();
    $content = $response->getBody();
    if ($statusCode == SUCCESS_CODE) {
        return true;
    }
    dd($statusCode, $content);
}

function saveElasticData($index, $type, $id, $data)
{
    $base_url = env('AWS_ELASTIC_URL');
    $endpoint = $base_url . $index . '/' . $type . '/' . $id;

    $client = new \GuzzleHttp\Client();

    $response = $client->request('POST', $endpoint, [
        'headers' => [
            'Content-type' => 'application/json',
        ],
        'json' => $data,
    ]);

    $statusCode = $response->getStatusCode();
    $content = $response->getBody();
}

function searchElastic($index, $keyword, $data = null)
{
    $base_url = env('AWS_ELASTIC_URL');
    $endpoint = $base_url . $index . '/_msearch';

    $client = new \GuzzleHttp\Client();
    $id = auth()->check() ? "[" . auth()->id() . "]" : "[]";

    $body = '{"index" : "tag"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n\r" .

        '{"index" : "category"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n\r" .

        '{"index" : "content"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n\r" .

        '{"index" : "course"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n\r" .

        '{"index" : "ed-tech"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n\r" .

        '{"index" : "network"}' . "\n\r" .
        '{"query": {"bool" : {"must_not" : {"terms" : {"reported_by" : ' . $id . '}},"must" : { "match_phrase_prefix" : { "phrase" : { "query" : "' . $keyword . '" } }}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } },"from" : 0,"size":"4"}' . "\n\r" .

        '{"index" : "user"}' . "\n\r" .
        '{"query": { "match_phrase_prefix" : { "phrase" : { "query" : "' . $keyword . '" }}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } },"from" : 0,"size":"4"}' . "\n\r" .

        '{"index" : "lesson-plan"}' . "\n\r" .
        '{"query": { "match_phrase_prefix" : { "phrase" : { "query" : "' . $keyword . '" }}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } },"from" : 0,"size":"4"}' . "\n\r" .

        '{"index" : "webinar"}' . "\n\r" .
        '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"' . $keyword . '"}}},"highlight" : {"fields" : { "phrase" : {"pre_tags" : ["<strong>"], "post_tags" : ["</strong>"] } } }, "from" : 0, "size" : 4}' . "\n";

    // '{"query" : {"match_phrase_prefix" : {"phrase" : {"query":"'.$keyword.'"}}}, "from" : 0, "size" : 4}'."\n";
    $response = $client->request('GET', $endpoint, [
        // 'json'=>[
        //     'query' => [
        //         "match_phrase_prefix" => [
        //             "phrase" => [
        //                 "query" => $keyword
        //             ]
        //         ]
        //     ]
        // ]
        'headers' => [
            'Content-type' => 'application/x-ndjson',
        ],
        'body' => $body,

    ]);
    $statusCode = $response->getStatusCode();
    $content = $response->getBody();
    return $content->getContents();
}

function deleteDataFromEls($index, $type, $data)
{
    try {
        $base_url = env('AWS_ELASTIC_URL');
        $endpoint = $base_url . $index . '/_delete_by_query';

        $client = new \GuzzleHttp\Client();

        $response = $client->request("POST", $endpoint, [
            'headers' => [
                'Content-type' => 'application/json',
            ],
            'json' => [
                "query" => [
                    "match" => $data,
                ],
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $content = $response->getBody();
    } catch (Exception $e) {
        $statusCode = $e->getCode();
        $content = $e->getMessage();
    }
    return response()->json([
        "status" => $statusCode,
        "message" => $content
    ]);
}

function updateDataOfEls($index, $id, $data)
{
    $base_url = env('AWS_ELASTIC_URL');
    $endpoint = $base_url . $index . '/_update/' . $id;

    $client = new \GuzzleHttp\Client();

    $response = $client->request("POST", $endpoint, [
        'headers' => [
            'Content-type' => 'application/json',
        ],
        'json' => $data,
    ]);
    $statusCode = $response->getStatusCode();
    $content = $response->getBody();
}

function getCategoryType()
{
    return CategoryType::with([
        'categoryTypeDetail' => function ($q) {
            $q->defaultLanguage();
        },
    ])->where('status', ACTIVE)->get();
}
function getClass()
{
    return ClassMetadata::select('class_id', 'title')->where('language_id', getDefaultLanguage())
        ->orderBy('class_id', 'asc')->get();
}

/**
 * changeTimeFormat function
 *
 * @param string $time
 * @return void
 */
function changeTimeFormat(string $time)
{

    return date(TIME_FORMATE, $time);
}


function leaderboardPoint($reason, $user_id, $content_id = null, $status = 1)
{

    $approval = SiteConfig::where('key', SITE_CONFIG['ADMIN_POINT_APPROVAL'])->value("value");

    if (!$approval) {
        $status = 1;
    }

    $data = LeaderboardConfig::where($reason)->first();
    if ($data) {
        $alreadyExist = Leaderboard::where([
            'user_id' => $user_id,
            'leaderboard_id' => $data->id,
            'content_id' => $content_id,
        ])->count();

        $result = Leaderboard::updateOrCreate(
            [
                'user_id' => $user_id,
                'leaderboard_id' => $data->id,
                'content_id' => $content_id,
            ],
            [
                'user_id' => $user_id,
                'leaderboard_id' => $data->id,
                'content_id' => $content_id,
                'point' => $data->points,
                "status" => $status
            ]
        );
        if ($alreadyExist === 0) {
            return $data->points;
        }
    }
}

function leaderboardList()
{
    $data = Leaderboard::with(['user'])
        // ->join('leaderboard_configs', 'leaderboards.leaderboard_id', 'leaderboard_configs.id')
        ->select('user_id')
        ->whereHas('user')
        ->selectRaw('SUM(if(type=' . POINTS_TYPE['ADD'] . ',leaderboards.point,0) - if(type!=' . POINTS_TYPE['ADD'] . ',leaderboards.point,0))  as points')
        // ->selectRaw('SUM(leaderboard_configs.points + leaderboards.point) as points')
        // ->selectRaw('SUM(leaderboards.point) as points')
        ->where('status', ACTIVE)
        // ->where("type",POINTS_TYPE['ADD'])
        ->groupBy('user_id')
        ->orderBy('points', 'desc')
        ->limit(10)
        ->get();

    if ($data->count()) {
        $html = '<div class="filter_block_1">
                        <h2 class="filter_title">' . __('headings.leaderboard') . '</h2>';
        foreach ($data as $key => $value) {
            $html .= '<div class="leaderboard_list_user">
                        <figure class="user_xs_img">';
            if (@$value->user->profile_image) {
                $html .= '<img src="' . config('filesystems.disks.s3.url') . @$value->user->profile_image . '">';
            } else {
                $html .= '<img src="' . asset('front/images/user-avatar.jpg') . '">';
            }

            $html .= '</figure>
                        <div class="details">
                        <span class="user_xsname tick ' . (auth()->check() && !empty(getCheckMark(@$value->user->id))  ? getCheckMark(@$value->user->id) : '') . '">' . ucWords(@$value->user->name) . '</span>

                        <span class="influncer">' . @$value->user->credential . '</span>
                        <span class="digit">' . @$value->points . '</span>
                        </div>
                    </div>';
        }

        $html .= '</div>';
        return $html;
    }
}


function completedModules($course_id, $user_id, $admin = false)
{
    if ($admin) {
        return UserCompletedModule::where(['course_id' => $course_id, 'user_id' => $user_id])->count();
    } else {
        return UserCompletedModule::where(['course_id' => $course_id, 'user_id' => $user_id, 'language_id' => getDefaultLanguage()])->count();
    }
}

function totalModules($course_id)
{
    return Module::where(['course_id' => $course_id])->count();
}
function getPoints($givenFor)
{
    return LeaderboardConfig::select('points')->where('given_for', $givenFor['given_for'])->first()->points;
}

function totalUserPoint($user_id)
{
    $totalPoint = 0;
    if ($user_id) {
        // $totalPoint = Leaderboard::where('user_id', $user_id)->sum('point');

        $data = Leaderboard::select('user_id')
            // ->selectRaw('SUM(leaderboards.point)  as points')
            ->selectRaw('SUM(if(type=' . POINTS_TYPE['ADD'] . ',leaderboards.point,0) - if(type!=' . POINTS_TYPE['ADD'] . ',leaderboards.point,0))  as points')
            ->where('user_id', $user_id)
            ->where('status', ACTIVE)

            // ->where("type",POINTS_TYPE['ADD'])
            ->first();
        return $data->points;
    }
    return $totalPoint;
}

function addOrdinalNumberSuffix($num)
{
    if (!in_array(($num % 100), array(11, 12, 13))) {
        switch ($num % 10) {
                // Handle 1st, 2nd, 3rd
            case 1:
                return $num . 'st';
            case 2:
                return $num . 'nd';
            case 3:
                return $num . 'rd';
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
                return $num . 'th';
        }
    }
    return $num . 'th';
}

function sendNotification($type, $content_id)
{
    switch ($type) {
        case CONTENT_NOTI:
        case COURSE_NOTI:
        case EDTECH_NOTI:

            $users = User::select('id')->where('status', ACTIVE)->whereJsonContains('notification_settings->content', 'on')->get();
            foreach ($users as $key => $value) {
                // Notification::create([
                //     'notify_to' => $value,
                //     'content_id' => $content_id,
                //     'type' => $type,
                // ]);
                notifyUser($value->id, null, $content_id, $type);
            }

            break;
        case ANSWER_NOTI:
            $answer = QuestionAnswer::find($content_id);
            $ques = Question::find($answer->question_id);
            $noti_settings = User::where('id', $ques->user_id)->where('status', ACTIVE)->whereJsonContains('notification_settings->question', 'on')->count();

            if ($ques->user_id && $noti_settings) {
                // Notification::create([
                //     'notify_to' => $ques->user_id,
                //     'content_id' => $content_id,
                //     'type' => $type,
                // ]);
                notifyUser($ques->user_id, null, $content_id, $type);
            }
            break;
        case USER_NOTI:
            $user_ids = UserFollower::selectRaw('GROUP_CONCAT(follower) as user_ids')->where('following', auth()->id())->whereHas('user')->first();
            if ($user_ids->user_ids) {
                $user_ids = explode(',', $user_ids->user_ids);
                foreach ($user_ids as $key => $value) {
                    // Notification::create([
                    //     'notify_to' => $value,
                    //     'content_id' => $content_id,
                    //     'type' => $type,
                    // ]);
                    notifyUser($value, null, $content_id, $type);
                }
            }
            break;
    }
}


/**
 * @desc get rank of user
 */
function getRank($user_id)
{
    $query = DB::select("
      select user_id, total, @rank := @rank + 1 as ranks
      from (
            select user_id, SUM(if(type=" . POINTS_TYPE['ADD'] . ",leaderboards.point,0) - if(type!=" . POINTS_TYPE['ADD'] . ",leaderboards.point,0)) total
            from   leaderboards
            inner join users on users.id = leaderboards.user_id
            where leaderboards.status = 1 and users.status = 1
            group by user_id
            order by total desc
           ) t1, (select @rank := 0) t2");

    $rank = collect($query)->where("user_id", $user_id)->first();
    // $rank = !empty($query) && isset($query) ? $query[0]->rank : 'N/A';
    if (!empty($rank) && isset($rank)) {

        switch ($rank->ranks) {
            case 1:

                return '1st';

            case 2:

                return '2nd';

            case 3:
                return '3rd';

            default:
                return $rank->ranks;
        }
    } else {
        return 'N/A';
    }


    // return $rank;
}



/**
 * @desc get checkMark
 */
function getCheckMark($user_id)
{

    $user = User::find($user_id);
    // if ($user && $user->is_verify == YES) {
    //     $className = 'acheivement';
    // } else {
    //     $totalPoint = totalUserPoint($user_id);

    //     if ($totalPoint >= 500000) {
    //         $className = 'verified_gray';
    //     } elseif ($totalPoint >= 400000 && $totalPoint < 500000) {
    //         $className = 'verified_blue';
    //     } elseif ($totalPoint >= 300000 && $totalPoint < 400000) {
    //         $className = 'verified_purple';
    //     } elseif ($totalPoint >= 200000 && $totalPoint < 300000) {
    //         $className = 'verified_orange';
    //     } elseif ($totalPoint >= 100000 && $totalPoint < 200000) {
    //         $className = 'verified_yellow';
    //     } else {
    //         $className = null;
    //     }
    // }

    $totalPoint = totalUserPoint($user_id);
    $className = "";
    if ($totalPoint >= 300000) {
        $className = 'verified_yellow';
    } else {
        if ($user && $user->is_verify == YES) {
            $className = 'verified_orange';
        }
    }

    return $className;
}


function notificationText($content_id, $type, $notification_id, $status, $user = null, $lang = null)
{
    $notification = Notification::find($notification_id);
    try {
        $lang = $lang ? $lang : App::getLocale();
        if (empty($user)) {
            $user = (object) [];
            $user->name = "Gurushala";
        }
        switch ($type) {
            case CONTENT_NOTI:
                return __('notification.drl_noti', [], $lang);
                break;
            case COURSE_NOTI:
                return __('notification.course_noti', [], $lang);
                break;
            case EDTECH_NOTI:
                return $content_id . __('notification.edtech_noti', [], $lang);
                break;
            case ANSWER_NOTI:
                return  __('notification.answer_noti', [], $lang);
                break;
            case USER_NOTI:
                return __('notification.user_noti', [], $lang);
                break;
            case FOLLOWS_ME:
                return  @$user->name . __('notification.follow_me', [], $lang);
                break;
            case FOLLOW_MY_QUES:
                return @$user->name .  __('notification.follow_my_question', [], $lang);
                break;
            case ANSWER_MY_QUES:
                return @$user->name . __('notification.answer_my_ques', [], $lang);
                break;
            case COMMENT_MY_QUES:
                return  @$user->name . __('notification.comment_my_ques', [], $lang);
                break;
            case UPVOTE_MY_ANS:
                return  @$user->name . __('notification.upvote_my_ans', [], $lang);
                break;
            case COMMENT_MY_ANS:
                return  @$user->name . __('notification.comment_my_ans', [], $lang);
                break;
                // case SHARE_MY_ANS:
                //     return  __('headings.user_noti',[],$lang);
                //     break;
            case FOLLOW_A_QUES:
                return  __('notification.user_noti', [], $lang);
                break;
            case ANSWER_A_QUES:
                return  @$user->name . __('notification.answer_a_ques', [], $lang);
                break;
            case COMMENT_A_QUES:
                return  @$user->name . __('notification.comment_a_ques', [], $lang);
                break;
                // case UPVOTE_A_ANS:
                //     return __('headings.user_noti',[],$lang);
                //     break;
                // case COMMENT_A_ANS:
                //     return __('headings.user_noti',[],$lang) ;
                //     break;
                // case SHARE_A_ANS:
                //     return  __('headings.user_noti',[],$lang) ;
                //     break;
            case COMMENT_MY_LAC:
                $lac = Lac::where('id', $content_id)->first();
                if ($lac) {
                    return  @$user->name . str_replace(":lac_name", $lac->title, __('notification.comment_my_lac', [], $lang));
                } else {
                    $notification->delete();
                    return false;
                }
                break;
            case UPVOTE_MY_LAC:
                $lac = Lac::where('id', $content_id)->first();
                if ($lac) {
                    return  @$user->name . str_replace(":lac_name", $lac->title, __('notification.upvote_my_lac', [], $lang));
                } else {
                    $notification->delete();
                    return false;
                }
                break;
                // case SHARE_MY_LAC:
                //     return  __('headings.user_noti',[],$lang);
                //     break;
            case NEW_POST_IN_LAC:
                $lacpost = LacPost::with(['lac'])->where('id', $content_id)->first();
                if ($lacpost) {
                    return @$user->name . str_replace(":lac_name", $lacpost->lac->title, __('notification.new_lac_post', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case ADD_ME_IN_LAC:
                $lac = Lac::where('id', $content_id)->first();
                if ($lac) {
                    return  str_replace(":lac_name", $lac->title, __('notification.added_in_lac', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case MY_LAC_APPROVED:
                $lac = Lac::where('id', $content_id)->first();
                if ($lac) {
                    return "Gurushala" . str_replace(":lac_name", $lac->title, __('notification.my_lac_approved', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case MY_DRL_APPROVED:
                $drl = DrlMetadata::where(['drl_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($drl) {
                    return str_replace(":content_name", $drl->title, __('notification.my_drl_approved', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case REPLIED_DRL_QUERY:
                $drl = DrlMetadata::where(['drl_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($drl) {
                    return str_replace(":title", $drl->title, __('notification.replied_drl_query', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case MY_LP_APPROVED:
                $lp = AdminLessonPlanMetadata::where(['admin_lesson_plan_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($lp) {
                    return  str_replace(":lp_title", $lp->title, __('notification.my_lp_approved', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case MY_LP_SAVED:
                $lp = AdminLessonPlanMetadata::where(['admin_lesson_plan_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($lp) {
                    $text =   str_replace(":lp_title", $lp->title, __('notification.my_lp_saved', [], $lang));
                    $text =   str_replace(":user", @$user->name, $text);
                    return $text;
                } else {
                    $notification->delete();
                    return false;
                }
                break;
            case MY_COURSE_APPROVED:
                $course = CourseMetadata::where(['course_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($course) {
                    return str_replace(":course_name", $course->title, __('notification.my_course_approved', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case ENROLLED_COURSE:
                $course = CourseMetadata::where(['course_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($course) {
                    return str_replace(":title", $course->title, __('notification.enrolled_course', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case COMPLETED_COURSE:
                $course = CourseMetadata::where(['course_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($course) {
                    return str_replace(":title", $course->title,  __('notification.completed_course', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case ENROLLED_MODULE:
                $module = ModuleMetadata::where(['module_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($module) {
                    return str_replace(":title", $module->title, __('notification.enrolled_module', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case COMPLETED_MODULE:
                $module = ModuleMetadata::where(['module_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($module) {
                    return str_replace(":title", $module->title, __('notification.completed_module', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case COURSE_PENDING:
                $course = CourseMetadata::where(['course_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($course) {
                    return str_replace(":title", $course->title,  __('notification.pending_course', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case MODULE_PENDING:
                $module = ModuleMetadata::where(['module_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($module) {
                    return str_replace(":title", $module->title, __('notification.pending_module', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }

                break;
            case MY_EDTECH_APPROVED:
                $edtech = EdtechMetadata::where(['edtech_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($edtech) {
                    return str_replace(":title", $edtech->title, __('notification.my_edtech_approved', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case COMMENT_MY_EDTECH:
                return str_replace(":user", @$user->name,  __('notification.comment_my_edtech', [], $lang));
                break;
            case SAVED_MY_EDTECH:
                return str_replace(":user", @$user->name,  __('notification.saved_my_edtech', [], $lang));
                break;
            case QUES_MY_EDTECH:
                // $edtech = EdtechMetadata::where(['edtech_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                return   str_replace(":user", @$user->name, __('notification.ask_my_edtech', [], $lang));
                break;
                // case POINTS_REDEEMED:
                //     return  __('headings.user_noti',[],$lang) ;
                //     break;
            case CURRENT_LEADERBOARD_POSITION:
                return str_replace(":rank", $content_id, __('notification.leaderboard_position', [], $lang));
                break;
            case REPLIED_COMP_QUERY:
                $edtech = CompetitionMetadata::where(['competition_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                return str_replace(":title", $edtech->title, __('notification.replied_comp_query', [], $lang));
                break;
            case REPLIED_WEBINAR_QUERY:
                $edtech = WebinarMetadata::where(['webinar_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                return str_replace(":title", $edtech->title, __('notification.replied_weinar_query', [], $lang));
                break;
            case CUSTOM_NOTIFICATION:
                $custom_notification = CustomNotification::findOrFail($content_id);

                return $custom_notification->title ? $custom_notification->title . "<br/>" . $custom_notification->description : $custom_notification->description;

                break;
            case ELIGIBLE_REWARD_NOTIFICATION:
                $reward = ProductMetadata::where(['product_id' => $content_id, 'language_id' => getDefaultLanguage()])->first();
                if ($reward) {
                    return str_replace(":title", $reward->title, __('notification.eligle_for_reward', [], $lang));
                } else {
                    $notification->delete();

                    return false;
                }
                break;
            case SET_GOAL:
                return __('notification.set_goal', [], $lang);
                break;
            case ORDER_PLACED:
                $order = Order::where('id', $content_id)->first();
                return __("notification.order_placed", [
                    "user" => auth()->user()->name,
                    "order_id" => $order->id,
                    "product_count" => $order->orderDetail()->count()
                ], $lang);

                break;
            case ORDER_DELIVERED:
                $order = OrderDetail::where('id', $content_id)->first();
                return __("notification.order_delivered", [
                    "user" => auth()->user()->name,
                    "order_id" => $order->order_id . "-" . $order->id,
                ], $lang);
            case ORDER_SHIPPED:
                $order = OrderDetail::where('id', $content_id)->first();
                return __("notification.order_shipped", [
                    "user" => auth()->user()->name,
                    "order_id" => $order->order_id . "-" . $order->id,
                ], $lang);

                break;
            case REPORT_CONTENT:
                return "Thank you for reporting the content. We will review the same and take suitable action within 48 hours.";
                break;
            case CONTENT_MODERATED:
                return "This is to inform you that your content has been moderated by the Gurushala team.";
                break;
        }
    } catch (Exception $e) {
        info($e);
        $notification->delete();

        return false;
    }
}

function checkCourseEnrollment($user_id, $course_id)
{
    $return = false;
    $enrolled = UserEnrollCourse::where(['user_id' => $user_id, 'course_id' => $course_id])->first();
    if (!is_null($enrolled)) {
        $return = true;
    }
    return $return;
}

function activityLog($log_name, $log_desc, $performed_on, $additional_param = [])
{
    $logged = activity($log_name)
        ->performedOn($performed_on)
        ->causedBy(auth()->user())
        ->withProperties($additional_param)
        ->log($log_desc);

    return $logged;
}

function unreadCountNotification($user_id)
{
    return Notification::where(['notify_to' => $user_id, 'status' => 'unread'])->count();
}

function convertTextToLink($string)
{
    $format_string = preg_replace_callback(
        // "/([a-zA-Z0-9]+:\/\/)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\.[A-Za-z]{2,4})(:[0-9]+)?(\/.*)?/",
        // "/([a-zA-Z0-9]+:\/\/)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\.[A-Za-z]{2,4})(:[0-9]+)?(\/[^\s]*)?/",
        "/(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)?([a-zA-Z0-9_]+:[a-zA-Z0-9_]+@)?([a-zA-Z0-9.-]+\.[A-Za-z]{2,4})(:[0-9]+)?(\/[^\s]*)?/",
        function ($v) {
            return '<a href="' . $v[0] . '" target="_blank">' . $v[0] . '</a>';
        },
        $string
    );
    return $format_string;
}

function videoType($url)
{
    if (strpos($url, 'youtu') > 0) {
        return 'youtube';
    } elseif (strpos($url, 'vimeo') > 0) {
        return 'vimeo';
    } elseif (strpos($url, 'dropbox') > 0) {
        return 'dropbox';
    } else {
        return 'unknown';
    }
}
function resourceNavigation($resources, $course_id, $module_id, $module)
{
    $resourceNavigation = $resInfo = [];
    $key = 0;
    foreach ($resources[RELATE] as $relate) {
        $resourceNavigation['nav'][$key]['resource_id'] = $relate->id;
        $resourceNavigation['nav'][$key]['module_id'] = $relate->module_id;
        $resourceNavigation['nav'][$key]['type'] = 1; //1 is doc
        $resourceNavigation['nav'][$key]['course_id'] = $course_id;
        $resourceNavigation['nav'][$key]['module_metadata_id'] = $relate->module_metadata_id;
        $resourceNavigation['nav'][$key]['module_category_id'] = $relate->module_category_id;
        $resourceNavigation['info'][$relate->id]['key'] = $key;
        $key++;
    }
    $resourceNavigation['nav'][$key]['type'] = 2; //question
    $resourceNavigation['nav'][$key]['module_id'] = $module_id;
    $resourceNavigation['nav'][$key]['course_id'] = $course_id;
    $resourceNavigation['nav'][$key]['module_category_id'] = RELATE;
    $resourceNavigation['nav'][$key]['module_metadata_id'] = $relate->module_metadata_id;
    $resourceNavigation['question'][$module_id . '_' . RELATE] = $key;
    $key++;
    foreach ($resources[EXPLORE] as $explore) {
        $resourceNavigation['nav'][$key]['resource_id'] = $explore->id;
        $resourceNavigation['nav'][$key]['module_id'] = $explore->module_id;
        $resourceNavigation['nav'][$key]['type'] = 1; //1 is doc
        $resourceNavigation['nav'][$key]['course_id'] = $course_id;
        $resourceNavigation['nav'][$key]['module_metadata_id'] = $explore->module_metadata_id;
        $resourceNavigation['nav'][$key]['module_category_id'] = $explore->module_category_id;
        $resourceNavigation['info'][$explore->id]['key'] = $key;
        $key++;
    }
    if (isset($module->game) && !empty($module->game)) {
        // for game updation
        $resourceNavigation['nav'][$key]['type'] = 3; //game
        $resourceNavigation['nav'][$key]['game'] = $module->game;
        $resourceNavigation['nav'][$key]['module_id'] = $module_id;
        $resourceNavigation['game'] = $key;
        $key++;
    }

    $resourceNavigation['nav'][$key]['type'] = 2;
    $resourceNavigation['nav'][$key]['module_id'] = $module_id;
    $resourceNavigation['nav'][$key]['course_id'] = $course_id;
    $resourceNavigation['nav'][$key]['module_category_id'] = ASSESS;
    $resourceNavigation['nav'][$key]['module_metadata_id'] = $explore->module_metadata_id;
    $resourceNavigation['question'][$module_id . '_' . ASSESS] = $key;

    $key++;
    foreach ($resources[FURTHER_READINGS] as $further) {
        $resourceNavigation['nav'][$key]['resource_id'] = $further->id;
        $resourceNavigation['nav'][$key]['module_id'] = $further->module_id;
        $resourceNavigation['nav'][$key]['type'] = 1; //1 is doc
        $resourceNavigation['nav'][$key]['course_id'] = $course_id;
        $resourceNavigation['nav'][$key]['module_metadata_id'] = $further->module_metadata_id;
        $resourceNavigation['nav'][$key]['module_category_id'] = $further->module_category_id;
        $resourceNavigation['info'][$further->id]['key'] = $key;
        $key++;
    }
    // dd($resourceNavigation);
    return $resourceNavigation;
}

/**
 * @desc used to export data
 */
function exportData($model)
{
    $response = Excel::raw($model, \Maatwebsite\Excel\Excel::CSV, ['Content-Type' => 'text/csv']);
    return $response;
}

function checkModuleEnrollment($user_id, $module_id)
{
    $return = false;
    $enrolled = UserEnrollModule::where(['user_id' => $user_id, 'module_id' => $module_id])->first();
    if (!is_null($enrolled)) {
        $return = true;
    }
    return $return;
}


/**
 * getReportedLink function
 *
 * @param [type] $type
 * @param [type] $id
 * @return void
 */
function getReportedLink($type, $id)
{

    switch ($type) {
        case QUESTION:
            $question = Question::find($id);
            if ($question) {
                return route('question.show', encryptDecrypt($id));
            } else {
                return "N/A";
            }
        case ANSWER:
            $question = QuestionAnswer::find($id);
            if ($question) {
                return route('question.show', encryptDecrypt($question->question_id));
            } else {
                return "N/A";
            }
        case COMMENT:
            $comment = AnswerComment::find($id);
            $answer = QuestionAnswer::find($comment->answer_id);
            if ($answer) {
                return route('question.show', encryptDecrypt($answer->question_id));
            } else {
                return "N/A";
            }
            break;
        case EDTECH_COMMENT:
            return route('ed-tech.show', encryptDecrypt($id));
            break;
        case LAC_POST:
        case LAC_COMMENT:

            $post = LacPost::find($id);
            if ($post) {
                return route('lac-detail', encryptDecrypt($post->lac_id));
            } else {
                return "N/A";
            }
            break;
        case BLOG_COMMENT:

            $post = BlogComment::find($id);
            if ($post) {
                if ($post->type == TEXT_BLOG) {
                    return route('text-blog.show', encryptDecrypt($post->blog_id));
                } else if ($post->type == IMAGE_BLOG) {
                    return route('image-blog.show', encryptDecrypt($post->blog_id));
                } else if ($post->type == VIDEO_BLOG) {
                    return route('tvideo-blog.show', encryptDecrypt($post->blog_id));
                } else if ($post->type == CHALLENGE_BLOG) {
                    return route('challenge-blog.show', encryptDecrypt($post->blog_id));
                } else if ($post->type == PODCAST) {
                    return route('podcast.show', encryptDecrypt($post->blog_id));
                }
            } else {
                return "N/A";
            }
            break;
        case BLOG_REPORT:

            $post = Blog::find($id);
            if ($post) {
                if ($post->type == TEXT_BLOG) {
                    return route('text-blog.show', encryptDecrypt($id));
                } else if ($post->type == IMAGE_BLOG) {
                    return route('image-blog.show', encryptDecrypt($id));
                } else if ($post->type == VIDEO_BLOG) {
                    return route('tvideo-blog.show', encryptDecrypt($id));
                } else if ($post->type == CHALLENGE_BLOG) {
                    return route('challenge-blog.show', encryptDecrypt($id));
                } else if ($post->type == PODCAST) {
                    return route('podcast.show', encryptDecrypt($id));
                }
            } else {
                return "N/A";
            }
            break;
        default:
    }
}

/**
 * getQueryLink function
 *
 * @param [type] $type
 * @param [type] $id
 * @return void
 */
function getQueryLink($type, $id)
{

    switch ($type) {
        case "1":
            return route('course.learn', encryptDecrypt($id));
            break;
        case "2":
            return route('question.show', encryptDecrypt($id));
            break;
        case "3":
            return route('ed-tech.show', encryptDecrypt($id));
            break;
        case "4":
            return route('drl.show', encryptDecrypt($id));
            break;
        default:
    }
}

function roundDecimal($number, $digit)
{
    return number_format((float) $number, $digit, '.', '');
}
function checkSaved($user_id, $content_id, $type)
{
    $saved = UserSavedContent::where(
        ['user_id' => $user_id, 'content_id' => $content_id, 'category_type_id' => $type]
    )->first();
    if (is_null($saved)) {
        return 0;
    }
    return 1;
}
function totalLpAddtions($drl_id)
{
    return DrlLessonPlan::where(['drl_id' => $drl_id])->count();
}
function drlClasses($drl_id)
{
    $drlClasses = DrlClass::with('getClassMetadata')->where('drl_id', $drl_id)->get();
    if ($drlClasses->count() > 0) {
        return implode(',', (array_column(array_column($drlClasses->toArray(), 'get_class_metadata'), 'title')));
    }
    return null;
}

function getPopupNotification()
{
    return PopupNotification::with(['getProviderMetadata' => function ($q) {
        return $q->select(['title', 'popup_notification_id', 'description', 'image'])->where('language_id', getDefaultLanguage());
    }])->orderBy("created_at", 'desc')->where('status', ACTIVE)->first();
}

function dateFormat($date)
{
    $date = date_create($date);
    return date_format($date, "d/m/Y");
}


function getNextUrl($nextResource, $user_id, $module_id, $resources, $course_id)
{
    if (!empty($nextResource)) {
        if ($nextResource['type'] == 2) {
            if ($nextResource['module_category_id'] != ASSESS) {
                if ($resources[$nextResource['module_category_id']]->count() == countResourceView($module_id, $nextResource['module_category_id'], $user_id)) {
                    if (checkQuestionnaireView($module_id, $nextResource['module_category_id'], $user_id, $nextResource['module_metadata_id'])) {
                        $route = route('questionnaire.result', [
                            'module_id' => encryptDecrypt($module_id),
                            'type' => encryptDecrypt($nextResource['module_category_id']),
                            'course_id' => encryptDecrypt($course_id)
                        ]);
                    } else {
                        $route = route('course.questionnaire', [
                            'module_id' => encryptDecrypt($module_id),
                            'type' => encryptDecrypt($nextResource['module_category_id']),
                            'course_id' => encryptDecrypt($course_id)
                        ]);
                    }
                } else {
                    $route = "#";
                }
            } else {
                if (checkQuestionnaireView($module_id, $nextResource['module_category_id'], $user_id, $nextResource['module_metadata_id'])) {
                    $route = route('questionnaire.result', [
                        'module_id' => encryptDecrypt($module_id),
                        'type' => encryptDecrypt($nextResource['module_category_id']),
                        'course_id' => encryptDecrypt($course_id)
                    ]);
                } else {
                    $route = route('course.questionnaire', [
                        'module_id' => encryptDecrypt($module_id),
                        'type' => encryptDecrypt($nextResource['module_category_id']),
                        'course_id' => encryptDecrypt($course_id)
                    ]);
                }
            }
        } elseif ($nextResource['type'] == 3) {
            $route = route('course.game', [
                'game' => encryptDecrypt($nextResource['game']),
                'course_id' => encryptDecrypt($nextResource['module_id']),
                'module_id' => encryptDecrypt($nextResource['module_id'])
            ]);
        } else {
            $route = route('course.resource', [
                'module_id' => encryptDecrypt($nextResource['module_id']),
                'type' => encryptDecrypt($nextResource['module_category_id']),
                'resource_id' => encryptDecrypt($nextResource['resource_id']),
                'course_id' => encryptDecrypt($nextResource['course_id'])
            ]);
        }
    } else {
        $route = "#";
    }
    return $route;
}


/**
 * create device group
 */
function firebaseDeviceGroup($body)
{
    try {

        $url = "https://fcm.googleapis.com/fcm/notification";
        $serverKey = env('FIREBASE_API_KEY');
        $senderKey = env('FIREBASE_PROJECT_KEY');

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key=' . $serverKey;
        $headers[] = 'project_id:' . $senderKey;


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

        //Send the request
        $response = curl_exec($ch);

        // dd($response, strpos($response, 'Unauthorized'));
        if (strpos($response, 'Unauthorized') > -1) {
            return $response;
        } else {
            $response = json_decode($response, true);
            curl_close($ch);
            if (isset($response['error'])) {
                return $response;
            } else {
                return [
                    'success' => true,
                    'notification_key' => $response['notification_key']
                ];
            }
        }
    } catch (Exception $e) {
        return $e;
    }
}


/**
 * Send push notification  developed by Najmussaher
 */
function sendPushNotification($user_id, $payload, $notification_id)
{
    try {
        $url = "https://fcm.googleapis.com/fcm/send";
        $serverKey = env('FIREBASE_API_KEY');

        $user = User::find($user_id);
        $message = array('to' => $user->notification_key, 'data' => ["notification" => $payload],);

        $json = json_encode($message);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key=' . $serverKey;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);


        //Send the request
        $response = curl_exec($ch);
        NotificationLog::create([
            'notification_id' => $notification_id,
            'payload' => $json,
            'response' => $response
        ]);

        //Close request
        if ($response === FALSE) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);

        $response = json_decode($response, true);


        if (isset($response['success'])) {
            return $response;
        } else {
            return $response;
        }
    } catch (Exception $e) {
        return false;
    }
}


function getLatestNotification($limit = 5)
{
    return Notification::where(['notify_to' => auth()->id(), 'status' => 'unread'])->orderBy('created_at', 'desc')->limit($limit)->get();
}



function notifyUser($notify_to, $notify_by, $content_id, $type)
{
    $notification = Notification::create([
        'notify_to' => $notify_to,
        'notify_by' => $notify_by,
        'content_id' => $content_id,
        'type' => $type,
    ]);

    if ($notification->notifyTo->notification_key && $notification->notifyTo->notification_key_name) {
        //send push
        $text = notificationText($content_id, $type, $notification->id, $notification->status, $notification->notifyBy, $notification->notifyTo->customerLanguage->locale);
        $url = "<li><a href=" . url('read-notification/' . encryptDecrypt($type) . '/' . encryptDecrypt($content_id) . '/' . encryptDecrypt($notification->id)) . ">" . $text . "</a></li>";

        $unreadCount = \unreadCountNotification($notify_to);

        $payload = array('title' => env('APP_NAME'), 'body' => $text, 'data' => ['url' => $url], 'sound' => 'default', 'badge' => $unreadCount);
        sendPushNotification($notify_to, $payload, $notification->id);
    }
}

/**
 * @desc convert time zone
 */
function convertTimeZone($date, $format = "Y-m-d H:i:s")
{
    $date = new DateTime($date);
    $date->setTimezone(new DateTimeZone('Asia/Kolkata')); // +04
    return $date->format($format); // 2012-07-15 05:00:00

}


/**
 * @param [type] $state
 * @return void
 */
function getDistricts($state)
{
    return District::where('state_id', $state)->orderBy("name", "asc")->get();
}


function checkModuleStarted($module_id, $user_id)
{
    $resources = ModuleResource::where(['module_id' => $module_id])->get()->pluck("id");
    return UserViewedResource::whereIn('resource_id', $resources)->where('user_id', $user_id)->count();
}

/**
 * getYoutubeChatUrl function
 *
 * @param [type] $url
 * @return void
 */
function getYoutubeChatUrl($url)
{
    $returnOriginal = true;
    $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
    $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

    if (preg_match($longUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }

    if (preg_match($shortUrlRegex, $url, $matches)) {
        $youtube_id = $matches[count($matches) - 1];
        $returnOriginal = false;
    }
    $hostName = request()->getHost();
    /**if  */
    $returnUrl = ($returnOriginal) ? $url : 'https://www.youtube.com/live_chat?v=' . $youtube_id . '&embed_domain=' . $hostName . '&app=desktop';
    return $returnUrl;
}


function getUserSchools()
{
    return User::select(["school_name"])->distinct()->orderBy("school_name", "asc")->get();
}
/**
 * @desc getTeachingLanguage
 */
function getTeachingLanguage()
{
    return TeachingLanguage::select(['id', 'title'])->get();
}

/**
 * @desc getTeacherLanguage
 */
function getTeacherLanguage($user_id)
{
    $lang = '';
    $data = UserInfo::select(['languages'])->where('user_id', $user_id)->first();
    if (isset($data->languages) && !empty($data->languages)) {
        $arr = json_decode($data->languages);
        $lang = TeachingLanguage::select(['title'])->whereIn('id', $arr)->get()->toArray();
        $lang = implode(', ', array_column($lang, 'title'));
    }
    return $lang;
}


/**
 * getting user last order data
 */
function userLastOrder($user_id)
{
    return Order::where("user_id", $user_id)->where("status", ORDER_STATUS['DELIVERED'])->orderBy("id", "desc")->first();
}



/**
 * getting user last order data
 */
function creditHistoryText($price, $items)
{
    $products = array_column(array_column($items->toArray(), "product_detail"), "title");
    $product_name = implode(",", $products);
    return "Redeem of <b>$product_name</b>";
}


/**
 * getting user last order data
 */
function totatRedeemablePoint($user_id)
{
    return totalUserPoint($user_id) - Order::where("user_id", $user_id)->sum("total_amount");
}

/**
 * getting user last order data
 */
function cureentRedeemablePoint($user_id, $order_id)
{
    $orders = OrderDetail::where("order_id", '<', $order_id)->whereHas('order', function ($q) use ($user_id) {
        $q->where("user_id", $user_id);
    })->get();

    $order_total = 0;
    foreach ($orders as $key => $value) {
        $order_total += $value->product_price * $value->quantity;
    }
    return totalUserPoint($user_id) - $order_total;
}


function excelGenerator($data)
{
    foreach ($data->cursor() as $user) {
        yield $user;
    }
}


function sendTextSmsNotification($number, $message)
{
    try {
        $sms = AWS::createClient('sns');
        $response = $sms->publish([
            'Message' => $message,
            'PhoneNumber' => '+91' . $number,
            'MessageAttributes' => [
                'AWS.SNS.SMS.SenderID' => [
                    'DataType' => 'String',
                    'StringValue' => 'GSHALA'
                ],
                'AWS.SNS.SMS.SMSType'  => [
                    'DataType'    => 'String',
                    'StringValue' => 'Transactional',
                ]
            ],

        ]);
        return $response;
    } catch (Exception $e) {
        info($e->getMessage());
    }
}


function getLatestTransactionCount($action, $user_id)
{
    return  Leaderboard::whereHas('leaderboardData', function ($q) use ($action) {
        $q->where($action);
    })
        ->where("user_id", $user_id)
        ->whereDate("created_at", date("Y-m-d"))
        ->count();
}
/**
 * getSurveyResponseQuestion function
 *
 * @param [type] $surveyid
 * @param [type] $pageId
 * @param [type] $questionId
 * @return void
 */
function getSurveyResponseQuestion($surveyid, $pageId, $questionId)
{
    try {
        $client = new GuzzleHttp\Client;
        //https://api.surveymonkey.com/v3/surveys/293417397/responses/12077870501/details

        $response = $client->get('https://api.surveymonkey.net/v3/surveys/' . $surveyid . '/pages/' . $pageId . '/questions/' . $questionId . '', [
            'headers' => [
                'Authorization' => 'bearer BjVjlV9MiVBgfe1XpS2xPdZSEi1uU.-gDGIFFKoGU9jtb.N2.mF3bdNGh7G7vp4tkZv4G12c9ruUaFJuBujOuIREeoswxS.g-3ht6LNhOuGRUJyCTpcmDX27GTEMu--x',
                'Content-Type' => 'application/json',
            ],

        ]);

        // This will parse it into an array
        $response = json_decode($response->getBody(), true);
        return $response;
        // dd($response);
    } catch (\Throwable $th) {
        Log::error('Message' . $th->getMessage() . ' Line ' . $th->getLine() . ' File ' . $th->getFile());

        return false;
    }
}

function getContentProviderName($data)
{
    if ($data->provider_id) {
        return $data->providerMetadata->name;
    } else {
        if ($data->author_name) {
            return $data->author_name;
        }
    }
    // return $data->createdBy->name;
    return __("headings.project_name");
}




function getBanner($type)
{
    return BannerMetadata::select([
        'id',
        'banner_image_url',
        'banner_url',
    ])
        ->whereHas('banner', function ($q)  use ($type) {
            $q->where('category_type_id', $type);
            $q->where('status', ACTIVE);
        })
        ->where('language_id', getDefaultLanguage())
        ->where('status', ACTIVE)
        ->orderBy('created_at', 'desc')
        ->get();
}





function closetags($html)
{
    preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
    $openedtags = $result[1];
    preg_match_all('#</([a-z]+)>#iU', $html, $result);
    $closedtags = $result[1];
    $len_opened = count($openedtags);
    if (count($closedtags) == $len_opened) {
        return $html;
    }
    $openedtags = array_reverse($openedtags);
    for ($i = 0; $i < $len_opened; $i++) {
        if (!in_array($openedtags[$i], $closedtags)) {
            $html .= '</' . $openedtags[$i] . '>';
        } else {
            unset($closedtags[array_search($openedtags[$i], $closedtags)]);
        }
    }
    return $html;
}


function validHTML($html, $checkOrder = true)
{
    preg_match_all('#<([a-z]+)>#i', $html, $start, PREG_OFFSET_CAPTURE);
    preg_match_all('#<\/([a-z]+)>#i', $html, $end, PREG_OFFSET_CAPTURE);
    $start = $start[1];
    $end = $end[1];

    if (count($start) != count($end))
        // dd('Check numbers of tags');

        if ($checkOrder) {
            $is = 0;
            foreach ($end as $v) {
                if ($v[0] != $start[$is][0] || $v[1] < $start[$is][1])
                    dd('End tag [' . $v[0] . '] not opened');

                $is++;
            }
        }

    return true;
}


function truncate($text, $length, $suffix = '&hellip;', $isHTML = true)
{
    $i = 0;
    $simpleTags = array('br' => true, 'hr' => true, 'input' => true, 'image' => true, 'link' => true, 'meta' => true);
    $tags = array();
    if ($isHTML) {
        preg_match_all('/<[^>]+>([^<]*)/', $text, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        foreach ($m as $o) {
            if ($o[0][1] - $i >= $length)
                break;
            $t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
            // test if the tag is unpaired, then we mustn't save them
            if ($t[0] != '/' && (!isset($simpleTags[$t])))
                $tags[] = $t;
            elseif (end($tags) == substr($t, 1))
                array_pop($tags);
            $i += $o[1][1] - $o[0][1];
        }
    }

    // output without closing tags
    $output = substr($text, 0, $length = min(strlen($text),  $length + $i));
    // closing tags
    $output2 = (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '');

    // Find last space or HTML tag (solving problem with last space in HTML tag eg. <span class="new">)
    $pos = (int)end(end(preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE)));
    // Append closing tags to output
    $output .= $output2;

    // Get everything until last space
    $one = substr($output, 0, $pos);
    // Get the rest
    $two = substr($output, $pos, (strlen($output) - $pos));
    // Extract all tags from the last bit
    preg_match_all('/<(.*?)>/s', $two, $tags);
    // Add suffix if needed
    if (strlen($text) > $length) {
        $one .= $suffix;
    }
    // Re-attach tags
    $output = $one . implode($tags[0]);

    //added to remove  unnecessary closure
    $output = str_replace('</!-->', '', $output);

    return $output;
}
