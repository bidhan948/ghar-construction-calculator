<!DOCTYPE html>
<html lang="en">

<head>
    <title>SmartMenus jQuery Website Menu - jQuery Plugin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <!-- SmartMenus core CSS (required) -->
    <link href="{{asset('css/sm-core-css.css')}}" rel="stylesheet" type="text/css" />

    <!-- "sm-blue" menu theme (optional, you can use your own CSS, too) -->
    <link href="{{asset('css/sm-blue/sm-blue.css')}}" rel="stylesheet" type="text/css" />




    <!-- YOU DO NOT NEED THIS - demo page content styles -->
    <link href="{{asset('libs/demo-assets/demo.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
</head>

<body>

    <nav id="main-nav">
        <!-- Sample menu definition -->
        <ul id="main-menu" class="sm sm-blue">
            <li><a href="http://www.smartmenus.org/">Home</a></li>
            <li><a href="http://www.smartmenus.org/about/">About</a>
                <ul>
                    <li><a href="http://www.smartmenus.org/about/introduction-to-smartmenus-jquery/">Introduction to
                            SmartMenus jQuery</a></li>
                    <li><a href="http://www.smartmenus.org/about/themes/">Demos + themes</a></li>
                    <li><a href="http://vadikom.com/about/#vasil-dinkov">The author</a></li>
                    <li><a href="http://www.smartmenus.org/about/vadikom/">The company</a>
                        <ul>
                            <li><a href="http://vadikom.com/about/">About Vadikom</a></li>
                            <li><a href="http://vadikom.com/projects/">Projects</a></li>
                            <li><a href="http://vadikom.com/services/">Services</a></li>
                            <li><a href="http://www.smartmenus.org/about/vadikom/privacy-policy/">Privacy policy</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="http://www.smartmenus.org/download/">Download</a></li>
            <li><a href="http://www.smartmenus.org/support/">Support</a>
                <ul>
                    <li><a href="http://www.smartmenus.org/support/premium-support/">Premium support</a></li>
                    <li><a href="http://www.smartmenus.org/support/forums/">Forums</a></li>
                </ul>
            </li>
            <li><a href="http://www.smartmenus.org/docs/">Docs</a></li>
            <li><a href="#">Sub test</a>
                <ul>
                    <li><a href="#">Dummy item</a></li>
                    <li><a href="#">Dummy item</a></li>
                    <li><a href="#" class="disabled">Disabled menu item</a></li>
                    <li><a href="#">Dummy item</a></li>
                    <li><a href="#">more...</a>
                        <ul>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">more...</a>
                                <ul>
                                    <li><a href="#">Dummy item</a></li>
                                    <li><a href="#" class="current">A 'current' class item</a></li>
                                    <li><a href="#">Dummy item</a></li>
                                    <li><a href="#">more...</a>
                                        <ul>
                                            <li><a href="#">subMenusMinWidth</a></li>
                                            <li><a href="#">10em</a></li>
                                            <li><a href="#">forced.</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dummy item</a></li>
                                    <li><a href="#">Dummy item</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the
                                    sub menus</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                            <li><a href="#">Dummy item</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">Mega menu</a>
                <ul class="mega-menu">
                    <li>
                        <!-- The mega drop down contents -->
                        <div style="width:400px;max-width:100%;">
                            <div style="padding:5px 24px;">
                                <p>This is a mega drop down test. Just set the "mega-menu" class to the parent UL
                                    element to inform the SmartMenus script. It can contain <strong>any HTML</strong>.
                                </p>
                                <p>Just style the contents as you like (you may need to reset some SmartMenus inherited
                                    styles - e.g. for lists, links, etc.)</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- YOU DO NOT NEED THIS - demo page content -->
    <div class="columns">
        <div class="left-column">
            <div id="content">
                @inertia
            </div>
        </div>
        <div class="right-column"></div>
    </div>




    <!-- jQuery -->
    <script type="text/javascript" src="{{asset('libs/jquery/jquery.js')}}"></script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="{{asset('jquery.smartmenus.js')}}"></script>

    <!-- SmartMenus jQuery init -->
    <script type="text/javascript">
        $(function() {
            $('#main-menu').smartmenus({
                subMenusSubOffsetX: 1,
                subMenusSubOffsetY: -8
            });
        });
    </script>

</body>

</html>
