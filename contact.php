<!DOCTYPE html>
<html>

<head>
    <title>My Coffee</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">


    <style data-tag="reset-style-sheet">
        html {
            line-height: 1.15;
        }

        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
        }

        p,
        li,
        ul,
        pre,
        div,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        figure,
        blockquote,
        figcaption {
            margin: 0;
            padding: 0;
        }

        button {
            background-color: transparent;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        input {
            padding: 2px 4px;
        }

        img {
            display: block;
        }

        html {
            scroll-behavior: smooth
        }



        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            border: 2px solid #555555;
            color: black;
            padding: 12px 20px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #555555;
            color: white;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-size: 16px;
        }

        body {
            font-weight: 400;
            font-style: normal;
            text-decoration: none;
            text-transform: none;
            letter-spacing: normal;
            line-height: 1.15;
            color: var(--dl-color-gray-black);
            background-color: var(--dl-color-gray-white);

        }
    </style>
    <!-- <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    data-tag="font" /> -->
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div>
        <link href="./home.css" rel="stylesheet" />

        <div class="home-container">
            <header data-role="Header" class="home-header">
                <div class="home-container1">
                    <a href="index.php" class="home-navlink">
                        <img alt="image" src="images/200-200h.png" class="home-image" />
                    </a>
                </div>
                <div class="home-nav">
                    <a class="home-navlink">
                        <nav class="navigation-links-nav navigation-links-root-class-name17">
                            <a href="index.php" class="navigation-links-text"><span>Home</span></a>
                            <a href="menu.html" class="navigation-links-text"><span>Menu</span></a>
                            <a href="about.php" class="navigation-links-text">
                                <span>About Us</span>
                            </a>
                            <a href="contact.php" class="navigation-links-text"><span>Contact</span></a>
                            <a href="login.php" class="navigation-links-text"><span>Log In</span></a>
                        </nav>
                    </a>
                </div>

            </header>



            <div class="forimage py-4">
                <h3>Contact Form</h3>
                <br>
                <div class="container">
                    <form name="contact" onsubmit="return fval2()" method="post" action="final2.php">
                        <label for="fname" style="margin: 1%;">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">

                        <label for="lname" style="margin: 1%;">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                        <label for="mobile" style="margin: 1%;">Mobile no.</label>
                        <input type="text" id="mobile" name="mobile" placeholder="+91 00000 00000">

                        <label for="email" style="margin: 1%;">Email Id</label>
                        <input type="text" id="email" name="email" placeholder="abc@xyz.com">

                        <label for="comment" style="margin: 1%;">Comment</label>
                        <textarea id="comment" name="comment" placeholder="Write something.."
                            style="height:50px"></textarea>

                        <input type="submit" style="margin-top:1%; margin-bottom: 1%;" class="btn" value="Submit">
                    </form>


                    <!--JAVA SCRIPT PORTION START-->

                    <script>
                        function fval2() {
                            var fld0 = document.contact.firstname.value;
                            var fld1 = document.contact.lastname.value;
                            var fld2 = document.contact.mobile.value;
                            var fld3 = document.contact.email.value;
                            var atposition = fld3.indexOf("@");
                            var dotposition = fld3.lastIndexOf(".");

                            var toly = /^[a-zA-Z]+$/;
                            var noly = /^[0-9]{10}$/;


                            if (fld0 == "" || fld0 == null) {
                                alert("First Name must be filled out");
                                return false;
                            }
                            else if (fld1 == "" || fld1 == null) {
                                alert("Last Name must be filled out");
                                return false;
                            }
                            else if (fld2 == "" || fld2 == null) {
                                alert("Mobile No. must be filled out");
                                return false;
                            }
                            else if (fld3 == "" || fld3 == null) {
                                alert("Email-Id must be filled out");
                                return false;
                            }
                            else if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= fld3.length) {
                                alert("Please enter a valid e-mail address");
                                return false;
                            }
                            else if (!fld0.match(toly)) {
                                alert("enter correct First Name");
                                return true;
                            }
                            else if (!fld1.match(toly)) {
                                alert("enter correct Last Name");
                                return true;
                            }
                            else if (!fld2.match(noly)) {
                                alert("enter correct number");
                                return false;
                            }
                            else {
                                alert("data entered sucessfully");
                                return true;
                            }
                        }
                    </script>

                    <!--JAVA SCRIPT PORTION END-->


                </div>
                <br><br>

            </div>


            <footer class="home-footer" style="background-color: #98989c;">
                <div class="home-container5">
                    <div class="home-logo">
                        <h2 class="home-text44">LET'S MEET FOR A CUP OF COFFEE</h2>
                        <span class="home-text51">
                            Bhavnagar, Gujrat
                        </span>
                    </div>
                    <div class="home-links-container">
                        <div class="home-container6">
                            <div class="home-product-container">
                                <span class="home-text51">
                                    <span>OPENING TIME</span>
                                    <br />
                                    <br />
                                    <span>Mo - Fri: 8am - 8pm</span>
                                    <br />
                                    <span>Sat: 9am - 6pm</span>
                                    <br />
                                    <span>Sun: 9am - 4pm</span>
                                    <br />
                                </span>
                            </div>
                        </div>
                        <div class="home-container7">
                            <span class="home-text51">
                                Let's be friends on a cup of coffee

                            </span>
                            <div class="feature-card-container">
                                <div class="home-icon-group1">
                                    <svg viewBox="0 0 950.8571428571428 1024" class="home-icon10">
                                        <path
                                            d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z">
                                        </path>
                                    </svg><svg viewBox="0 0 877.7142857142857 1024" class="home-icon10">
                                        <path
                                            d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z">
                                        </path>
                                    </svg><svg viewBox="0 0 602.2582857142856 1024" class="home-icon10">
                                        <path
                                            d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home-separator"></div>
            </footer>
        </div>
    </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>