<!DOCTYPE html>
    <html lang = "en">
        <head>
            <meta charset = "UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name = "viewport" content="width=device-width, initial-scale = 1.0">
            <title>Ely & Associates</title>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Courier New', Courier, monospace;
                }

                body {
                    min-height: 100vh;
                    display: flex;
                    flex-direction: column;
                }

                .p {
                    margin: auto;
                    font-size: 25px;
                    padding: 8px;
                    color: #fff;
                    display: flex;
                    text-decoration: none;
                    align-items: center;
                    font-weight: 400; 
                }

                .header {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    padding: 50px 100px;
                    background: seagreen;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    z-index: 100;
                }

                .footer {
                    margin-top: auto;
                    bottom: 0;
                    left: 0;
                    width: 100%;
                    padding: 25px 100px;
                    background: seagreen;
                    display: flex;
                    align-items: center;
                    z-index: 100;
                }

                .logo {
                    font-size: 48px;
                    color: #fff;
                    text-decoration: none;
                    font-weight: 700;
                }

                .logoFoot {
                    font-size: 32px;
                    color: #fff;
                    text-decoration: none;
                    font-weight: 700;
                }

                .address {
                    font-size: 16px;
                    color: #fff;
                    display: flex;
                    text-decoration: none;
                    align-items: center;
                    font-weight: 400;
                    margin: auto;
                }
                .navbar a{
                    font-size: 18px;
                    color: #fff;
                    font-weight: 500;
                    text-decoration: none;
                    margin-left: 40px;
                }

                .navbar a:hover {
                    background-color: rgba(0, 128, 0, 0.838);
                    color: white;
                    padding: 30px 30px;
                }
            </style>
        </head>
        <body>
            <header class="header">
                <a href="#" class="logo">Ely & Associates</a>
                <nav class = "navbar">
                    <a href="#">Home</a>
                    <a href="#">Projects</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </nav>
            </header>
            <h1>Ely & Associates</h1>
            <footer class="footer">
                <a href="#" class="logoFoot">Ely & Associates</a>
                <address class="address">
                    <p class = "p">Contact Us:</p><br>
                    Email: someone@gmail.com <br>
                    Number: xxx-xxx-xxxx <br>
                </address>
            </footer>
        </body>
    </html>