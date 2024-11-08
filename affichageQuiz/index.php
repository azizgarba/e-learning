<?php include_once 'data.php'; 
              include 'controllers/questionC.php';
               include 'controllers/reponseC.php';

               $reponseC = new ReponseC();
               $i = 0;
                ?>
                 
<html>
    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contents/sass/style.css" />
    <link rel="stylesheet" href="contents/css/style1.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />


    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <link rel="icon" href="contents/img/logo-icon-nobg.png">
    <title>I learn-dash</title>
    </head>
    
    <body>


    <div class="dash">
        <div class="dash__side-bar">
            <img class="dash__side-bar__logo" src="contents/img/logo-icon-nobg.png" alt="logo">

            <div class="dash__side-bar__list">
                <a href="./dash_instructor.html" class="dash__side-bar__item">
                    <div class="dash__side-bar__item__icon">
                        <svg class="dash__side-bar__item__icon-svg" id="dashboard-icon"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.432 44.432">
                            <g id="dashboard-icon-2" data-name="dashboard-icon">
                                <path id="Path_1025" data-name="Path 1025"
                                    d="M17.125,0H3.24A3.243,3.243,0,0,0,0,3.24v8.331a3.243,3.243,0,0,0,3.24,3.24H17.125a3.243,3.243,0,0,0,3.24-3.24V3.24A3.243,3.243,0,0,0,17.125,0Zm0,0"
                                    fill="currentColor" />
                                <path id="Path_1026" data-name="Path 1026"
                                    d="M17.125,213.332H3.24A3.243,3.243,0,0,0,0,216.572v19.439a3.243,3.243,0,0,0,3.24,3.24H17.125a3.243,3.243,0,0,0,3.24-3.24V216.572A3.243,3.243,0,0,0,17.125,213.332Zm0,0"
                                    transform="translate(0 -194.819)" fill="currentColor" />
                                <path id="Path_1027" data-name="Path 1027"
                                    d="M294.457,341.332H280.572a3.243,3.243,0,0,0-3.24,3.24V352.9a3.243,3.243,0,0,0,3.24,3.24h13.885a3.243,3.243,0,0,0,3.24-3.24v-8.331A3.243,3.243,0,0,0,294.457,341.332Zm0,0"
                                    transform="translate(-253.265 -311.711)" fill="currentColor" />
                                <path id="Path_1028" data-name="Path 1028"
                                    d="M294.457,0H280.572a3.243,3.243,0,0,0-3.24,3.24V22.679a3.243,3.243,0,0,0,3.24,3.24h13.885a3.243,3.243,0,0,0,3.24-3.24V3.24A3.243,3.243,0,0,0,294.457,0Zm0,0"
                                    transform="translate(-253.265)" fill="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <h1 class="dash__side-bar__item__txt">Dashboard</h1>
                </a>

                <a href="#" class="dash__side-bar__item active">
                    <div class="dash__side-bar__item__icon">
                        <svg class="dash__side-bar__item__icon-svg id=" course-icon" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 49 37.435">
                            <g id="Group_26" data-name="Group 26" transform="translate(0 0)">
                                <g id="Group_25" data-name="Group 25">
                                    <g id="Group_24" data-name="Group 24">
                                        <path id="Path_1032" data-name="Path 1032"
                                            d="M36.582,35.049h0a1.728,1.728,0,0,0-1.228.509,1.746,1.746,0,0,0-.516,1.244V63.1a1.759,1.759,0,0,0,1.756,1.753c4.081.01,10.919.86,15.636,5.8V43.129a1.68,1.68,0,0,0-.241-.888C48.112,36.006,40.672,35.059,36.582,35.049Z"
                                            transform="translate(-29.086 -35.049)" fill="currentColor" />
                                        <path id="Path_1033" data-name="Path 1033"
                                            d="M174.143,63.094V36.8a1.746,1.746,0,0,0-.516-1.244,1.729,1.729,0,0,0-1.228-.509h0c-4.09.01-11.531.957-15.4,7.192a1.68,1.68,0,0,0-.241.888V70.644c4.717-4.936,11.555-5.787,15.636-5.8A1.759,1.759,0,0,0,174.143,63.094Z"
                                            transform="translate(-130.89 -35.048)" fill="currentColor" />
                                        <path id="Path_1034" data-name="Path 1034"
                                            d="M190.437,71.8h-1.271V93.784a4.486,4.486,0,0,1-4.471,4.475c-3.462.008-9.17.685-13.213,4.511,6.992-1.712,14.362-.6,18.563.358a1.753,1.753,0,0,0,2.146-1.708V73.554A1.755,1.755,0,0,0,190.437,71.8Z"
                                            transform="translate(-143.19 -65.737)" fill="currentColor" />
                                        <path id="Path_1035" data-name="Path 1035"
                                            d="M3.024,93.784V71.8H1.753A1.755,1.755,0,0,0,0,73.554v27.865a1.753,1.753,0,0,0,2.146,1.708c4.2-.957,11.571-2.07,18.562-.358-4.042-3.826-9.751-4.5-13.212-4.511A4.486,4.486,0,0,1,3.024,93.784Z"
                                            transform="translate(0 -65.737)" fill="currentColor" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h1 class="dash__side-bar__item__txt">My courses</h1>
                </a>

                <a href="#" class="dash__side-bar__item">
                    <div class="dash__side-bar__item__icon">
                        <svg class="dash__side-bar__item__icon-svg" id="dollar-icon" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 45.958 45.958">
                            <g id="Group_27" data-name="Group 27">
                                <path id="Path_1036" data-name="Path 1036"
                                    d="M22.979,0A22.979,22.979,0,1,0,45.958,22.979,22.978,22.978,0,0,0,22.979,0ZM24.37,33.215v2.66a.712.712,0,0,1-.739.717H21.858a.722.722,0,0,1-.751-.717V33.449a15.221,15.221,0,0,1-4.524-.9,1.42,1.42,0,0,1-.872-1.679L16,29.748a1.422,1.422,0,0,1,1.89-.972,11.409,11.409,0,0,0,4.086.793c1.906,0,3.211-.736,3.211-2.074,0-1.271-1.07-2.074-3.546-2.911-3.579-1.2-6.03-2.876-6.03-6.121,0-2.943,2.083-5.251,5.644-5.954V10.083a.8.8,0,0,1,.771-.787H23.8a.757.757,0,0,1,.721.787v2.191a13.2,13.2,0,0,1,3.621.6,1.425,1.425,0,0,1,.944,1.7l-.254,1.008A1.419,1.419,0,0,1,27,16.58a10.241,10.241,0,0,0-3.38-.559c-2.174,0-2.877.937-2.877,1.874,0,1.1,1.171,1.806,4.014,2.877,3.98,1.405,5.579,3.245,5.579,6.254C30.33,30,28.227,32.547,24.37,33.215Z"
                                    fill="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <h1 class="dash__side-bar__item__txt">My earning</h1>
                </a>

                <a href="#" class="dash__side-bar__item">
                    <div class="dash__side-bar__item__icon">
                        <svg class="dash__side-bar__item__icon-svg" id="profile-icon" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 35.092 42.062">
                            <g id="user-icon">
                                <path id="Path_1029" data-name="Path 1029"
                                    d="M97.163,20.261a9.8,9.8,0,0,0,7.163-2.968,9.8,9.8,0,0,0,2.968-7.163,9.8,9.8,0,0,0-2.968-7.163A10.128,10.128,0,0,0,90,2.968a9.8,9.8,0,0,0-2.968,7.163A9.8,9.8,0,0,0,90,17.294,9.8,9.8,0,0,0,97.163,20.261Zm0,0"
                                    transform="translate(-79.882 0)" fill="currentColor" />
                                <path id="Path_1030" data-name="Path 1030"
                                    d="M35.007,259.342a25.018,25.018,0,0,0-.341-2.658,20.937,20.937,0,0,0-.654-2.672,13.2,13.2,0,0,0-1.1-2.492,9.4,9.4,0,0,0-1.657-2.159,7.3,7.3,0,0,0-2.379-1.5,8.224,8.224,0,0,0-3.038-.55,3.083,3.083,0,0,0-1.647.7c-.494.322-1.071.694-1.715,1.106a9.829,9.829,0,0,1-2.219.978,8.618,8.618,0,0,1-5.429,0,9.806,9.806,0,0,1-2.218-.977c-.638-.408-1.216-.78-1.717-1.106a3.079,3.079,0,0,0-1.646-.7,8.213,8.213,0,0,0-3.037.55,7.3,7.3,0,0,0-2.38,1.5,9.406,9.406,0,0,0-1.656,2.158,13.225,13.225,0,0,0-1.1,2.492,20.989,20.989,0,0,0-.653,2.672,24.933,24.933,0,0,0-.341,2.659c-.056.8-.084,1.64-.084,2.484a6.984,6.984,0,0,0,2.074,5.284,7.467,7.467,0,0,0,5.345,1.95H27.672a7.466,7.466,0,0,0,5.345-1.95,6.981,6.981,0,0,0,2.075-5.284c0-.848-.029-1.683-.085-2.484Zm0,0"
                                    transform="translate(0 -226.999)" fill="currentColor" />
                            </g>
                        </svg>
                    </div>
                    <h1 class="dash__side-bar__item__txt">My profile</h1>
                </a>

                <a href="#" class="dash__side-bar__item">
                    <div class="dash__side-bar__item__icon">
                        <svg class="dash__side-bar__item__icon-svg" id="QA-icon" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 46.48 46.48">
                            <path id="Path_1041" data-name="Path 1041"
                                d="M30.088,20.636,30.054,4.077A4.092,4.092,0,0,0,25.969,0H4.085A4.09,4.09,0,0,0,0,4.085V20.607a4.09,4.09,0,0,0,4.085,4.085H6.9v2.723A1.363,1.363,0,0,0,9.078,28.5l5.082-3.811,11.831.036A4.082,4.082,0,0,0,30.088,20.636ZM14.979,19.154a1.362,1.362,0,1,1,1.362-1.362A1.362,1.362,0,0,1,14.979,19.154Zm1.452-5.68v.143a1.362,1.362,0,0,1-2.723,0v-.85a1.819,1.819,0,0,1,1.555-1.8,1.366,1.366,0,0,0,1.169-1.348A1.419,1.419,0,0,0,14.087,8.58a1.362,1.362,0,0,1-1.468-2.294,4.281,4.281,0,0,1,4.41-.248,4.086,4.086,0,0,1-.6,7.437Z"
                                transform="translate(0 0)" fill="currentColor" />
                            <path id="Path_1042" data-name="Path 1042"
                                d="M206.963,210.995h-9.586l0,1.476a6.807,6.807,0,0,1-5.486,6.695h12.255a1.362,1.362,0,1,1,0,2.723H187.809a1.361,1.361,0,0,1-.553-2.605L181,219.264v12.247a4.09,4.09,0,0,0,4.085,4.085H194.3l5.159,2.58a1.363,1.363,0,0,0,1.971-1.218V235.6h5.538a4.09,4.09,0,0,0,4.085-4.085V215.08A4.09,4.09,0,0,0,206.963,210.995Zm-2.814,16.34H187.809a1.362,1.362,0,1,1,0-2.723h16.341a1.362,1.362,0,1,1,0,2.723Z"
                                transform="translate(-164.569 -191.841)" fill="currentColor" />
                        </svg>
                    </div>
                    <h1 class="dash__side-bar__item__txt">Q&A</h1>
                </a>

               
            </div>
        </div>

        <div class="dash__container">
            <nav class="dash__top-bar">
                <div class="dash__top-bar__container">
                    <div class="dash__top-bar__container__left">

                        <div class="dash__top-bar__svg-container">
                            <svg class="dash__top-bar__svg" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 46.917 46.917">
                                <g id="logout-icon" transform="translate(0 -0.004)">
                                    <path id="Path_1043" data-name="Path 1043"
                                        d="M29.323,25.417a1.954,1.954,0,0,0-1.955,1.955v7.82a1.957,1.957,0,0,1-1.955,1.955H19.548V7.823a3.94,3.94,0,0,0-2.662-3.716l-.579-.194h9.106a1.957,1.957,0,0,1,1.955,1.955v5.865a1.955,1.955,0,0,0,3.909,0V5.868A5.872,5.872,0,0,0,25.413,0H4.4a1.535,1.535,0,0,0-.209.043C4.1.039,4.005,0,3.91,0A3.913,3.913,0,0,0,0,3.913V39.1a3.94,3.94,0,0,0,2.662,3.716l11.765,3.922a4.047,4.047,0,0,0,1.212.182,3.913,3.913,0,0,0,3.909-3.91V41.056h5.865a5.872,5.872,0,0,0,5.865-5.865v-7.82a1.954,1.954,0,0,0-1.955-1.955Zm0,0"
                                        fill="currentColor" />
                                    <path id="Path_1044" data-name="Path 1044"
                                        d="M298.263,115.058l-7.82-7.819a1.954,1.954,0,0,0-3.337,1.382v5.865h-7.819a1.955,1.955,0,1,0,0,3.909h7.819v5.865a1.954,1.954,0,0,0,3.337,1.382l7.82-7.82a1.953,1.953,0,0,0,0-2.764Zm0,0"
                                        transform="translate(-251.919 -96.888)" fill="currentColor" />
                                </g>
                            </svg>
                        </div>

                        <div class="divider"></div>

                        <div class="dash__top-bar__svg-container">
                            <svg class="dash__top-bar__svg" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 43.026 34.421">
                                <g id="message-icon" transform="translate(0)">
                                    <path id="Path_1045" data-name="Path 1045"
                                        d="M43.921,8.5A5.284,5.284,0,0,0,38.711,4H6.266a5.284,5.284,0,0,0-5.21,4.5L22.489,22.371Z"
                                        transform="translate(-0.976 -4)" fill="currentColor" />
                                    <path id="Path_1046" data-name="Path 1046"
                                        d="M23.292,22.9a1.434,1.434,0,0,1-1.558,0L1,9.486V30.748a5.3,5.3,0,0,0,5.291,5.291H38.735a5.3,5.3,0,0,0,5.291-5.291V9.485Z"
                                        transform="translate(-1 -1.618)" fill="currentColor" />
                                </g>
                            </svg>
                        </div>

                    </div>

                    <div class="dash__top-bar__container__right">
                        <h1 class="dash__top-bar__fullname">Nabil Mersni</h1>
                        <div class="dash__top-bar__img-container">
                            <img class="dash__top-bar__img" src="contents/img/me.jpg" alt="">
                        </div>
                    </div>
                </div>

                <a href="#" class="secondary-btn secondary-btn-topbar">
                    Add New Course

                    <div class="secondary-btn__svg-container">

                        <svg class="secondary-btn__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52.779 52.779">
                            <path id="add-icon"
                                d="M52.779,26.389A26.389,26.389,0,0,1,0,26.389a2.062,2.062,0,0,1,4.123,0A22.266,22.266,0,1,0,26.389,4.123a2.062,2.062,0,0,1,0-4.123A26.375,26.375,0,0,1,52.779,26.389ZM16.535,6.371l2.667-1.1a2.062,2.062,0,1,0-1.578-3.809l-2.667,1.1a2.062,2.062,0,0,0,1.578,3.809ZM9.625,11.665l2.041-2.041A2.062,2.062,0,0,0,8.75,6.709L6.709,8.75a2.062,2.062,0,0,0,2.916,2.916ZM2.572,20.318A2.062,2.062,0,0,0,5.266,19.2l1.1-2.667a2.062,2.062,0,0,0-3.809-1.578l-1.1,2.667A2.062,2.062,0,0,0,2.572,20.318Zm23.817-4.237a2.062,2.062,0,0,0-2.062,2.062v6.185H18.143a2.062,2.062,0,0,0,0,4.123h6.185v6.185a2.062,2.062,0,0,0,4.123,0V28.451h6.185a2.062,2.062,0,0,0,0-4.123H28.451V18.143A2.062,2.062,0,0,0,26.389,16.081Z"
                                fill="currentColor" />
                        </svg>

                    </div>
                </a>

            </nav>



       
              <div id="quiz">
            <div class="dash__content">

                <div class="dash__instructor-my-courses">
                  
                <h1 class="dash__instructor-my-courses__title" class="dashh"> QUIZ </h1>
                <h2></h2>
                
                    
                </div>
                
                <tbody>
                <?php 
                    foreach($result as $data) { ?>
                    

                    <h3 class="question"> <strong> <?php echo $data['question_content'];?> </strong></h3> 
                        
                        
                   
                    <br> 
                    <?php
                                  
                                  $resultt = $reponseC->afficher_reponses($data['question_id']);
                                    ?> 
                                    <div id="optionList">
                    <?php
                    foreach($resultt as $data) {  ?>

                
                       
<button class="choice_que" id="option1"> <span > <?php echo $data['reponse_content'];?> </span></button> <br>
                    
                      <?php  
                    }
                    
                 ?> 
                 </div>
                 <?php   }?>
                 </div>
                </div>
                </tbody>
                <a href="quiz3.php">
                <button class="next" id="skip">  Finish  </button> </a>
                
                

            
            <ul class="pagination">
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li><a href=?start=$next>Next</a></li>"; 
                } 
                
            ?>
            </ul>
            <div class="qa_footer">
                         <span class="btn1"> Question <?php echo $page_counter ?></span>
                    </div>
            </center>   
            </div>
        
    </div> 
    <script src="contents/js/revenue-chart.js"></script>
    </body>
</html>
