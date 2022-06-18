#1 Updated Landing Page
	When you enter the homepage on a new install, the page that gets displayed has had a facelift and is now built with Tailwind CSS. It comes in both light and dark versions. It ties to Laravel ‘s various SaaS goods as well as community pages.

#2 New Default App / Models Directory
	Instead of leaving the model class in the root app directory, Laravel 8 now ships with an app / models directory, as in previous versions of Laravel.

	According to a poll, over 80 percent of developers created an app/models directory themselves.

#3 Removed Controller’s Namespace Prefix
	In previous versions of Laravel, you could use a property named $namespace in RouteServiceProvider.php to automatically prefix your controller’s namespace by applying App\Http\Controllers.

	Laravel could have double prefixed your namespaces if you were using the callable syntax in your web.php route’s code.

	This property has been removed Laravel 8, so you can import the controller classes to your routes file without any problems.

#4 Blade Component Attributes
	If you extended a Blade component in Laravel 7 (e.g., with a component called PrimaryButton, which extended another component called Button), the child Button wouldn’t have transferred the attributes.

	In Laravel 8, the $attributes are usable for all child components, making it easier to create extended components.

#5 Database Schema Dumping
	If you’re operating on a big application with a large number of database migrations, Laravel 8 has a new function called schema dumping to help you clean them up.

	You can run php artisan schema: dump, which creates an SQL file in the database / schema directory that contains your database ‘s complete schema as raw SQL.

	If you run php artisan migrate, it will first look for a schema file to run and then any normal migration files.

	By default, you won’t uninstall your current migration files by running the command. However, if you apply the –prune flag to the instruction, all your migration files will be removed, leaving you with a single file of the schema.

	If you run a schema dump, build new migrations, and run the command again, the new migrations will be appended to the current schema file.


#6 Queued Job Batching
	Work batching is another new feature of Laravel 8. You can now send several jobs to the queue simultaneously, called a batch, to be processed simultaneously, assuming you have enough queue staff running.

	It also records callbacks to fire after all the jobs have been completed. There are three callbacks:

	(then) – Fires when all batch jobs have been successfully completed
	(catch) – Fires on the first, if any, job failure in the batch
	(finally)- Fires when all jobs in the batch have finished executing
	All callback methods have access to the $batch object, which contains different methods such as status checking, failure determination, batch cancellation, and more.

	For example, you could use it in the catch() callback to stop the rest of the batch from being processed when an error occurs.


#7 Maintenance Mode
	In Laravel 7, if you run php artisan down and below to place your site in maintenance mode when deploying your application, and then run Composer as part of the deployment, your application throws errors when it updates the dependencies and writes the autoload file.

	This means your end users will see an error page instead of the maintenance mode page.

	Laravel 8 solves this problem. You can now transfer the view name to the render flag as part of the artisan down order. For example:

		Example - php artisan down --render="errores::maintain-page"

	Laravel will pre-render the view (in this case, errors/maintain-page.blade.php) and then your site will be in maintenance mode.

	If any users go to access your site, they’ll see your maintenance page. The framework won’t even attempt to load the autoload file from the composer, meaning errors won’t be thrown.