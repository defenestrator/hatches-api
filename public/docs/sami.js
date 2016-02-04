(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '    <ul>                <li data-name="namespace:Hatches" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches.html">Hatches</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:Hatches_Commands" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Commands.html">Commands</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Commands_Command" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Commands/Command.html">Command</a>                    </div>                </li>                            <li data-name="class:Hatches_Commands_InspireFlyFishers" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Commands/InspireFlyFishers.html">InspireFlyFishers</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Events" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Events.html">Events</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Events_Event" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Events/Event.html">Event</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Exceptions_Handler" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Exceptions/Handler.html">Handler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Http.html">Http</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:Hatches_Http_Controllers" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Http/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="namespace:Hatches_Http_Controllers_Auth" class="opened">                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Http/Controllers/Auth.html">Auth</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Http_Controllers_Auth_AuthController" class="opened">                    <div style="padding-left:80px" class="hd leaf">                        <a href="Hatches/Http/Controllers/Auth/AuthController.html">AuthController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_Auth_PasswordController" class="opened">                    <div style="padding-left:80px" class="hd leaf">                        <a href="Hatches/Http/Controllers/Auth/PasswordController.html">PasswordController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Hatches_Http_Controllers_AdministratorPageController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/AdministratorPageController.html">AdministratorPageController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_Controller" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_FishSpeciesController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/FishSpeciesController.html">FishSpeciesController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_FisheriesController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/FisheriesController.html">FisheriesController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_FlyboxesController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/FlyboxesController.html">FlyboxesController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_HatchReportPageController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/HatchReportPageController.html">HatchReportPageController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_HomePageController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/HomePageController.html">HomePageController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_PagesController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/PagesController.html">PagesController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_ProfilePageController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/ProfilePageController.html">ProfilePageController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_TripReportPageController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/TripReportPageController.html">TripReportPageController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_TripReportsController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/TripReportsController.html">TripReportsController</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Controllers_UsersController" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Controllers/UsersController.html">UsersController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Http_Middleware" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Http/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Http_Middleware_Authenticate" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Middleware/Authenticate.html">Authenticate</a>                    </div>                </li>                            <li data-name="class:Hatches_Http_Middleware_RedirectIfAuthenticated" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Middleware/RedirectIfAuthenticated.html">RedirectIfAuthenticated</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Http_Requests" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Http/Requests.html">Requests</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Http_Requests_Request" class="opened">                    <div style="padding-left:62px" class="hd leaf">                        <a href="Hatches/Http/Requests/Request.html">Request</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Hatches_Http_Kernel" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Http/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Jobs" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Jobs.html">Jobs</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Jobs_Command" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Jobs/Command.html">Command</a>                    </div>                </li>                            <li data-name="class:Hatches_Jobs_InspireFlyFishers" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Jobs/InspireFlyFishers.html">InspireFlyFishers</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Providers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Providers.html">Providers</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Providers_AppServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/AppServiceProvider.html">AppServiceProvider</a>                    </div>                </li>                            <li data-name="class:Hatches_Providers_BusServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/BusServiceProvider.html">BusServiceProvider</a>                    </div>                </li>                            <li data-name="class:Hatches_Providers_ConfigServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/ConfigServiceProvider.html">ConfigServiceProvider</a>                    </div>                </li>                            <li data-name="class:Hatches_Providers_EventServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/EventServiceProvider.html">EventServiceProvider</a>                    </div>                </li>                            <li data-name="class:Hatches_Providers_JsonApiServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/JsonApiServiceProvider.html">JsonApiServiceProvider</a>                    </div>                </li>                            <li data-name="class:Hatches_Providers_RouteServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Providers/RouteServiceProvider.html">RouteServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Services" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Services.html">Services</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Services_Registrar" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Services/Registrar.html">Registrar</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Transformers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Transformers.html">Transformers</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Transformers_FishSpeciesTransformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/FishSpeciesTransformer.html">FishSpeciesTransformer</a>                    </div>                </li>                            <li data-name="class:Hatches_Transformers_FisheryTransformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/FisheryTransformer.html">FisheryTransformer</a>                    </div>                </li>                            <li data-name="class:Hatches_Transformers_FlyboxTransformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/FlyboxTransformer.html">FlyboxTransformer</a>                    </div>                </li>                            <li data-name="class:Hatches_Transformers_Transformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/Transformer.html">Transformer</a>                    </div>                </li>                            <li data-name="class:Hatches_Transformers_TripReportTransformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/TripReportTransformer.html">TripReportTransformer</a>                    </div>                </li>                            <li data-name="class:Hatches_Transformers_UserTransformer" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Transformers/UserTransformer.html">UserTransformer</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:Hatches_Validators" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="Hatches/Validators.html">Validators</a>                    </div>                    <div class="bd">                            <ul>                <li data-name="class:Hatches_Validators_FileUploadFormat" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="Hatches/Validators/FileUploadFormat.html">FileUploadFormat</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:Hatches_Asset" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Asset.html">Asset</a>                    </div>                </li>                            <li data-name="class:Hatches_Comment" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Comment.html">Comment</a>                    </div>                </li>                            <li data-name="class:Hatches_FishSpecies" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/FishSpecies.html">FishSpecies</a>                    </div>                </li>                            <li data-name="class:Hatches_Fishery" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Fishery.html">Fishery</a>                    </div>                </li>                            <li data-name="class:Hatches_FlyPattern" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/FlyPattern.html">FlyPattern</a>                    </div>                </li>                            <li data-name="class:Hatches_Flybox" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Flybox.html">Flybox</a>                    </div>                </li>                            <li data-name="class:Hatches_Habitat" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Habitat.html">Habitat</a>                    </div>                </li>                            <li data-name="class:Hatches_Hatch" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Hatch.html">Hatch</a>                    </div>                </li>                            <li data-name="class:Hatches_HatchReport" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/HatchReport.html">HatchReport</a>                    </div>                </li>                            <li data-name="class:Hatches_HatchType" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/HatchType.html">HatchType</a>                    </div>                </li>                            <li data-name="class:Hatches_Map" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Map.html">Map</a>                    </div>                </li>                            <li data-name="class:Hatches_Prey" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Prey.html">Prey</a>                    </div>                </li>                            <li data-name="class:Hatches_Privacy" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Privacy.html">Privacy</a>                    </div>                </li>                            <li data-name="class:Hatches_Profile" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Profile.html">Profile</a>                    </div>                </li>                            <li data-name="class:Hatches_Report" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Report.html">Report</a>                    </div>                </li>                            <li data-name="class:Hatches_Role" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Role.html">Role</a>                    </div>                </li>                            <li data-name="class:Hatches_Tag" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Tag.html">Tag</a>                    </div>                </li>                            <li data-name="class:Hatches_TripReport" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/TripReport.html">TripReport</a>                    </div>                </li>                            <li data-name="class:Hatches_User" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/User.html">User</a>                    </div>                </li>                            <li data-name="class:Hatches_WaterData" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/WaterData.html">WaterData</a>                    </div>                </li>                            <li data-name="class:Hatches_Weather" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="Hatches/Weather.html">Weather</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    {"type": "Namespace", "link": "Hatches.html", "name": "Hatches", "doc": "Namespace Hatches"},{"type": "Namespace", "link": "Hatches/Commands.html", "name": "Hatches\\Commands", "doc": "Namespace Hatches\\Commands"},{"type": "Namespace", "link": "Hatches/Events.html", "name": "Hatches\\Events", "doc": "Namespace Hatches\\Events"},{"type": "Namespace", "link": "Hatches/Exceptions.html", "name": "Hatches\\Exceptions", "doc": "Namespace Hatches\\Exceptions"},{"type": "Namespace", "link": "Hatches/Http.html", "name": "Hatches\\Http", "doc": "Namespace Hatches\\Http"},{"type": "Namespace", "link": "Hatches/Http/Controllers.html", "name": "Hatches\\Http\\Controllers", "doc": "Namespace Hatches\\Http\\Controllers"},{"type": "Namespace", "link": "Hatches/Http/Controllers/Auth.html", "name": "Hatches\\Http\\Controllers\\Auth", "doc": "Namespace Hatches\\Http\\Controllers\\Auth"},{"type": "Namespace", "link": "Hatches/Http/Middleware.html", "name": "Hatches\\Http\\Middleware", "doc": "Namespace Hatches\\Http\\Middleware"},{"type": "Namespace", "link": "Hatches/Http/Requests.html", "name": "Hatches\\Http\\Requests", "doc": "Namespace Hatches\\Http\\Requests"},{"type": "Namespace", "link": "Hatches/Jobs.html", "name": "Hatches\\Jobs", "doc": "Namespace Hatches\\Jobs"},{"type": "Namespace", "link": "Hatches/Providers.html", "name": "Hatches\\Providers", "doc": "Namespace Hatches\\Providers"},{"type": "Namespace", "link": "Hatches/Services.html", "name": "Hatches\\Services", "doc": "Namespace Hatches\\Services"},{"type": "Namespace", "link": "Hatches/Transformers.html", "name": "Hatches\\Transformers", "doc": "Namespace Hatches\\Transformers"},{"type": "Namespace", "link": "Hatches/Validators.html", "name": "Hatches\\Validators", "doc": "Namespace Hatches\\Validators"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Asset.html", "name": "Hatches\\Asset", "doc": "&quot;Asset&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Asset", "fromLink": "Hatches/Asset.html", "link": "Hatches/Asset.html#method_user", "name": "Hatches\\Asset::user", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Asset", "fromLink": "Hatches/Asset.html", "link": "Hatches/Asset.html#method_privacy", "name": "Hatches\\Asset::privacy", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Asset", "fromLink": "Hatches/Asset.html", "link": "Hatches/Asset.html#method_tags", "name": "Hatches\\Asset::tags", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Asset", "fromLink": "Hatches/Asset.html", "link": "Hatches/Asset.html#method_comments", "name": "Hatches\\Asset::comments", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Comment.html", "name": "Hatches\\Comment", "doc": "&quot;Comment&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Comment", "fromLink": "Hatches/Comment.html", "link": "Hatches/Comment.html#method_user", "name": "Hatches\\Comment::user", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Comment", "fromLink": "Hatches/Comment.html", "link": "Hatches/Comment.html#method_tripReport", "name": "Hatches\\Comment::tripReport", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Comment", "fromLink": "Hatches/Comment.html", "link": "Hatches/Comment.html#method_HatchReport", "name": "Hatches\\Comment::HatchReport", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Comment", "fromLink": "Hatches/Comment.html", "link": "Hatches/Comment.html#method_flyPattern", "name": "Hatches\\Comment::flyPattern", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Comment", "fromLink": "Hatches/Comment.html", "link": "Hatches/Comment.html#method_fishery", "name": "Hatches\\Comment::fishery", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Events", "fromLink": "Hatches/Events.html", "link": "Hatches/Events/Event.html", "name": "Hatches\\Events\\Event", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "Hatches\\Exceptions", "fromLink": "Hatches/Exceptions.html", "link": "Hatches/Exceptions/Handler.html", "name": "Hatches\\Exceptions\\Handler", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Exceptions\\Handler", "fromLink": "Hatches/Exceptions/Handler.html", "link": "Hatches/Exceptions/Handler.html#method_report", "name": "Hatches\\Exceptions\\Handler::report", "doc": "&quot;Report or log an exception.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Exceptions\\Handler", "fromLink": "Hatches/Exceptions/Handler.html", "link": "Hatches/Exceptions/Handler.html#method_render", "name": "Hatches\\Exceptions\\Handler::render", "doc": "&quot;Render an exception into an HTTP response.&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/FishSpecies.html", "name": "Hatches\\FishSpecies", "doc": "&quot;FishSpecies&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\FishSpecies", "fromLink": "Hatches/FishSpecies.html", "link": "Hatches/FishSpecies.html#method_habitat", "name": "Hatches\\FishSpecies::habitat", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\FishSpecies", "fromLink": "Hatches/FishSpecies.html", "link": "Hatches/FishSpecies.html#method_fisheries", "name": "Hatches\\FishSpecies::fisheries", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Fishery.html", "name": "Hatches\\Fishery", "doc": "&quot;Fishery&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_user", "name": "Hatches\\Fishery::user", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_fishSpecies", "name": "Hatches\\Fishery::fishSpecies", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_hatches", "name": "Hatches\\Fishery::hatches", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_comments", "name": "Hatches\\Fishery::comments", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_tags", "name": "Hatches\\Fishery::tags", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_tripReports", "name": "Hatches\\Fishery::tripReports", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_hatchReports", "name": "Hatches\\Fishery::hatchReports", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Fishery", "fromLink": "Hatches/Fishery.html", "link": "Hatches/Fishery.html#method_privacy", "name": "Hatches\\Fishery::privacy", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/FlyPattern.html", "name": "Hatches\\FlyPattern", "doc": "&quot;FlyPattern&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\FlyPattern", "fromLink": "Hatches/FlyPattern.html", "link": "Hatches/FlyPattern.html#method_assets", "name": "Hatches\\FlyPattern::assets", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\FlyPattern", "fromLink": "Hatches/FlyPattern.html", "link": "Hatches/FlyPattern.html#method_tags", "name": "Hatches\\FlyPattern::tags", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\FlyPattern", "fromLink": "Hatches/FlyPattern.html", "link": "Hatches/FlyPattern.html#method_privacy", "name": "Hatches\\FlyPattern::privacy", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\FlyPattern", "fromLink": "Hatches/FlyPattern.html", "link": "Hatches/FlyPattern.html#method_comments", "name": "Hatches\\FlyPattern::comments", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Flybox.html", "name": "Hatches\\Flybox", "doc": "&quot;Flybox&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Flybox", "fromLink": "Hatches/Flybox.html", "link": "Hatches/Flybox.html#method_user", "name": "Hatches\\Flybox::user", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Flybox", "fromLink": "Hatches/Flybox.html", "link": "Hatches/Flybox.html#method_flyPatterns", "name": "Hatches\\Flybox::flyPatterns", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Flybox", "fromLink": "Hatches/Flybox.html", "link": "Hatches/Flybox.html#method_comments", "name": "Hatches\\Flybox::comments", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Flybox", "fromLink": "Hatches/Flybox.html", "link": "Hatches/Flybox.html#method_privacy", "name": "Hatches\\Flybox::privacy", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Habitat.html", "name": "Hatches\\Habitat", "doc": "&quot;Habitat&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Habitat", "fromLink": "Hatches/Habitat.html", "link": "Hatches/Habitat.html#method_fishSpecies", "name": "Hatches\\Habitat::fishSpecies", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Hatch.html", "name": "Hatches\\Hatch", "doc": "&quot;Hatch&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Hatch", "fromLink": "Hatches/Hatch.html", "link": "Hatches/Hatch.html#method_tags", "name": "Hatches\\Hatch::tags", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Hatch", "fromLink": "Hatches/Hatch.html", "link": "Hatches/Hatch.html#method_fisheries", "name": "Hatches\\Hatch::fisheries", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Hatch", "fromLink": "Hatches/Hatch.html", "link": "Hatches/Hatch.html#method_hatchType", "name": "Hatches\\Hatch::hatchType", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/HatchReport.html", "name": "Hatches\\HatchReport", "doc": "&quot;HatchReport&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\HatchReport", "fromLink": "Hatches/HatchReport.html", "link": "Hatches/HatchReport.html#method_createReport", "name": "Hatches\\HatchReport::createReport", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\HatchReport", "fromLink": "Hatches/HatchReport.html", "link": "Hatches/HatchReport.html#method_index", "name": "Hatches\\HatchReport::index", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/HatchType.html", "name": "Hatches\\HatchType", "doc": "&quot;HatchType&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\HatchType", "fromLink": "Hatches/HatchType.html", "link": "Hatches/HatchType.html#method_prey", "name": "Hatches\\HatchType::prey", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\HatchType", "fromLink": "Hatches/HatchType.html", "link": "Hatches/HatchType.html#method_hatches", "name": "Hatches\\HatchType::hatches", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/AdministratorPageController.html", "name": "Hatches\\Http\\Controllers\\AdministratorPageController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\AdministratorPageController", "fromLink": "Hatches/Http/Controllers/AdministratorPageController.html", "link": "Hatches/Http/Controllers/AdministratorPageController.html#method_index", "name": "Hatches\\Http\\Controllers\\AdministratorPageController::index", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers\\Auth", "fromLink": "Hatches/Http/Controllers/Auth.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method___construct", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::__construct", "doc": "&quot;Create a new authentication controller instance.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_validator", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::validator", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_postRegister", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::postRegister", "doc": "&quot;Handle a registration request for the application.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_sendEmail", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::sendEmail", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_resendEmail", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::resendEmail", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_activateAccount", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::activateAccount", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\AuthController", "fromLink": "Hatches/Http/Controllers/Auth/AuthController.html", "link": "Hatches/Http/Controllers/Auth/AuthController.html#method_create", "name": "Hatches\\Http\\Controllers\\Auth\\AuthController::create", "doc": "&quot;Create a new user instance after a valid registration.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers\\Auth", "fromLink": "Hatches/Http/Controllers/Auth.html", "link": "Hatches/Http/Controllers/Auth/PasswordController.html", "name": "Hatches\\Http\\Controllers\\Auth\\PasswordController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Auth\\PasswordController", "fromLink": "Hatches/Http/Controllers/Auth/PasswordController.html", "link": "Hatches/Http/Controllers/Auth/PasswordController.html#method___construct", "name": "Hatches\\Http\\Controllers\\Auth\\PasswordController::__construct", "doc": "&quot;Create a new password controller instance.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/Controller.html", "name": "Hatches\\Http\\Controllers\\Controller", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_setStatusCode", "name": "Hatches\\Http\\Controllers\\Controller::setStatusCode", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_getStatusCode", "name": "Hatches\\Http\\Controllers\\Controller::getStatusCode", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respond", "name": "Hatches\\Http\\Controllers\\Controller::respond", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondWithError", "name": "Hatches\\Http\\Controllers\\Controller::respondWithError", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondNotFound", "name": "Hatches\\Http\\Controllers\\Controller::respondNotFound", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondInternalError", "name": "Hatches\\Http\\Controllers\\Controller::respondInternalError", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondAuthenticationError", "name": "Hatches\\Http\\Controllers\\Controller::respondAuthenticationError", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondBadRequest", "name": "Hatches\\Http\\Controllers\\Controller::respondBadRequest", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\Controller", "fromLink": "Hatches/Http/Controllers/Controller.html", "link": "Hatches/Http/Controllers/Controller.html#method_respondForbiddenRequest", "name": "Hatches\\Http\\Controllers\\Controller::respondForbiddenRequest", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html", "name": "Hatches\\Http\\Controllers\\FishSpeciesController", "doc": "&quot;Class FishSpeciesController&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method___construct", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_index", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_create", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_store", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_show", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_edit", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_update", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FishSpeciesController", "fromLink": "Hatches/Http/Controllers/FishSpeciesController.html", "link": "Hatches/Http/Controllers/FishSpeciesController.html#method_destroy", "name": "Hatches\\Http\\Controllers\\FishSpeciesController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/FisheriesController.html", "name": "Hatches\\Http\\Controllers\\FisheriesController", "doc": "&quot;Class FisheriesController&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method___construct", "name": "Hatches\\Http\\Controllers\\FisheriesController::__construct", "doc": "&quot;A New instance of this controller\nuses &#039;auth&#039; middleware&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_index", "name": "Hatches\\Http\\Controllers\\FisheriesController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_create", "name": "Hatches\\Http\\Controllers\\FisheriesController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_store", "name": "Hatches\\Http\\Controllers\\FisheriesController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_show", "name": "Hatches\\Http\\Controllers\\FisheriesController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_edit", "name": "Hatches\\Http\\Controllers\\FisheriesController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_update", "name": "Hatches\\Http\\Controllers\\FisheriesController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FisheriesController", "fromLink": "Hatches/Http/Controllers/FisheriesController.html", "link": "Hatches/Http/Controllers/FisheriesController.html#method_destroy", "name": "Hatches\\Http\\Controllers\\FisheriesController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/FlyboxesController.html", "name": "Hatches\\Http\\Controllers\\FlyboxesController", "doc": "&quot;Class FlyboxesController&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method___construct", "name": "Hatches\\Http\\Controllers\\FlyboxesController::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_index", "name": "Hatches\\Http\\Controllers\\FlyboxesController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_create", "name": "Hatches\\Http\\Controllers\\FlyboxesController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_store", "name": "Hatches\\Http\\Controllers\\FlyboxesController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_show", "name": "Hatches\\Http\\Controllers\\FlyboxesController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_edit", "name": "Hatches\\Http\\Controllers\\FlyboxesController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_update", "name": "Hatches\\Http\\Controllers\\FlyboxesController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\FlyboxesController", "fromLink": "Hatches/Http/Controllers/FlyboxesController.html", "link": "Hatches/Http/Controllers/FlyboxesController.html#method_destroy", "name": "Hatches\\Http\\Controllers\\FlyboxesController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/HatchReportPageController.html", "name": "Hatches\\Http\\Controllers\\HatchReportPageController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\HatchReportPageController", "fromLink": "Hatches/Http/Controllers/HatchReportPageController.html", "link": "Hatches/Http/Controllers/HatchReportPageController.html#method_index", "name": "Hatches\\Http\\Controllers\\HatchReportPageController::index", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\HatchReportPageController", "fromLink": "Hatches/Http/Controllers/HatchReportPageController.html", "link": "Hatches/Http/Controllers/HatchReportPageController.html#method_show", "name": "Hatches\\Http\\Controllers\\HatchReportPageController::show", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\HatchReportPageController", "fromLink": "Hatches/Http/Controllers/HatchReportPageController.html", "link": "Hatches/Http/Controllers/HatchReportPageController.html#method_create", "name": "Hatches\\Http\\Controllers\\HatchReportPageController::create", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/HomePageController.html", "name": "Hatches\\Http\\Controllers\\HomePageController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\HomePageController", "fromLink": "Hatches/Http/Controllers/HomePageController.html", "link": "Hatches/Http/Controllers/HomePageController.html#method_index", "name": "Hatches\\Http\\Controllers\\HomePageController::index", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/PagesController.html", "name": "Hatches\\Http\\Controllers\\PagesController", "doc": "&quot;Class PagesController&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\PagesController", "fromLink": "Hatches/Http/Controllers/PagesController.html", "link": "Hatches/Http/Controllers/PagesController.html#method___construct", "name": "Hatches\\Http\\Controllers\\PagesController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/ProfilePageController.html", "name": "Hatches\\Http\\Controllers\\ProfilePageController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\ProfilePageController", "fromLink": "Hatches/Http/Controllers/ProfilePageController.html", "link": "Hatches/Http/Controllers/ProfilePageController.html#method_show", "name": "Hatches\\Http\\Controllers\\ProfilePageController::show", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\ProfilePageController", "fromLink": "Hatches/Http/Controllers/ProfilePageController.html", "link": "Hatches/Http/Controllers/ProfilePageController.html#method_create", "name": "Hatches\\Http\\Controllers\\ProfilePageController::create", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/TripReportPageController.html", "name": "Hatches\\Http\\Controllers\\TripReportPageController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportPageController", "fromLink": "Hatches/Http/Controllers/TripReportPageController.html", "link": "Hatches/Http/Controllers/TripReportPageController.html#method_index", "name": "Hatches\\Http\\Controllers\\TripReportPageController::index", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportPageController", "fromLink": "Hatches/Http/Controllers/TripReportPageController.html", "link": "Hatches/Http/Controllers/TripReportPageController.html#method_show", "name": "Hatches\\Http\\Controllers\\TripReportPageController::show", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportPageController", "fromLink": "Hatches/Http/Controllers/TripReportPageController.html", "link": "Hatches/Http/Controllers/TripReportPageController.html#method_create", "name": "Hatches\\Http\\Controllers\\TripReportPageController::create", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/TripReportsController.html", "name": "Hatches\\Http\\Controllers\\TripReportsController", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method___construct", "name": "Hatches\\Http\\Controllers\\TripReportsController::__construct", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_index", "name": "Hatches\\Http\\Controllers\\TripReportsController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_create", "name": "Hatches\\Http\\Controllers\\TripReportsController::create", "doc": "&quot;Show the form for creating a new resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_store", "name": "Hatches\\Http\\Controllers\\TripReportsController::store", "doc": "&quot;Store a newly created resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_show", "name": "Hatches\\Http\\Controllers\\TripReportsController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_edit", "name": "Hatches\\Http\\Controllers\\TripReportsController::edit", "doc": "&quot;Show the form for editing the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_update", "name": "Hatches\\Http\\Controllers\\TripReportsController::update", "doc": "&quot;Update the specified resource in storage.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\TripReportsController", "fromLink": "Hatches/Http/Controllers/TripReportsController.html", "link": "Hatches/Http/Controllers/TripReportsController.html#method_destroy", "name": "Hatches\\Http\\Controllers\\TripReportsController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Controllers", "fromLink": "Hatches/Http/Controllers.html", "link": "Hatches/Http/Controllers/UsersController.html", "name": "Hatches\\Http\\Controllers\\UsersController", "doc": "&quot;Class UsersController&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\UsersController", "fromLink": "Hatches/Http/Controllers/UsersController.html", "link": "Hatches/Http/Controllers/UsersController.html#method___construct", "name": "Hatches\\Http\\Controllers\\UsersController::__construct", "doc": "&quot;Create a new controller instance.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\UsersController", "fromLink": "Hatches/Http/Controllers/UsersController.html", "link": "Hatches/Http/Controllers/UsersController.html#method_index", "name": "Hatches\\Http\\Controllers\\UsersController::index", "doc": "&quot;Display a listing of the resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\UsersController", "fromLink": "Hatches/Http/Controllers/UsersController.html", "link": "Hatches/Http/Controllers/UsersController.html#method_show", "name": "Hatches\\Http\\Controllers\\UsersController::show", "doc": "&quot;Display the specified resource.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Controllers\\UsersController", "fromLink": "Hatches/Http/Controllers/UsersController.html", "link": "Hatches/Http/Controllers/UsersController.html#method_destroy", "name": "Hatches\\Http\\Controllers\\UsersController::destroy", "doc": "&quot;Remove the specified resource from storage.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http", "fromLink": "Hatches/Http.html", "link": "Hatches/Http/Kernel.html", "name": "Hatches\\Http\\Kernel", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "Hatches\\Http\\Middleware", "fromLink": "Hatches/Http/Middleware.html", "link": "Hatches/Http/Middleware/Authenticate.html", "name": "Hatches\\Http\\Middleware\\Authenticate", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Middleware\\Authenticate", "fromLink": "Hatches/Http/Middleware/Authenticate.html", "link": "Hatches/Http/Middleware/Authenticate.html#method___construct", "name": "Hatches\\Http\\Middleware\\Authenticate::__construct", "doc": "&quot;Create a new filter instance.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Middleware\\Authenticate", "fromLink": "Hatches/Http/Middleware/Authenticate.html", "link": "Hatches/Http/Middleware/Authenticate.html#method_handle", "name": "Hatches\\Http\\Middleware\\Authenticate::handle", "doc": "&quot;Handle an incoming request.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Middleware", "fromLink": "Hatches/Http/Middleware.html", "link": "Hatches/Http/Middleware/RedirectIfAuthenticated.html", "name": "Hatches\\Http\\Middleware\\RedirectIfAuthenticated", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Http\\Middleware\\RedirectIfAuthenticated", "fromLink": "Hatches/Http/Middleware/RedirectIfAuthenticated.html", "link": "Hatches/Http/Middleware/RedirectIfAuthenticated.html#method___construct", "name": "Hatches\\Http\\Middleware\\RedirectIfAuthenticated::__construct", "doc": "&quot;Create a new filter instance.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Http\\Middleware\\RedirectIfAuthenticated", "fromLink": "Hatches/Http/Middleware/RedirectIfAuthenticated.html", "link": "Hatches/Http/Middleware/RedirectIfAuthenticated.html#method_handle", "name": "Hatches\\Http\\Middleware\\RedirectIfAuthenticated::handle", "doc": "&quot;Handle an incoming request.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Http\\Requests", "fromLink": "Hatches/Http/Requests.html", "link": "Hatches/Http/Requests/Request.html", "name": "Hatches\\Http\\Requests\\Request", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "Hatches\\Jobs", "fromLink": "Hatches/Jobs.html", "link": "Hatches/Jobs/Command.html", "name": "Hatches\\Jobs\\Command", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "Hatches\\Jobs", "fromLink": "Hatches/Jobs.html", "link": "Hatches/Jobs/InspireFlyFishers.html", "name": "Hatches\\Jobs\\InspireFlyFishers", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Jobs\\InspireFlyFishers", "fromLink": "Hatches/Jobs/InspireFlyFishers.html", "link": "Hatches/Jobs/InspireFlyFishers.html#method_quote", "name": "Hatches\\Jobs\\InspireFlyFishers::quote", "doc": "&quot;Get an inspiring quote.&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Map.html", "name": "Hatches\\Map", "doc": "&quot;Map&quot;"},
                    
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Prey.html", "name": "Hatches\\Prey", "doc": "&quot;Prey&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Prey", "fromLink": "Hatches/Prey.html", "link": "Hatches/Prey.html#method_hatchType", "name": "Hatches\\Prey::hatchType", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Privacy.html", "name": "Hatches\\Privacy", "doc": "&quot;Privacy&quot;"},
                    
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Profile.html", "name": "Hatches\\Profile", "doc": "&quot;Hatches\\Profile&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Profile", "fromLink": "Hatches/Profile.html", "link": "Hatches/Profile.html#method_users", "name": "Hatches\\Profile::users", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/AppServiceProvider.html", "name": "Hatches\\Providers\\AppServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Providers\\AppServiceProvider", "fromLink": "Hatches/Providers/AppServiceProvider.html", "link": "Hatches/Providers/AppServiceProvider.html#method_boot", "name": "Hatches\\Providers\\AppServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Providers\\AppServiceProvider", "fromLink": "Hatches/Providers/AppServiceProvider.html", "link": "Hatches/Providers/AppServiceProvider.html#method_register", "name": "Hatches\\Providers\\AppServiceProvider::register", "doc": "&quot;Register any application services.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/BusServiceProvider.html", "name": "Hatches\\Providers\\BusServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Providers\\BusServiceProvider", "fromLink": "Hatches/Providers/BusServiceProvider.html", "link": "Hatches/Providers/BusServiceProvider.html#method_boot", "name": "Hatches\\Providers\\BusServiceProvider::boot", "doc": "&quot;Bootstrap any application services.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Providers\\BusServiceProvider", "fromLink": "Hatches/Providers/BusServiceProvider.html", "link": "Hatches/Providers/BusServiceProvider.html#method_register", "name": "Hatches\\Providers\\BusServiceProvider::register", "doc": "&quot;Register any application services.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/ConfigServiceProvider.html", "name": "Hatches\\Providers\\ConfigServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Providers\\ConfigServiceProvider", "fromLink": "Hatches/Providers/ConfigServiceProvider.html", "link": "Hatches/Providers/ConfigServiceProvider.html#method_register", "name": "Hatches\\Providers\\ConfigServiceProvider::register", "doc": "&quot;Overwrite any vendor \/ package configuration.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/EventServiceProvider.html", "name": "Hatches\\Providers\\EventServiceProvider", "doc": "&quot;\n&quot;"},
                    
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/JsonApiServiceProvider.html", "name": "Hatches\\Providers\\JsonApiServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Providers\\JsonApiServiceProvider", "fromLink": "Hatches/Providers/JsonApiServiceProvider.html", "link": "Hatches/Providers/JsonApiServiceProvider.html#method_register", "name": "Hatches\\Providers\\JsonApiServiceProvider::register", "doc": "&quot;Register the service provider.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Providers\\JsonApiServiceProvider", "fromLink": "Hatches/Providers/JsonApiServiceProvider.html", "link": "Hatches/Providers/JsonApiServiceProvider.html#method_provides", "name": "Hatches\\Providers\\JsonApiServiceProvider::provides", "doc": "&quot;Get the services provided by the provider.&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Providers", "fromLink": "Hatches/Providers.html", "link": "Hatches/Providers/RouteServiceProvider.html", "name": "Hatches\\Providers\\RouteServiceProvider", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Providers\\RouteServiceProvider", "fromLink": "Hatches/Providers/RouteServiceProvider.html", "link": "Hatches/Providers/RouteServiceProvider.html#method_boot", "name": "Hatches\\Providers\\RouteServiceProvider::boot", "doc": "&quot;Define your route model bindings, pattern filters, etc.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Providers\\RouteServiceProvider", "fromLink": "Hatches/Providers/RouteServiceProvider.html", "link": "Hatches/Providers/RouteServiceProvider.html#method_map", "name": "Hatches\\Providers\\RouteServiceProvider::map", "doc": "&quot;Define the routes for the application.&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Report.html", "name": "Hatches\\Report", "doc": "&quot;Hatches\\Report&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_user", "name": "Hatches\\Report::user", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_assets", "name": "Hatches\\Report::assets", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_tags", "name": "Hatches\\Report::tags", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_fishery", "name": "Hatches\\Report::fishery", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_comments", "name": "Hatches\\Report::comments", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_waterData", "name": "Hatches\\Report::waterData", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_weather", "name": "Hatches\\Report::weather", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_privacy", "name": "Hatches\\Report::privacy", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Report", "fromLink": "Hatches/Report.html", "link": "Hatches/Report.html#method_createReport", "name": "Hatches\\Report::createReport", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Role.html", "name": "Hatches\\Role", "doc": "&quot;Role&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Role", "fromLink": "Hatches/Role.html", "link": "Hatches/Role.html#method_user", "name": "Hatches\\Role::user", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Services", "fromLink": "Hatches/Services.html", "link": "Hatches/Services/Registrar.html", "name": "Hatches\\Services\\Registrar", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Services\\Registrar", "fromLink": "Hatches/Services/Registrar.html", "link": "Hatches/Services/Registrar.html#method_validator", "name": "Hatches\\Services\\Registrar::validator", "doc": "&quot;Get a validator for an incoming registration request.&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Services\\Registrar", "fromLink": "Hatches/Services/Registrar.html", "link": "Hatches/Services/Registrar.html#method_create", "name": "Hatches\\Services\\Registrar::create", "doc": "&quot;Create a new user instance after a valid registration.&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Tag.html", "name": "Hatches\\Tag", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_assets", "name": "Hatches\\Tag::assets", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_flyboxes", "name": "Hatches\\Tag::flyboxes", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_flyPatterns", "name": "Hatches\\Tag::flyPatterns", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_fisheries", "name": "Hatches\\Tag::fisheries", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_hatches", "name": "Hatches\\Tag::hatches", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_hatchReport", "name": "Hatches\\Tag::hatchReport", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Tag", "fromLink": "Hatches/Tag.html", "link": "Hatches/Tag.html#method_TripReport", "name": "Hatches\\Tag::TripReport", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/FishSpeciesTransformer.html", "name": "Hatches\\Transformers\\FishSpeciesTransformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\FishSpeciesTransformer", "fromLink": "Hatches/Transformers/FishSpeciesTransformer.html", "link": "Hatches/Transformers/FishSpeciesTransformer.html#method_transform", "name": "Hatches\\Transformers\\FishSpeciesTransformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/FisheryTransformer.html", "name": "Hatches\\Transformers\\FisheryTransformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\FisheryTransformer", "fromLink": "Hatches/Transformers/FisheryTransformer.html", "link": "Hatches/Transformers/FisheryTransformer.html#method_transform", "name": "Hatches\\Transformers\\FisheryTransformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/FlyboxTransformer.html", "name": "Hatches\\Transformers\\FlyboxTransformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\FlyboxTransformer", "fromLink": "Hatches/Transformers/FlyboxTransformer.html", "link": "Hatches/Transformers/FlyboxTransformer.html#method_transform", "name": "Hatches\\Transformers\\FlyboxTransformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/Transformer.html", "name": "Hatches\\Transformers\\Transformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\Transformer", "fromLink": "Hatches/Transformers/Transformer.html", "link": "Hatches/Transformers/Transformer.html#method_transformCollection", "name": "Hatches\\Transformers\\Transformer::transformCollection", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\Transformers\\Transformer", "fromLink": "Hatches/Transformers/Transformer.html", "link": "Hatches/Transformers/Transformer.html#method_transform", "name": "Hatches\\Transformers\\Transformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/TripReportTransformer.html", "name": "Hatches\\Transformers\\TripReportTransformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\TripReportTransformer", "fromLink": "Hatches/Transformers/TripReportTransformer.html", "link": "Hatches/Transformers/TripReportTransformer.html#method_transform", "name": "Hatches\\Transformers\\TripReportTransformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Transformers", "fromLink": "Hatches/Transformers.html", "link": "Hatches/Transformers/UserTransformer.html", "name": "Hatches\\Transformers\\UserTransformer", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Transformers\\UserTransformer", "fromLink": "Hatches/Transformers/UserTransformer.html", "link": "Hatches/Transformers/UserTransformer.html#method_transform", "name": "Hatches\\Transformers\\UserTransformer::transform", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/TripReport.html", "name": "Hatches\\TripReport", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\TripReport", "fromLink": "Hatches/TripReport.html", "link": "Hatches/TripReport.html#method_createReport", "name": "Hatches\\TripReport::createReport", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/User.html", "name": "Hatches\\User", "doc": "&quot;Hatches\\User&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_accountIsActive", "name": "Hatches\\User::accountIsActive", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_assets", "name": "Hatches\\User::assets", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_tripReports", "name": "Hatches\\User::tripReports", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_hatchReports", "name": "Hatches\\User::hatchReports", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_flyPatterns", "name": "Hatches\\User::flyPatterns", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_flyboxes", "name": "Hatches\\User::flyboxes", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_fisheries", "name": "Hatches\\User::fisheries", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_comments", "name": "Hatches\\User::comments", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_roles", "name": "Hatches\\User::roles", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_buddies", "name": "Hatches\\User::buddies", "doc": "&quot;\n&quot;"},
                    {"type": "Method", "fromName": "Hatches\\User", "fromLink": "Hatches/User.html", "link": "Hatches/User.html#method_profiles", "name": "Hatches\\User::profiles", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches\\Validators", "fromLink": "Hatches/Validators.html", "link": "Hatches/Validators/FileUploadFormat.html", "name": "Hatches\\Validators\\FileUploadFormat", "doc": "&quot;\n&quot;"},
                                                        {"type": "Method", "fromName": "Hatches\\Validators\\FileUploadFormat", "fromLink": "Hatches/Validators/FileUploadFormat.html", "link": "Hatches/Validators/FileUploadFormat.html#method_is_image", "name": "Hatches\\Validators\\FileUploadFormat::is_image", "doc": "&quot;\n&quot;"},
            
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/WaterData.html", "name": "Hatches\\WaterData", "doc": "&quot;WaterData&quot;"},
                    
            {"type": "Class", "fromName": "Hatches", "fromLink": "Hatches.html", "link": "Hatches/Weather.html", "name": "Hatches\\Weather", "doc": "&quot;Weather&quot;"},
                    
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


