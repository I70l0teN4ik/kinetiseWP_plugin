<div id="kinetise-plugin-container">
    <h1>
        <a href="https://www.kinetise.com" target="_blank"><span></span></a>
        <span>Tutorial</span>
    </h1>

    <h2 id="kinetise-tutorial-header" class="tutorial-header" data-container="basic-app-tutorial">
        <span data-container="basic-app-tutorial">Get started with Wordpress Template App by Kinetise</span>
        <span data-container="first-tutorial">Authorization / Registration / User Roles</span>
        <span data-container="second-tutorial">Add / Edit / Delete Post</span>
    </h2>

    <div class="tab" id="basic-app-tutorial">
        <ol>
            <li>Go to <a href="https://www.kinetise.com">www.kinetise.com</a> Log In and Create App using WordPress template.</li>
            <li>Follow the instruction in popup and enter your host address <code><?php echo \site_url();?></code> into suggested field.</li>
        </ol>
        <p>Now You've got an basic app with latest posts on main screen and posts divided by categories on menu under hamburger button.</p>
        <img src="<?php echo \plugins_url('images/tutorial/tutorial_01.jpg', KINETISE_ROOT . DS . 'kinetise.php') ?>">
        <p>To start customization of your app just switch to EDITOR mode, by clicking the pencil icon on the left side of toolbar at the bottom of the screen.</p>
        <p><strong>Let's extend app by providing users a possibility to comment your blog posts:</strong></p>

        <h2>Add Comments List to detail screen</h2>
        <ol>
            <li>Go to detail screen;</li>
            <li>Drag and drop <strong>List widget</strong>;</li>
            <li>Select <span class="code">`comments_url`</span> as a dynamic source for this List;</li>
            <li>For this case let's switch off some default <strong>List widget</strong> settings. Click <strong>Extra Options</strong> and unselect:
                <ul>
                    <li>Use Error Template (if comments are disabled on some specific posts or some error occurred list won't be shown at all);</li>
                    <li>Use No Data Template (if there are no comments added list won't be shown at all);</li>
                    <li>Display loading icon.</li>
                </ul>
            </li>
            <li>
                <strong>Customize comments List Item:</strong>
                <ol>
                    <li>Remove <strong>Image widget</strong> (just hover a mouse on it and click delete icon);</li>
                    <li>Another way to manage existing elements is by selecting widgets from a tree on the left side below the screens list.
                        Let's get rid of default vertical container as well. When you choose something in that tree you'll see that selected widget is selected in editor as well.</li>
                    <li>Add new <strong>Text widget</strong>. Select <span class="code">`description`</span> as a dynamic data source for this widget and set up font size, text colour or any other decoration details on your taste...</li>
                    <li>Let's add some basic info about each comment:
                        <ul>
                            <li>Change <strong>List Item</strong> layout to Vertical.</li>
                            <li>Add a <strong>Horizontal Container widget</strong> to List Item. Set container height to 10 and width to max, remove background colour selection.</li>
                            <li>Add <strong>Text</strong> and <strong>Date</strong> widgets into this horizontal container.</li>
                            <li>Select <span class="code">`comment_author`</span> and <span class="code">`comment_date`</span> as a dynamic data source for added widgets. There are several predefined formats for date, select one that suits you most.</li>
                        </ul>
                    </li>
                    </li>
                </ol>
            </li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189002690?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br>
        <br>
        <strong>Ok we've got a list of comments but how could user add a new comment?</strong>
        <br>
        <br>

        <h2>Add a Form to post new comment</h2>

        <p>For better user experience let's move navigation buttons under the post picture. And place Form for adding a comments into detail screen footer.</p>
        <ol>
            <li>Add new <strong>Horizontal Container widget</strong> below the image;</li>
            <li>Set its width to max, height to 13 and background colour to white;</li>
            <li>Now using the long press drag and drop all the elements from footer to new container. Let's place Share Button there as well.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189002689?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <p>Add a <strong>Form widget</strong> for new comments into footer:</p>

        <ol>
            <li>Add new <strong>Form widget</strong> to footer:</li>
            <li>In opened cloud:
                <ul>
                    <li>Select <strong>To URL</strong> in first dropdown;</li>
                    <li>Select <span class="code">`comments_add_url`</span> from dynamic list;</li>
                    <li>Click <strong>Request Settings</strong> button and add <span class="code">`SessionId`</span> as a dynamic param;</li>
                    <li>Select Horizontal Layout;</li>
                    <li>Set widget width to max.</li>
                </ul>
            </li>
            <li>Customize <strong>Text Input widget</strong>:
                <ul>
                    <li>Set width and height to max;</li>
                    <li>Get rid of borders.</li>
                    <li>Go to settings tab;</li>
                    <li>Set <strong>Form ID</strong> to <span class="code">`body`</span>;</li>
                    <li>Set empty <strong>Init Value</strong> (just select <strong>Static</strong> radio button);</li>
                    <li>Specify a watermark.</li>
                </ul>
            </li>
            <li>Customize <strong>Form Button widget</strong>:
                <ul>
                    <li>Select an image from our library or upload your own;</li>
                    <li>Set width and height to 13;</li>
                    <li>Add some padding;</li>
                    <li>Go to Events tab and select <span class="code">`REFRESH`</span> action On Success.</li>
                </ul>
            </li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189002692?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <p>Now everything depends on yours WordPress discussion settings.

            If there are no requirements for comments author and moderation you can click send button and new comment will appear right away!

            Notice that usually anonymous comments supposed to be approved in comments section before they will actually appear on site.

            Otherwise you will get a proper error message.
        </p>
        <p>Go to Reference section in order to find out more about comments integration.</p>

        <iframe src="https://player.vimeo.com/video/189002694?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="tab" id="first-tutorial">
        <h2>Authorization</h2>
        <ol>
            <li>Go to <strong>Splash screen</strong>;</li>
            <li>Add <strong>Login widget</strong>;</li>
            <li>Select <strong>To WordPress</strong> in dropdown;</li>
            <li>Go to <a class="wp-first-item current" href="admin.php?page=kinetise-api-reference">Kinetise plugin Reference section</a> on your WordPress admin panel and copy paste your authorization link;</li>
            <li>Make sure that Password Input widget Setting <span class="code">`Password Hash`</span> is set to <span class="code">`None`</span>. That is how WordPress handles authorization.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189010546?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br>
        <h2>Add a logout button:</h2>
        <ol>
            <li>Add <strong>Logout widget</strong> to Main screen header;</li>
            <li>Go to <strong>EVENTS</strong> tab;</li>
            <li>Go to <a class="wp-first-item current" href="admin.php?page=kinetise-api-reference">Reference section</a> and copy paste your <i>logout action</i> link;</li>
            <li>Clone <strong>Logout widget</strong>;</li>
            <li>Go to <strong>Posts in Category</strong> screen and add logout button here as well.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189010548?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br>
        <h2>Registration:</h2>

        <p>Create a <span class="code">Sign Up</span> button:</p>
        <ol>
            <li>Go to <strong>Splash screen</strong>;</li>
            <li>Add new <strong>Text widget</strong> to the bottom of the screen;</li>
            <li>Make it look like a button: just set some height, width and background colour;</li>
            <li>Go to <strong>EVENTS</strong> tab and select <span class="code">`New Screen`</span> option;</li>
            <li>Name your new screen and unselect all the checkboxes.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189010550?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <p>Modify your registration screen:</p>
        <ol>
            <li>Remove footer;</li>
            <li>Configure header: add <span class="code">BACK</span> button and title;</li>
            <li>Add new Vertical container:Set its height to max and remove background;</li>
            <li>Add new <strong>Form widget</strong>;</li>
            <li>Select <strong>`To RESTful API`</strong> in dropdonw;</li>
            <li>Go to <a class="wp-first-item current" href="admin.php?page=kinetise-api-reference">Reference section</a> and and copy paste your registration link;</li>
            <li><strong>Add 2 more text inputs and configure them according to Reference:</strong>
                <ul>
                    <li>First: Form ID = <span class="code">email</span>; Keyboard type: <span class="code">@</span>; Watermark = <span class="code">Email</span>;</li>
                    <li>Second Form ID = <span class="code">username</span>; Keyboard type: <span class="code">txt</span>; Watermark = <span class="code">Username</span>;</li>
                    <li>Third: Form ID = <span class="code">password</span>; Keyboard type: <span class="code">***</span>; Watermark = <span class="code">Password</span>.</li>
                </ul>
            </li>
            <li><strong>Customize Form Button:</strong>
                <ul>
                    <li>Change text to: Sign Up;</li>
                    <li>Add margin;</li>
                    <li>Go to <strong>EVENTS</strong> tab and select <span class="code">`Splash screen`</span>.</li>
                </ul>
            </li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189010553?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <h2>User Role:</h2>
        <p>You can specify on which screen will be redirected user after login depending on user's role.</p>
        <p>Lets create an extended Main screen for users that have more rights on your web page.</p>
        <p class="description">For example users with role administrator or editor are capable to manage all posts and comments.</p>
        <ol>
            <li>Clone Main screen and name it `Editor Main Screen`;</li>
            <li>Add `New Post` button witch gonna lead to a new screen: `Create Post`;</li>
            <li>Go to Splash screen select Login Form Button and go to EVENTS tab;</li>
            <li>Specify `Editor Main Screen` as post login screen for roles: administrator and editor.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189010551?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <p>Now if you will login with proper user credentials you'll get on a right screen.</p>

        <iframe src="https://player.vimeo.com/video/189010552?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

    </div>

    <div class="tab" id="second-tutorial">
        <p class="attention">All those actions require user to be logged in and to obtain proper permissions.</p>

        <h2><strong>Add new Post:</strong></h2>
        <p>According to <a href="/admin.php?page=kinetise-api-reference" class="wp-first-item current">Reference</a> you gonna need a <strong>Form widget</strong> with:</p>
        <ul>
            <li>2 text inputs with <strong>Form ID</strong>: <span class="code">`title`</span> and <span class="code">`content`</span>;</li>
            <li>dropdown with <strong>Form ID</strong>: <span class="code">`cat_ID`</span>;</li>
            <li>image with <strong>Form ID</strong>: <span class="code">`conent_image`</span>.</li>
        </ul>
        <br>
        <p>It's a little bit tricky to create dynamic dropdown in Kinetise. And there is a special endpoint set in plugin for that purpose.</p>
        <p>To manage this goal you'll have to create a <strong>List widget</strong> with one item and add a <strong>Form widget</strong> into it:</p>
        <ol>
            <li>Add <strong>List widget</strong>;</li>
            <li>Select <strong>From WordPress</strong> in dropdown;</li>
            <li>Go to Reference and copy paste your `List of categories for dropdown` link;</li>
            <li>Set <strong>`Count`</strong> to 1;</li>
            <li>Unselect <strong>`Show more`</strong> checkbox;</li>
            <li>Max out size of List widget;</li>
            <li>Clear <strong>List Item</strong> and max out its size as well.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189013232?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <p>
            <stong>Now we can create form with dynamic dropdonw:</stong>
        </p>
        <ol>
            <li>Add <strong>Form widget</strong>;</li>
            <li>Select <strong>To URL</strong>;</li>
            <li>Select <span class="code">`post_add_url`</span> as a dynamic source;</li>
            <li>Go to <strong>Request Settings</strong>;</li>
            <li>Add Dynamic parameter <strong>`SessionId`</strong> in order to identify logged in user.</li>
            <li>
                <strong>Configure existing input:</strong>
                <ul>
                    <li>set <strong>Form ID</strong> to <span class="code">`title`</span>;</li>
                    <li>select empty initial value;</li>
                    <li>specify watermark.</li>
                </ul>
            </li>
            <li>
                <strong>Add one more <strong>text input</strong> widget and configure it:</strong>
                <ul>
                    <li>set <strong>Form ID</strong> to <span class="code">`content`</span>;</li>
                    <li>select empty initial value;</li>
                    <li>change type to <strong>`Several lines input`</strong>;</li>
                    <li>specify watermark.</li>
                </ul>
            </li>
            <li>
                <strong>Add <strong>take photo</strong> widget and configure it:</strong>
                <ul>
                    <li>set <strong>Form ID</strong> to <span class="code">`content_image`</span>;</li>
                </ul>
            </li>
            <li>
                <strong>Add <strong>dropdown widget</strong> and configure it:</strong>
                <ul>
                    <li>set <strong>Form ID</strong> to <span class="code">`cat_ID`</span>;</li>
                    <li>select empty initial value;</li>
                    <li>select <span class="code">`categoriesList`</span> as a <strong>Dynamic Drop Down Items</strong> source;</li>
                    <li>specify watermark.</li>
                </ul>
            </li>
            <li>
                <strong>Customize Form Button:</strong>
                <ul>
                    <li>Change text to: ADD POST;</li>
                    <li>Add margin;</li>
                    <li>Go to <strong>EVENTS</strong> tab and select <span class="code">`Editor Main screen`</span> as an action on success.</li>
                </ul>
            </li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189013230?color=ffcd29&title=0&byline=0&portrait=0&badge=0&loop=1" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br><br>
        <h2><strong>Delete Post:</strong></h2>
        <p>Every Item in a List of posts includes a Dynamic link to edit and delete post. As well as every Item in Comments list.</p>
        <ol>
            <li>Add new <strong>Form widget</strong> to <strong>List Item</strong></li>
            <li>
                In opened cloud:
                <ul>
                    <li>Select <strong>To URL</strong> in first dropdown;</li>
                    <li>Select <span class="code">`post_delete_url`</span> from dynamic list;</li>
                    <li>Click <strong>Request Settings</strong> button and add <span class="code">`SessionId`</span> as a dynamic param;</li>
                </ul>
            </li>
            <li>Set Form Alignment to Right;</li>
            <li>Set width and height to 15;</li>
            <li>Remove <strong>Text Input</strong>;</li>
            <li>
                Customise <strong>Form Button</strong>:
                <ul>
                    <li>Set width and height to max;</li>
                    <li>Change Image background;</li>
                    <li>Set <strong>Text on Image</strong> to: <span class="code">DELETE</span></li>
                </ul>
            </li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189013234" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br><br>
        <h2><strong>Edit Post:</strong></h2>
        <ol>
            <li>Just add <span class="code">EDIT</span> button next to <span class="code">DELETE</span>;</li>
            <li>Go to <strong>EVENTS</strong> tab and select <span class="code">`New Screen`</span> option;</li>
            <li>Check <strong>Dynamic Source</strong> checkbox;</li>
            <li>Customize header and remove footer on a new screen;</li>
            <li>Go to <strong>Create Post</strong> screen and clone <strong>Form widget</strong> to the <strong>Edit Post</strong> screen;</li>
            <li>Change <strong>Form widget</strong> Dynamic source to <span class="code">`post_edit_url`</span>;</li>
            <li>Make sure that <span class="code">`SessionId`</span> is passed along with http params;</li>
            <li>Remove <strong>Dropdown widget</strong>;</li>
            <li>Set <strong>Dynamic Init values</strong> for inputs;</li>
            <li>Change <strong>Form Button</strong> text to <span class="code">UPDATE</span>.</li>
        </ol>
        <iframe src="https://player.vimeo.com/video/189014669" width="670" height="410"  frameborder="0" allowfullscreen></iframe>

        <br><br>
        <strong>
            To test all that functionality just login as administrator, editor or author and try to add, edit and delete new post.
        </strong>
        <br>
        <iframe src="https://player.vimeo.com/video/189013233" width="670" height="410"  frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script type="text/javascript">
    var addClass = function addClass(el, className) {
        var regex = new RegExp(className);

        if (el.className.match(regex)) {
            return;
        }

        el.className += ' ' + className;
    };

    var removeClass = function removeClass(el, className) {
        var regex = new RegExp('\\s' + className);

        if (!el.className.match(regex)) {
            return;
        }

        el.className = el.className.replace(regex, '');
    };

    var showSection = function (id, elements) {
        for (var j = 0; j < elements.length; j++) {
            elements[j].style.display = elements[j].id == id ? 'block' : 'none';
        }

        var sections = document
            .getElementById('kinetise-tutorial-header')
            .getElementsByTagName('span');

        for (var j = 0; j < sections.length; j++) {
            addClass(sections[j], 'not-active');
        }
    };

    window.addEventListener('load', function () {
        var i, j, header, sections, containers = document.getElementsByClassName('tab');

        for (i = 0; i < containers.length; i++) {
            if (i != 0) {
                containers[i].style.display = 'none';
            }
        }

        header = document.getElementById('kinetise-tutorial-header');
        sections = header.getElementsByTagName('span');

        for (j = 0; j < sections.length; j++) {
            if (j != 0) {
                addClass(sections[j], 'not-active');
            }

            sections[j].addEventListener('click', function () {
                var current = this;
                if (current.className.indexOf('not-active') == -1) {
                    return;
                }

                showSection(current.getAttribute('data-container'), containers);
                removeClass(current, 'not-active');
            });
        }
    });
</script>