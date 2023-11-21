<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    @include('bootstraps.css')
    <style>
        div.button{
            position: relative;
            text-align: center;
            bottom: 100px;
        }
        div.box1{
            position: absolute;
            left: 100px;
            top: 150px;
        }
        div.box2{
            position: absolute;
            right:100px;
            top:150px;
        }
        div.img{
            position: absolute;
            right: 120px;
            bottom: 300px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{url('images/Logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                    Coffee Shop
                </a>
                <ul class="nav justify-content-end" id="navbarCollapse">
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="navbar-nav me-auto mb-2 mb-md-0">
                        <a class="nav-link active" aria-current="page" href="support">Support</a>
                    </li>
                </ul>
            </div>
          </nav>
    </header>

    <div >
        <div class="box1">
            <svg width="500" height="500" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M143.818 382V358.727H151.682C153.508 358.727 155 359.057 156.159 359.716C157.326 360.367 158.189 361.25 158.75 362.364C159.311 363.477 159.591 364.72 159.591 366.091C159.591 367.462 159.311 368.708 158.75 369.83C158.197 370.951 157.341 371.845 156.182 372.511C155.023 373.17 153.538 373.5 151.727 373.5H146.091V371H151.636C152.886 371 153.89 370.784 154.648 370.352C155.405 369.92 155.955 369.337 156.295 368.602C156.644 367.86 156.818 367.023 156.818 366.091C156.818 365.159 156.644 364.326 156.295 363.591C155.955 362.856 155.402 362.28 154.636 361.864C153.871 361.439 152.856 361.227 151.591 361.227H146.636V382H143.818ZM163.767 382V364.545H166.358V367.182H166.54C166.858 366.318 167.434 365.617 168.267 365.08C169.1 364.542 170.04 364.273 171.085 364.273C171.282 364.273 171.528 364.277 171.824 364.284C172.119 364.292 172.343 364.303 172.494 364.318V367.045C172.403 367.023 172.195 366.989 171.869 366.943C171.551 366.89 171.214 366.864 170.858 366.864C170.009 366.864 169.252 367.042 168.585 367.398C167.926 367.746 167.403 368.231 167.017 368.852C166.638 369.466 166.449 370.167 166.449 370.955V382H163.767ZM182.233 382.364C180.657 382.364 179.275 381.989 178.085 381.239C176.903 380.489 175.979 379.439 175.312 378.091C174.653 376.742 174.324 375.167 174.324 373.364C174.324 371.545 174.653 369.958 175.312 368.602C175.979 367.246 176.903 366.193 178.085 365.443C179.275 364.693 180.657 364.318 182.233 364.318C183.809 364.318 185.188 364.693 186.369 365.443C187.559 366.193 188.483 367.246 189.142 368.602C189.809 369.958 190.142 371.545 190.142 373.364C190.142 375.167 189.809 376.742 189.142 378.091C188.483 379.439 187.559 380.489 186.369 381.239C185.188 381.989 183.809 382.364 182.233 382.364ZM182.233 379.955C183.43 379.955 184.415 379.648 185.188 379.034C185.96 378.42 186.532 377.614 186.903 376.614C187.275 375.614 187.46 374.53 187.46 373.364C187.46 372.197 187.275 371.11 186.903 370.102C186.532 369.095 185.96 368.28 185.188 367.659C184.415 367.038 183.43 366.727 182.233 366.727C181.036 366.727 180.051 367.038 179.278 367.659C178.506 368.28 177.934 369.095 177.562 370.102C177.191 371.11 177.006 372.197 177.006 373.364C177.006 374.53 177.191 375.614 177.562 376.614C177.934 377.614 178.506 378.42 179.278 379.034C180.051 379.648 181.036 379.955 182.233 379.955ZM200.827 382.364C199.372 382.364 198.088 381.996 196.974 381.261C195.861 380.519 194.99 379.473 194.361 378.125C193.732 376.769 193.418 375.167 193.418 373.318C193.418 371.485 193.732 369.894 194.361 368.545C194.99 367.197 195.865 366.155 196.986 365.42C198.107 364.686 199.402 364.318 200.872 364.318C202.009 364.318 202.906 364.508 203.565 364.886C204.232 365.258 204.74 365.682 205.088 366.159C205.444 366.629 205.721 367.015 205.918 367.318H206.145V358.727H208.827V382H206.236V379.318H205.918C205.721 379.636 205.44 380.038 205.077 380.523C204.713 381 204.194 381.428 203.52 381.807C202.846 382.178 201.948 382.364 200.827 382.364ZM201.19 379.955C202.266 379.955 203.175 379.674 203.918 379.114C204.66 378.545 205.224 377.761 205.611 376.761C205.997 375.754 206.19 374.591 206.19 373.273C206.19 371.97 206.001 370.83 205.622 369.852C205.243 368.867 204.683 368.102 203.94 367.557C203.198 367.004 202.281 366.727 201.19 366.727C200.054 366.727 199.107 367.019 198.349 367.602C197.599 368.178 197.035 368.962 196.656 369.955C196.285 370.939 196.099 372.045 196.099 373.273C196.099 374.515 196.289 375.644 196.668 376.659C197.054 377.667 197.622 378.47 198.372 379.068C199.13 379.659 200.069 379.955 201.19 379.955ZM225.111 374.864V364.545H227.793V382H225.111V379.045H224.929C224.52 379.932 223.884 380.686 223.02 381.307C222.156 381.92 221.065 382.227 219.747 382.227C218.656 382.227 217.687 381.989 216.838 381.511C215.99 381.027 215.323 380.299 214.838 379.33C214.353 378.352 214.111 377.121 214.111 375.636V364.545H216.793V375.455C216.793 376.727 217.149 377.742 217.861 378.5C218.58 379.258 219.497 379.636 220.611 379.636C221.277 379.636 221.955 379.466 222.645 379.125C223.342 378.784 223.925 378.261 224.395 377.557C224.872 376.852 225.111 375.955 225.111 374.864ZM239.795 382.364C238.159 382.364 236.75 381.977 235.568 381.205C234.386 380.432 233.477 379.367 232.841 378.011C232.205 376.655 231.886 375.106 231.886 373.364C231.886 371.591 232.212 370.027 232.864 368.67C233.523 367.307 234.439 366.242 235.614 365.477C236.795 364.705 238.174 364.318 239.75 364.318C240.977 364.318 242.083 364.545 243.068 365C244.053 365.455 244.86 366.091 245.489 366.909C246.117 367.727 246.508 368.682 246.659 369.773H243.977C243.773 368.977 243.318 368.273 242.614 367.659C241.917 367.038 240.977 366.727 239.795 366.727C238.75 366.727 237.833 367 237.045 367.545C236.265 368.083 235.655 368.845 235.216 369.83C234.784 370.807 234.568 371.955 234.568 373.273C234.568 374.621 234.78 375.795 235.205 376.795C235.636 377.795 236.242 378.572 237.023 379.125C237.811 379.678 238.735 379.955 239.795 379.955C240.492 379.955 241.125 379.833 241.693 379.591C242.261 379.348 242.742 379 243.136 378.545C243.53 378.091 243.811 377.545 243.977 376.909H246.659C246.508 377.939 246.133 378.867 245.534 379.693C244.943 380.511 244.159 381.163 243.182 381.648C242.212 382.125 241.083 382.364 239.795 382.364ZM258.17 364.545V366.818H249.125V364.545H258.17ZM251.761 360.364H254.443V377C254.443 377.758 254.553 378.326 254.773 378.705C255 379.076 255.288 379.326 255.636 379.455C255.992 379.576 256.367 379.636 256.761 379.636C257.057 379.636 257.299 379.621 257.489 379.591C257.678 379.553 257.83 379.523 257.943 379.5L258.489 381.909C258.307 381.977 258.053 382.045 257.727 382.114C257.402 382.189 256.989 382.227 256.489 382.227C255.731 382.227 254.989 382.064 254.261 381.739C253.542 381.413 252.943 380.917 252.466 380.25C251.996 379.583 251.761 378.742 251.761 377.727V360.364ZM290.023 358.727V382H287.295L274.614 363.727H274.386V382H271.568V358.727H274.295L287.023 377.045H287.25V358.727H290.023ZM300.435 382.409C299.329 382.409 298.325 382.201 297.423 381.784C296.522 381.36 295.806 380.75 295.276 379.955C294.745 379.152 294.48 378.182 294.48 377.045C294.48 376.045 294.677 375.235 295.071 374.614C295.465 373.985 295.991 373.492 296.651 373.136C297.31 372.78 298.037 372.515 298.832 372.341C299.635 372.159 300.442 372.015 301.253 371.909C302.313 371.773 303.173 371.67 303.832 371.602C304.499 371.527 304.984 371.402 305.287 371.227C305.598 371.053 305.753 370.75 305.753 370.318V370.227C305.753 369.106 305.446 368.235 304.832 367.614C304.226 366.992 303.306 366.682 302.071 366.682C300.791 366.682 299.787 366.962 299.06 367.523C298.332 368.083 297.821 368.682 297.526 369.318L294.98 368.409C295.435 367.348 296.041 366.523 296.798 365.932C297.563 365.333 298.397 364.917 299.298 364.682C300.207 364.439 301.101 364.318 301.98 364.318C302.541 364.318 303.185 364.386 303.912 364.523C304.647 364.652 305.355 364.92 306.037 365.33C306.726 365.739 307.298 366.356 307.753 367.182C308.207 368.008 308.435 369.114 308.435 370.5V382H305.753V379.636H305.616C305.435 380.015 305.132 380.42 304.707 380.852C304.283 381.284 303.719 381.652 303.014 381.955C302.31 382.258 301.45 382.409 300.435 382.409ZM300.844 380C301.904 380 302.798 379.792 303.526 379.375C304.26 378.958 304.813 378.42 305.185 377.761C305.563 377.102 305.753 376.409 305.753 375.682V373.227C305.639 373.364 305.389 373.489 305.003 373.602C304.624 373.708 304.185 373.803 303.685 373.886C303.192 373.962 302.711 374.03 302.241 374.091C301.779 374.144 301.404 374.189 301.116 374.227C300.42 374.318 299.768 374.466 299.162 374.67C298.563 374.867 298.079 375.167 297.707 375.568C297.344 375.962 297.162 376.5 297.162 377.182C297.162 378.114 297.507 378.818 298.196 379.295C298.893 379.765 299.776 380 300.844 380ZM313.33 382V364.545H315.92V367.273H316.148C316.511 366.341 317.098 365.617 317.909 365.102C318.72 364.58 319.693 364.318 320.83 364.318C321.981 364.318 322.939 364.58 323.705 365.102C324.477 365.617 325.08 366.341 325.511 367.273H325.693C326.14 366.371 326.811 365.655 327.705 365.125C328.598 364.587 329.67 364.318 330.92 364.318C332.481 364.318 333.758 364.807 334.75 365.784C335.742 366.754 336.239 368.265 336.239 370.318V382H333.557V370.318C333.557 369.03 333.205 368.11 332.5 367.557C331.795 367.004 330.966 366.727 330.011 366.727C328.784 366.727 327.833 367.098 327.159 367.841C326.485 368.576 326.148 369.508 326.148 370.636V382H323.42V370.045C323.42 369.053 323.098 368.254 322.455 367.648C321.811 367.034 320.981 366.727 319.966 366.727C319.269 366.727 318.617 366.913 318.011 367.284C317.413 367.655 316.928 368.17 316.557 368.83C316.193 369.481 316.011 370.235 316.011 371.091V382H313.33ZM348.46 382.364C346.778 382.364 345.328 381.992 344.108 381.25C342.896 380.5 341.96 379.455 341.301 378.114C340.65 376.765 340.324 375.197 340.324 373.409C340.324 371.621 340.65 370.045 341.301 368.682C341.96 367.311 342.877 366.242 344.051 365.477C345.233 364.705 346.612 364.318 348.188 364.318C349.097 364.318 349.994 364.47 350.881 364.773C351.767 365.076 352.574 365.568 353.301 366.25C354.028 366.924 354.608 367.818 355.04 368.932C355.472 370.045 355.688 371.417 355.688 373.045V374.182H342.233V371.864H352.96C352.96 370.879 352.763 370 352.369 369.227C351.983 368.455 351.43 367.845 350.71 367.398C349.998 366.951 349.157 366.727 348.188 366.727C347.119 366.727 346.195 366.992 345.415 367.523C344.642 368.045 344.047 368.727 343.631 369.568C343.214 370.409 343.006 371.311 343.006 372.273V373.818C343.006 375.136 343.233 376.254 343.688 377.17C344.15 378.08 344.79 378.773 345.608 379.25C346.426 379.72 347.377 379.955 348.46 379.955C349.165 379.955 349.801 379.856 350.369 379.659C350.945 379.455 351.441 379.152 351.858 378.75C352.275 378.341 352.597 377.833 352.824 377.227L355.415 377.955C355.142 378.833 354.684 379.606 354.04 380.273C353.396 380.932 352.6 381.447 351.653 381.818C350.706 382.182 349.642 382.364 348.46 382.364Z" fill="black"/>
                <rect x="0.5" y="0.5" width="499" height="499" stroke="black"/>
            </svg>
                    <div class="img">
                    
                        <img src="images/productImage.jpg">
                        
                        <img src="images/productimage.jpg">
                        
                    </div>
                <div class="button">
                    <a href="view-details">
                        <button type="button" class="btn btn-primary" style="height: 50px; width: 100px; font-size: 25px">Details</button>
                    </a>
            </div>
        </div>

        <div class="box2">
            <svg width="500" height="500" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M143.818 382V358.727H151.682C153.508 358.727 155 359.057 156.159 359.716C157.326 360.367 158.189 361.25 158.75 362.364C159.311 363.477 159.591 364.72 159.591 366.091C159.591 367.462 159.311 368.708 158.75 369.83C158.197 370.951 157.341 371.845 156.182 372.511C155.023 373.17 153.538 373.5 151.727 373.5H146.091V371H151.636C152.886 371 153.89 370.784 154.648 370.352C155.405 369.92 155.955 369.337 156.295 368.602C156.644 367.86 156.818 367.023 156.818 366.091C156.818 365.159 156.644 364.326 156.295 363.591C155.955 362.856 155.402 362.28 154.636 361.864C153.871 361.439 152.856 361.227 151.591 361.227H146.636V382H143.818ZM163.767 382V364.545H166.358V367.182H166.54C166.858 366.318 167.434 365.617 168.267 365.08C169.1 364.542 170.04 364.273 171.085 364.273C171.282 364.273 171.528 364.277 171.824 364.284C172.119 364.292 172.343 364.303 172.494 364.318V367.045C172.403 367.023 172.195 366.989 171.869 366.943C171.551 366.89 171.214 366.864 170.858 366.864C170.009 366.864 169.252 367.042 168.585 367.398C167.926 367.746 167.403 368.231 167.017 368.852C166.638 369.466 166.449 370.167 166.449 370.955V382H163.767ZM182.233 382.364C180.657 382.364 179.275 381.989 178.085 381.239C176.903 380.489 175.979 379.439 175.312 378.091C174.653 376.742 174.324 375.167 174.324 373.364C174.324 371.545 174.653 369.958 175.312 368.602C175.979 367.246 176.903 366.193 178.085 365.443C179.275 364.693 180.657 364.318 182.233 364.318C183.809 364.318 185.188 364.693 186.369 365.443C187.559 366.193 188.483 367.246 189.142 368.602C189.809 369.958 190.142 371.545 190.142 373.364C190.142 375.167 189.809 376.742 189.142 378.091C188.483 379.439 187.559 380.489 186.369 381.239C185.188 381.989 183.809 382.364 182.233 382.364ZM182.233 379.955C183.43 379.955 184.415 379.648 185.188 379.034C185.96 378.42 186.532 377.614 186.903 376.614C187.275 375.614 187.46 374.53 187.46 373.364C187.46 372.197 187.275 371.11 186.903 370.102C186.532 369.095 185.96 368.28 185.188 367.659C184.415 367.038 183.43 366.727 182.233 366.727C181.036 366.727 180.051 367.038 179.278 367.659C178.506 368.28 177.934 369.095 177.562 370.102C177.191 371.11 177.006 372.197 177.006 373.364C177.006 374.53 177.191 375.614 177.562 376.614C177.934 377.614 178.506 378.42 179.278 379.034C180.051 379.648 181.036 379.955 182.233 379.955ZM200.827 382.364C199.372 382.364 198.088 381.996 196.974 381.261C195.861 380.519 194.99 379.473 194.361 378.125C193.732 376.769 193.418 375.167 193.418 373.318C193.418 371.485 193.732 369.894 194.361 368.545C194.99 367.197 195.865 366.155 196.986 365.42C198.107 364.686 199.402 364.318 200.872 364.318C202.009 364.318 202.906 364.508 203.565 364.886C204.232 365.258 204.74 365.682 205.088 366.159C205.444 366.629 205.721 367.015 205.918 367.318H206.145V358.727H208.827V382H206.236V379.318H205.918C205.721 379.636 205.44 380.038 205.077 380.523C204.713 381 204.194 381.428 203.52 381.807C202.846 382.178 201.948 382.364 200.827 382.364ZM201.19 379.955C202.266 379.955 203.175 379.674 203.918 379.114C204.66 378.545 205.224 377.761 205.611 376.761C205.997 375.754 206.19 374.591 206.19 373.273C206.19 371.97 206.001 370.83 205.622 369.852C205.243 368.867 204.683 368.102 203.94 367.557C203.198 367.004 202.281 366.727 201.19 366.727C200.054 366.727 199.107 367.019 198.349 367.602C197.599 368.178 197.035 368.962 196.656 369.955C196.285 370.939 196.099 372.045 196.099 373.273C196.099 374.515 196.289 375.644 196.668 376.659C197.054 377.667 197.622 378.47 198.372 379.068C199.13 379.659 200.069 379.955 201.19 379.955ZM225.111 374.864V364.545H227.793V382H225.111V379.045H224.929C224.52 379.932 223.884 380.686 223.02 381.307C222.156 381.92 221.065 382.227 219.747 382.227C218.656 382.227 217.687 381.989 216.838 381.511C215.99 381.027 215.323 380.299 214.838 379.33C214.353 378.352 214.111 377.121 214.111 375.636V364.545H216.793V375.455C216.793 376.727 217.149 377.742 217.861 378.5C218.58 379.258 219.497 379.636 220.611 379.636C221.277 379.636 221.955 379.466 222.645 379.125C223.342 378.784 223.925 378.261 224.395 377.557C224.872 376.852 225.111 375.955 225.111 374.864ZM239.795 382.364C238.159 382.364 236.75 381.977 235.568 381.205C234.386 380.432 233.477 379.367 232.841 378.011C232.205 376.655 231.886 375.106 231.886 373.364C231.886 371.591 232.212 370.027 232.864 368.67C233.523 367.307 234.439 366.242 235.614 365.477C236.795 364.705 238.174 364.318 239.75 364.318C240.977 364.318 242.083 364.545 243.068 365C244.053 365.455 244.86 366.091 245.489 366.909C246.117 367.727 246.508 368.682 246.659 369.773H243.977C243.773 368.977 243.318 368.273 242.614 367.659C241.917 367.038 240.977 366.727 239.795 366.727C238.75 366.727 237.833 367 237.045 367.545C236.265 368.083 235.655 368.845 235.216 369.83C234.784 370.807 234.568 371.955 234.568 373.273C234.568 374.621 234.78 375.795 235.205 376.795C235.636 377.795 236.242 378.572 237.023 379.125C237.811 379.678 238.735 379.955 239.795 379.955C240.492 379.955 241.125 379.833 241.693 379.591C242.261 379.348 242.742 379 243.136 378.545C243.53 378.091 243.811 377.545 243.977 376.909H246.659C246.508 377.939 246.133 378.867 245.534 379.693C244.943 380.511 244.159 381.163 243.182 381.648C242.212 382.125 241.083 382.364 239.795 382.364ZM258.17 364.545V366.818H249.125V364.545H258.17ZM251.761 360.364H254.443V377C254.443 377.758 254.553 378.326 254.773 378.705C255 379.076 255.288 379.326 255.636 379.455C255.992 379.576 256.367 379.636 256.761 379.636C257.057 379.636 257.299 379.621 257.489 379.591C257.678 379.553 257.83 379.523 257.943 379.5L258.489 381.909C258.307 381.977 258.053 382.045 257.727 382.114C257.402 382.189 256.989 382.227 256.489 382.227C255.731 382.227 254.989 382.064 254.261 381.739C253.542 381.413 252.943 380.917 252.466 380.25C251.996 379.583 251.761 378.742 251.761 377.727V360.364ZM290.023 358.727V382H287.295L274.614 363.727H274.386V382H271.568V358.727H274.295L287.023 377.045H287.25V358.727H290.023ZM300.435 382.409C299.329 382.409 298.325 382.201 297.423 381.784C296.522 381.36 295.806 380.75 295.276 379.955C294.745 379.152 294.48 378.182 294.48 377.045C294.48 376.045 294.677 375.235 295.071 374.614C295.465 373.985 295.991 373.492 296.651 373.136C297.31 372.78 298.037 372.515 298.832 372.341C299.635 372.159 300.442 372.015 301.253 371.909C302.313 371.773 303.173 371.67 303.832 371.602C304.499 371.527 304.984 371.402 305.287 371.227C305.598 371.053 305.753 370.75 305.753 370.318V370.227C305.753 369.106 305.446 368.235 304.832 367.614C304.226 366.992 303.306 366.682 302.071 366.682C300.791 366.682 299.787 366.962 299.06 367.523C298.332 368.083 297.821 368.682 297.526 369.318L294.98 368.409C295.435 367.348 296.041 366.523 296.798 365.932C297.563 365.333 298.397 364.917 299.298 364.682C300.207 364.439 301.101 364.318 301.98 364.318C302.541 364.318 303.185 364.386 303.912 364.523C304.647 364.652 305.355 364.92 306.037 365.33C306.726 365.739 307.298 366.356 307.753 367.182C308.207 368.008 308.435 369.114 308.435 370.5V382H305.753V379.636H305.616C305.435 380.015 305.132 380.42 304.707 380.852C304.283 381.284 303.719 381.652 303.014 381.955C302.31 382.258 301.45 382.409 300.435 382.409ZM300.844 380C301.904 380 302.798 379.792 303.526 379.375C304.26 378.958 304.813 378.42 305.185 377.761C305.563 377.102 305.753 376.409 305.753 375.682V373.227C305.639 373.364 305.389 373.489 305.003 373.602C304.624 373.708 304.185 373.803 303.685 373.886C303.192 373.962 302.711 374.03 302.241 374.091C301.779 374.144 301.404 374.189 301.116 374.227C300.42 374.318 299.768 374.466 299.162 374.67C298.563 374.867 298.079 375.167 297.707 375.568C297.344 375.962 297.162 376.5 297.162 377.182C297.162 378.114 297.507 378.818 298.196 379.295C298.893 379.765 299.776 380 300.844 380ZM313.33 382V364.545H315.92V367.273H316.148C316.511 366.341 317.098 365.617 317.909 365.102C318.72 364.58 319.693 364.318 320.83 364.318C321.981 364.318 322.939 364.58 323.705 365.102C324.477 365.617 325.08 366.341 325.511 367.273H325.693C326.14 366.371 326.811 365.655 327.705 365.125C328.598 364.587 329.67 364.318 330.92 364.318C332.481 364.318 333.758 364.807 334.75 365.784C335.742 366.754 336.239 368.265 336.239 370.318V382H333.557V370.318C333.557 369.03 333.205 368.11 332.5 367.557C331.795 367.004 330.966 366.727 330.011 366.727C328.784 366.727 327.833 367.098 327.159 367.841C326.485 368.576 326.148 369.508 326.148 370.636V382H323.42V370.045C323.42 369.053 323.098 368.254 322.455 367.648C321.811 367.034 320.981 366.727 319.966 366.727C319.269 366.727 318.617 366.913 318.011 367.284C317.413 367.655 316.928 368.17 316.557 368.83C316.193 369.481 316.011 370.235 316.011 371.091V382H313.33ZM348.46 382.364C346.778 382.364 345.328 381.992 344.108 381.25C342.896 380.5 341.96 379.455 341.301 378.114C340.65 376.765 340.324 375.197 340.324 373.409C340.324 371.621 340.65 370.045 341.301 368.682C341.96 367.311 342.877 366.242 344.051 365.477C345.233 364.705 346.612 364.318 348.188 364.318C349.097 364.318 349.994 364.47 350.881 364.773C351.767 365.076 352.574 365.568 353.301 366.25C354.028 366.924 354.608 367.818 355.04 368.932C355.472 370.045 355.688 371.417 355.688 373.045V374.182H342.233V371.864H352.96C352.96 370.879 352.763 370 352.369 369.227C351.983 368.455 351.43 367.845 350.71 367.398C349.998 366.951 349.157 366.727 348.188 366.727C347.119 366.727 346.195 366.992 345.415 367.523C344.642 368.045 344.047 368.727 343.631 369.568C343.214 370.409 343.006 371.311 343.006 372.273V373.818C343.006 375.136 343.233 376.254 343.688 377.17C344.15 378.08 344.79 378.773 345.608 379.25C346.426 379.72 347.377 379.955 348.46 379.955C349.165 379.955 349.801 379.856 350.369 379.659C350.945 379.455 351.441 379.152 351.858 378.75C352.275 378.341 352.597 377.833 352.824 377.227L355.415 377.955C355.142 378.833 354.684 379.606 354.04 380.273C353.396 380.932 352.6 381.447 351.653 381.818C350.706 382.182 349.642 382.364 348.46 382.364Z" fill="black"/>
                <rect x="0.5" y="0.5" width="499" height="499" stroke="black"/>
            </svg>
                    <div class="img">
                    
                      <img src="images/productImage.jpg">
                      
                      <img src="images/productimage.jpg">
                      
                    </div>
                <div class="button">
                    <a href="view-details">
                        <button type="button" class="btn btn-primary" style="height: 50px; width: 100px; font-size: 25px">Details</button>
                    </a>
            </div>
        </div>
    </div>
    <div style="padding-top: 800px">
        @include('footer')
    </div>
    @include('bootstraps.js')
</body>
</html>