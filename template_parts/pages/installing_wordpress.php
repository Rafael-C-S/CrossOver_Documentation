<p>
    The theme you acquired is based on Wordpress. So you need to do your installation first.
</p>
<p>
    The Wordpress installation process requires you to complete 4 steps. They will be explained below. 
</p>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Step 1: Download Wordpress</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <p>
                    We recommend using the <a href="https://wordpress.org/download/" target="_blank">official Wordpress page</a> to download the tool in the most current version.
                </p>
            </div><!-- ./card-body -->
            <div class="card-footer">
                
            </div><!-- /.card-footer -->
        </div><!-- /.card -->
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Step 2: Send Wordpress files to server</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <p>
                    After downloading Wordpress you must unzip the content in the downloaded file.
                </p>
                <p>
                    To unzip the files you can use your preferred method or software.
                </p>
            </div><!-- ./card-body -->
            <div class="card-footer">
                
            </div><!-- /.card-footer -->
        </div><!-- /.card -->
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Step 3: Create the database</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <p>Using the hosting control panel to create the database</p>
                <ol>
                    <li>
                        Create a MySQL Database
                        <ul>
                            <li>Log into cPanel and locate Databases.</li>
                            <li>Click MySQL Databases</li>
                            <li>In the New Database field, type a name for the database.</li>
                            <li>Click Create Database.</li>
                            <li>Click Go Back. <i>The new database will appear in the Current Databases table.</i></li>
                        </ul>
                    </li><br>
                    <li>
                        Create a Database User
                        <ul>
                            <li>Log into cPanel and locate Databases.</li>
                            <li>Click MySQL Databases.</li>
                            <li>Click Jump to MySQL Users in the top-left corner of the page.</li>
                            <li>Under Add New User, enter a username.</li><br>
                            <img src="dist/img/_partials/new_user.png" alt="New User">
                        </ul>
                    </li><br>
                    <li>
                        After a new user has been created, we need to assign him to your database:
                        <ul>
                            <li>
                                Select user and database. Click Add button<br><br>
                                <img src="dist/img/_partials/add_user_database.png" alt="Add User Database">
                            </li><br>
                            <li>
                                Select All Privileges.<br><br>
                                <img src="dist/img/_partials/all_privileges.png" alt="Add User Database">    
                            </li>
                        </ul>
                    </li><br>
                    <li>
                        Your new Database is ready to use.
                    </li>
                </ol>
            </div><!-- ./card-body -->
            <div class="card-footer">
                
            </div><!-- /.card-footer -->
        </div><!-- /.card -->
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Step 4: Install Wordpress</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body">
                <p>The next steps can only be taken after the previous ones have been completed</p>
                <ol>
                    <li>Using your preferred browser, inform the domain where your new website will be installed.</li>
                    <li>
                        When accessing the link, the first page will be loaded. It will display some information. Observe them and click on the Let’s go! button.<br><br>
                        <img src="dist/img/_partials/welcome_intall_wordpress.png" alt="First page install">
                    </li><br>
                    <li>
                        The new page to be loaded is where the data from the database, created in the previous step, should be inserted. Fill in the fields below, all are mandatory, and click Submit <br><br>
                        <img src="dist/img/_partials/database_config_install_wordpress.png" alt="Set database"><br><br>
                        After this process you will be redirected to the database connection confirmation page. Then just click on the Run the installation button<br><br>
                        <img src="dist/img/_partials/conection_database_ok.png" alt="Conection database"><br><br>
                    </li><br>
                    <li>
                        In this screen, the site configuration data must be informed. Fill in the fields and at the end click on the Install Wordpress button<br><br>
                        <img src="dist/img/_partials/install_wordpress.png" alt="Install Wordpress"><br><br>
                        If you enter the correct details, you will see a successful installation message and the WordPress dashboard access button.<br><br>
                        <img src="dist/img/_partials/success_intall_wordpress.png" alt="Success Install Wordpress">
                    </li>
                </ol>
            </div><!-- ./card-body -->
            <div class="card-footer">
                
            </div><!-- /.card-footer -->
        </div><!-- /.card -->
    </div><!-- /.col -->
</div><!-- /.row -->