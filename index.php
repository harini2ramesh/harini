<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Social Book)Responsive Social media Website</title>
    <!--..............CUSTOM CSS LINK................-->
    <link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!--.......................swiper slider link..........................-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body>

    <nav>
        <div class="Container nav-container">
            <div class="logo">
                <h3> Social<span>Book</span></h3>
            </div>
            <div class="serch-bar">
                <i class="fa fa-search"></i>
                <input type="search" placeholder="Serch For Creators">
            </div>
            <div class="add-post">
                <label for="add-post" class="btn btn-primary mini-button" >Add post</label>
                <div class="profile-picture" id="my-profile-picture">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180" alt="">

                </div>
            </div>
        </div>
    </nav>
    <!--.....................start main section............-->
    <main>
        <div class="container main-container">
            <!--....................main left start.............-->
            <div class="main-left">
                <!--...............profile start.............-->
                <a class="profile">
                    <div class="profile-picture" id="my-profile-picture">
                        <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180"
                            alt="">
                    </div>
                    <div class="profile-handle">
                        <h4> Beg Jocker</h4>
                        <p class="text-gray">
                            @thebegjocker
                        </p>
                    </div>
                </a>
                <!--..................profile end..............-->
                <!--.................start aside bar..................-->
                <aside>
                    <a class="menu-item active">
                        <span><img
                                src="https://cdn5.vectorstock.com/i/1000x1000/20/29/house-icon-black-and-white-home-vector-24922029.jpg"
                                alt=""></span>
                        <h3>Home</h3>

                    </a>
                    <a class="menu-item">
                        <span><img src="https://tse1.mm.bing.net/th?id=OIP.qMKQoOuu-wexYQ-ZT2t8_AHaHa&pid=Api&P=0&h=180"
                                alt=""></span>
                        <h3>Explore</h3>
                    </a>

                    <a class="menu-item" id="Notify-box">
                        <span><img src="https://tse2.mm.bing.net/th?id=OIP.x6j_8PIvTAUhfhgF6KAw0AHaHa&pid=Api&P=0&h=180"
                                alt=""></span>
                        <small class="notfy-counter nt" id="ntcounter1">7+</small>
                        <h3>Notifications</h3>

                        <!--................Notification box start..........-->
                        <div class="notification-box ">
                            <div>
                                <div class="profile-picture">
                                    <img src="https://tse3.mm.bing.net/th?id=OIP.Xqf6bixD3lRwfFSwoPiqFwHaL1&pid=Api&P=0&h=180" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Maria Lily</b>accepted you friend request
                                    <small class="test-gray">1 DAYS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=180" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>John Evan</b>commented on your post
                                    <small class="test-gray">2 HOURS AGO</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="https://tse1.mm.bing.net/th?id=OIP.86s37P4x6UIFSEnyIfgPZgHaLH&pid=Api&P=0&h=180" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Emaily Benjamin</b>liked on your post
                                    <small class="test-gray">JUST NOW</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="https://tse4.mm.bing.net/th?id=OIP.HzRP1VOphRXBx26Uw_aOygHaID&pid=Api&P=0&h=180" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Mark Trump</b> and <b> 10 other</b>liked on your post
                                    <small class="test-gray">1 Days Ago</small>
                                </div>
                            </div>
                            <div>
                                <div class="profile-picture">
                                    <img src="https://tse1.mm.bing.net/th?id=OIP.iEVDsTfoTAaZiVRn5CDV1QHaGa&pid=Api&P=0&h=180" alt="">
                                </div>
                                <div class="notification-body">
                                    <b>Evrahim Alli</b>and<b>5 other</b>commented on your post
                                    <small class="test-gray">3 DAYS AGO</small>
                                </div>
                            </div>
                        </div>
                        <!--.............notification box end............-->
                    </a>

                    <a class="menu-item" id="messageMenu">
                        <span><img src="https://tse4.mm.bing.net/th?id=OIP.s1x1433DnhOXP3b6r_ewIAHaEK&pid=Api&P=0&h=180"
                                alt=""></span>
                        <small class="notfy-counter" id="notfycounter2">3</small>
                        <h3>Messages</h3>
                    </a>

                    <a class="menu-item" >
                        <span><img src="https://tse2.mm.bing.net/th?id=OIP.wGpt92romMNkiyYt7lw2vAHaHa&pid=Api&P=0&h=180"
                                alt=""></span>
                        <h3>BOOk Marks</h3>
                    </a>

                    <a class="menu-item">
                        <span><img src="https://tse3.mm.bing.net/th?id=OIP.3h9GK-I9W6NwiDJnb7e0eAAAAA&pid=Api&P=0&h=180"
                                alt=""></span>
                        <h3>Analytics</h3>
                    </a>

                    <a class="menu-item" id="theme">
                        <span><img src="https://tse3.mm.bing.net/th?id=OIP.FrNHSAr39oyfeU6rLlmtywHaFj&pid=Api&P=0&h=180"
                                alt=""></span>
                        <h3>Theme</h3>
                    </a>

                    <a class="menu-item ">
                        <span><img src="https://clipground.com/images/settings-logo-3.jpg" alt=""></span>
                        <h3>Settings</h3>
                    </a>
                    <!--..................Add Post Btn.....................-->
                    <label for="add-post" class="btn btn-primary btn-lg"  id="crate-lg">Create A post</label>

                </aside>

                <!--.................end aside bar..................-->

            </div>

            <!--....................main left end.............-->


            <!--....................main middle start.............-->
            <div class="main-middle">
                <div class="middle-container">
            <!--..............start stories...............-->
            <div class="stories">
                <div class="stories-wrapper swiper mySwiper">
                    <div class="swiper-wrapper">
                  <div class="story swiper-slide">
                      <img src="" alt="">
                      <div class="profile-picture" i="my-profile-picture">
                          <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180" alt="">
                        </div>
                        <label for="add-story" class="add-story">
                          <i class="fa fa-add"></i>
                          
                          <p><b> Add your </b> story </p>
                        </label>
                        <input type="file" accept="image/jpg, image/png,image/jpeg" id="add-story">
                   </div>
                   <div class="story swiper-slide">
                      <img src="https://tse4.mm.bing.net/th?id=OIP.CFoo8X_VA1QR25JjZPiHygHaHa&pid=Api&P=0&h=180" alt="">
                      <div class="profile-picture" >
                         <img src="https://tse4.mm.bing.net/th?id=OIP.H75VivS1jzSaQJ6WOAPupwHaJ3&pid=Api&P=0&h=180" alt="">
                       </div>
                       <p>Evrahim Alli</p>
                   </div>
                   <div class="story swiper-slide">
                      <img src="https://tse4.mm.bing.net/th?id=OIP.qm5LUaTOCwho6edLrJAkCQHaEo&pid=Api&P=0&h=180" alt="">
                      <div class="profile-picture" >
                         <img src="https://tse4.mm.bing.net/th?id=OIP.sRXnl46b2v-q_4r5Hd_yVQHaKe&pid=Api&P=0&h=180" alt="">
                      </div>
                      <p>Lana White</p>
                   </div>
                   <div class="story swiper-slide">
                      <img src="https://tse3.mm.bing.net/th?id=OIP.hjmkT60KYCWLiDWbkuwv2AHaE6&pid=Api&P=0&h=180" alt="">
                      <div class="profile-picture" >
                         <img src="https://tse1.mm.bing.net/th?id=OIP.1INwlz2iPRaYjGhEflzQZQHaJ_&pid=Api&P=0&h=180" alt="">
                       </div>
                       <p>Furken Syal</p>
                   </div>
                   <div class="story swiper-slide">
                      <img src="https://i.pinimg.com/originals/66/e3/e4/66e3e4aaa5e83473f0805e78321a8eea.jpg" alt="">
                      <div class="profile-picture" >
                         <img src="http://ohtopten.com/wp-content/uploads/2015/01/Best-Short-Hairstyles-for-Men-4.jpg" alt="">
                      </div>
                      <p>Alexa Lisa</p>
                   </div>
                   <div class="story swiper-slide">
                      <img src="https://tse1.mm.bing.net/th?id=OIP.PudTCECfTRhXThtVtrQkPQHaHT&pid=Api&P=0&h=180" alt="">
                      <div class="profile-picture" >
                         <img src="https://tse4.explicit.bing.net/th?id=OIP.yv03ToGvGtWWhTay2ZSJZAHaHa&pid=Api&P=0&h=180" alt="">
                       </div>
                       <p>William Jems</p>
                   </div>
                   <div class="story swiper-slide">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.7G_vOGWbwLh_g1NMsLmSuQHaE8&pid=Api&P=0&h=180" alt="">
                    <div class="profile-picture" >
                       <img src="https://tse4.explicit.bing.net/th?id=OIP.FdABWrxTOW5gG6b3Pd2pOgHaLH&pid=Api&P=0&h=180" alt="">
                     </div>
                     <p>Anny Walker</p>
                 </div>
                 <div class="story swiper-slide">
                    <img src="https://tse4.mm.bing.net/th?id=OIP._Ht6sViMC1qzi4SbFLfvnAHaHt&pid=Api&P=0&h=180" alt="">
                    <div class="profile-picture" >
                       <img src="https://tse2.mm.bing.net/th?id=OIP.PoFmgWG0dZXmssCtCiBk9QHaLH&pid=Api&P=0&h=180" alt="">
                     </div>
                     <p>John william</p>
                 </div>
              </div>
              </div>

            </div>

            <!--..............end stories...............-->

            <!--...........post input.....................-->
            <form class="add-post input-post">
                <div class="profile-picture" id="my-profile-picture">
                    <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180" alt="">
                </div>
                <input type="text" placeholder="what's on your mind ?" id="add-post">
                <input type="submit" value="post" class="btn btn-primary">

            </form>
            <!--.............feed aria start................-->
                <div class="feeds">
                    <div class="feed">
                        <!--.............feed top..........-->
                       <div class="feed-top">
                           <div class="user">
                               <div class="profile-picture" id="my-profile-picture">
                                   <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180" alt="">
                               </div>
                               <div class="info">
                                   <h3>Beg Jocker</h3>
                                   <div class="time text-gry">
                                      <small> BANGLADESH,<span>JUST NOW</span></small>
                                   </div>
                               </div>
   
                           </div>
                           <div class="edit">
                               <img src="https://up.yimg.com/ib/th?id=OIP.WrqV9DrxBE50waCr2eblLAHaD4&%3Bpid=Api&rs=1&c=1&qlt=95&w=203&h=106" alt="">
                                <ul class="edit-menu">
                                   <li><i class="fa fa-pen"></i>Edit</li>
                                   <li><i class="fa fa-trash"></i>Delete</li>
                                </ul>
                           </div>
                       </div>
                       <!--.............feed img..........-->
                       <div class="feed-img">
                           <img src="https://tse2.mm.bing.net/th?id=OIP.-HfonxP-D8AyF3E98ZREZAHaEo&pid=Api&P=0&h=220" alt="">
   
                       </div>
                       <!--.............feed action aria..........-->
                       <div class="action-button">
                           <div class="interaction-button">
                               <span><i class="fa fa-heart"></i></span>
                               <span><i class="fa fa-comment-dots"></i></span>
                               <span><i class="fa fa-link"></i></span>
                           </div>
                           <div class="bookmark">
                               <i class="fa fa-bookmark"></i>
                           </div>
                       </div>
                       <!--...............Liked by.............-->
                       <div class="liked-by">
                           <span><img src="https://tse1.mm.bing.net/th?id=OIP.rEHUGQ3AxtgUiTWlTQGvQAHaNK&pid=Api&P=0&h=220" alt=""></span>
                           <span><img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=220" alt=""></span>
                           <span><img src="https://tse2.mm.bing.net/th?id=OIP.4W_8EvAovcvrpHMVzjP3XQHaLG&pid=Api&P=0&h=220" alt=""></span>
                           <p>Liked by<b>Shaik</b>and<b>10 comments other</b></p>
                       </div>
   
   
                       <!--...............caption................-->
                       <div class="caption">
                           <p><b>Motu</b> Lorem, ipsum dolor sit amet consectetur adipisicing.
                           <span class="hars-tag">#lifestyle</span></p>
                       </div>
                       <!--...........comments.............-->
                       <div class="comments text-gry">
                           view all comments
                       </div>
    
                   </div>
                <div class="feed">
                     <!--.............feed top..........-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <img src="https://up.yimg.com/ib/th?id=OIP.1IDcRwVPL9EJG0UWWwHbYQAAAA&%3Bpid=Api&rs=1&c=1&qlt=95&w=76&h=114" alt="">
                            </div>
                            <div class="info">
                                <h3>Irfan Habib</h3>
                                <div class="time text-gry">
                                   <small> PAKISTAIN,<span>2 DAYS AGO</span></small>
                                </div>
                            </div>

                        </div>
                        <div class="edit">
                            <img src="https://up.yimg.com/ib/th?id=OIP.WrqV9DrxBE50waCr2eblLAHaD4&%3Bpid=Api&rs=1&c=1&qlt=95&w=203&h=106" alt="">
                             <ul class="edit-menu">
                                <li><i class="fa fa-pen"></i>Edit</li>
                                <li><i class="fa fa-trash"></i>Delete</li>
                             </ul>
                        </div>
                    </div>
                    <!--.............feed img..........-->
                    <div class="feed-img">
                        <img src="https://up.yimg.com/ib/th?id=OIP.1IDcRwVPL9EJG0UWWwHbYQAAAA&%3Bpid=Api&rs=1&c=1&qlt=95&w=76&h=114" alt="">

                    </div>
                    <!--.............feed action aria..........-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                            <span><i class="fa fa-link"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <!--...............Liked by.............-->
                    <div class="liked-by">
                        <span><img src="https://tse1.mm.bing.net/th?id=OIP.rEHUGQ3AxtgUiTWlTQGvQAHaNK&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse2.mm.bing.net/th?id=OIP.4W_8EvAovcvrpHMVzjP3XQHaLG&pid=Api&P=0&h=220" alt=""></span>
                        <p>Liked by<b>John William</b>and<b>77 comments other</b></p>
                    </div>


                    <!--...............caption................-->
                    <div class="caption">
                        <div class="title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque minus qui at maxime delectus quo quibusdam sapiente nesciunt illum a!
                        </div>
                        <p><b>Lana White</b> Lorem, ipsum dolor sit amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>
                    <!--...........comments.............-->
                    <div class="comments text-gry">
                        view all comments
                    </div>
 
                </div>
                <div class="feed">
                     <!--.............feed top..........-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.mn2qtQkMQdeBoRi6npTlCQHaE7&pid=Api&P=0&h=220" alt="">
                            </div>
                            <div class="info">
                                <h3>Alexa lisa</h3>
                                <div class="time text-gry">
                                   <small> JAPAN,<span>2 DAYS AGO</span></small>
                                </div>
                            </div>

                        </div>
                        <div class="edit">
                            <img src="https://up.yimg.com/ib/th?id=OIP.WrqV9DrxBE50waCr2eblLAHaD4&%3Bpid=Api&rs=1&c=1&qlt=95&w=203&h=106" alt="">
                        </div>
                    </div>
                    <!--.............feed img..........-->
                    <div class="feed-img">
                        <div class="title"><h2>Hello World, I'm Lisa<br> from Japan</h2>
                            </div>

                    </div>
                    <!--.............feed action aria..........-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                            <span><i class="fa fa-link"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <!--...............Liked by.............-->
                    <div class="liked-by">
                        <span><img src="https://tse2.mm.bing.net/th?id=OIP.sKl7Q6PxGpdBViQezoHzFgHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse1.mm.bing.net/th?id=OIP.rEHUGQ3AxtgUiTWlTQGvQAHaNK&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <p>Liked by<b>Yeang Hoo</b>and<b>23 comments other</b></p>
                    </div>


                    <!--...............caption................-->
                    <div class="caption">
                        <div class="title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum, nam.</div>
                        <p><b>Kim Parvez</b> Lorem, ipsum dolor sit amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>
                    <!--...........comments.............-->
                    <div class="comments text-gry">
                        view all comments
                    </div>
 
                </div>
                <div class="feed">
                     <!--.............feed top..........-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.4W_8EvAovcvrpHMVzjP3XQHaLG&pid=Api&P=0&h=220" alt="">
                            </div>
                            <div class="info">
                                <h3>Glira Ema</h3>
                                <div class="time text-gry">
                                   <small> RUSSIA,<span>1 HOUR AGO</span></small>
                                </div>
                            </div>

                        </div>
                        <div class="edit">
                            <img src="https://up.yimg.com/ib/th?id=OIP.WrqV9DrxBE50waCr2eblLAHaD4&%3Bpid=Api&rs=1&c=1&qlt=95&w=203&h=106" alt="">
                        </div>
                    </div>
                    <!--.............feed img..........-->
                    <div class="feed-img">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.sKl7Q6PxGpdBViQezoHzFgHaLH&pid=Api&P=0&h=220" alt="">

                    </div>
                    <!--.............feed action aria..........-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                            <span><i class="fa fa-link"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <!--...............Liked by.............-->
                    <div class="liked-by">
                        <span><img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse1.mm.bing.net/th?id=OIP.mn2qtQkMQdeBoRi6npTlCQHaE7&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse3.explicit.bing.net/th?id=OIP.a2kAwxQa2jlStAY9XWBj8wHaLI&pid=Api&P=0&h=220" alt=""></span>
                        <p>Liked by<b>David Mark</b>and<b>77 comments other</b></p>
                    </div>


                    <!--...............caption................-->
                    <div class="caption">
                        <div class="tile">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit numquam nihil sit aspernatur esse, quis corrupti eum commodi eligendi culpa!</div>
                        <p><b>Jia glisa</b> Lorem, ipsum dolor sit amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>
                    <!--...........comments.............-->
                    <div class="comments text-gry">
                        view all comments
                    </div>
 
                </div>
                <div class="feed">
                     <!--.............feed top..........-->
                    <div class="feed-top">
                        <div class="user">
                            <div class="profile-picture">
                                <img src="https://tse3.mm.bing.net/th?id=OIP.sPYoTfBMDMGD0ZMrGMCTygHaNK&pid=Api&P=0&h=220" alt="">
                            </div>
                            <div class="info">
                                <h3>Emaliy Elfiey</h3>
                                <div class="time text-gry">
                                   <small> London,<span>3 DAYS AGO</span></small>
                                </div>
                            </div>

                        </div>
                        <div class="edit">
                            <img src="https://up.yimg.com/ib/th?id=OIP.WrqV9DrxBE50waCr2eblLAHaD4&%3Bpid=Api&rs=1&c=1&qlt=95&w=203&h=106" alt="">
                        </div>
                    </div>
                    <!--.............feed img..........-->
                    <div class="feed-img">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.SJ0jOC696oMZ9OTt3zTduQHaGQ&pid=Api&P=0&h=220" alt="">

                    </div>
                    <!--.............feed action aria..........-->
                    <div class="action-button">
                        <div class="interaction-button">
                            <span><i class="fa fa-heart"></i></span>
                            <span><i class="fa fa-comment-dots"></i></span>
                            <span><i class="fa fa-link"></i></span>
                        </div>
                        <div class="bookmark">
                            <i class="fa fa-bookmark"></i>
                        </div>
                    </div>
                    <!--...............Liked by.............-->
                    <div class="liked-by">
                        <span><img src="https://tse1.mm.bing.net/th?id=OIP.rEHUGQ3AxtgUiTWlTQGvQAHaNK&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse3.explicit.bing.net/th?id=OIP.9FkB7OVX9kv5sldZgQGHEwHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <span><img src="https://tse2.mm.bing.net/th?id=OIP.sKl7Q6PxGpdBViQezoHzFgHaLH&pid=Api&P=0&h=220" alt=""></span>
                        <p>Liked by<b>Maria Bronk</b>and<b>77 comments other</b></p>
                    </div>


                    <!--...............caption................-->
                    <div class="caption">
                        <div class="title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe, in.</div>
                        <p><b>Lana White</b> Lorem, ipsum dolor sit amet consectetur adipisicing.
                        <span class="hars-tag">#lifestyle</span></p>
                    </div>
                    <!--...........comments.............-->
                    <div class="comments text-gry">
                        view all comments
                    </div>
 
                </div>
                </div>
            <!--.............feed aria end................-->
            </div>
            </div>
            <!--....................main middle end.............-->
            <!--....................main right  start.............-->
            <div class="main-right">
                <!--...................start message.................-->
                <div class="messages">
                    <!--.............message top..............-->
                    <div class="message-top">
                        <h4>Message</h4> <i class="fa fa-edit"></i>
                    </div>
                    <!--............. searchbar............-->
                    <div class="message-search-bar">
                        <i class="fa fa-search"></i>
                        <input type="search" placeholder="Search message" id="message-search">
                    </div>
                    <!--...............message categories.............-->
                    <div class="message-categories">
                        <h6 class="active">primary</h6>
                        <h6 >General</h6>
                        <h6 class="message-request">Request(2)</h6>
                    </div>
                    <!--...............message.............-->
                    <div class="message">
                        <div class="profile-picture">
                            <img src="https://up.yimg.com/ib/th?id=OIP.yukQOp6I_TD55GL94gWQLAHaJQ&%3Bpid=Api&rs=1&c=1&qlt=95&w=88&h=110" alt="">
                            <div class="green-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>Alexa Lisa</h5>
                            <p class="text-gry">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="https://up.yimg.com/ib/th?id=OIP.zI-hfcUXnrffkj-E3_kXrwHaGX&%3Bpid=Api&rs=1&c=1&qlt=95&w=135&h=115" alt="">
                            <div class="green-active"></div>
                        </div>
                        <div class="message-body">
                            <h5>David Law</h5>
                            <p class="text-gry">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="https://up.yimg.com/ib/th?id=OIP.ib5i1U6mFaMCdMdRZy926QHaE8&%3Bpid=Api&rs=1&c=1&qlt=95&w=145&h=96" alt="">
                            
                        </div>
                        <div class="message-body">
                            <h5>Prince Adam</h5>
                            <p class="text-gry">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="https://up.yimg.com/ib/th?id=OIP.A42wP7QbU_Ak1XPBRPGQwwHaLm&%3Bpid=Api&rs=1&c=1&qlt=95&w=75&h=118" alt="">
                            
                        </div>
                        <div class="message-body">
                            <h5>Alyxa Jia</h5>
                            <p class="text-gry">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    <div class="message">
                        <div class="profile-picture">
                            <img src="https://up.yimg.com/ib/th?id=OIP.TJuATx9KS2bztejg-3Gj7AHaLH&%3Bpid=Api&rs=1&c=1&qlt=95&w=72&h=108" alt="">
                            
                        </div>
                        <div class="message-body">
                            <h5>Lana white</h5>
                            <p class="text-gry">
                                Lorem ipsum dolor sit amet.
                            </p>
                        </div>
                    </div>
                    


                    

                </div>
                
                <!--...................end message.................-->


                <!--...................start firend request.................-->
                <div class="firend-request">
                    <h4>Request</h4>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="https://up.yimg.com/ib/th?id=OIP.tfOvEHoC27BUODsx5P7dXwHaLH&%3Bpid=Api&rs=1&c=1&qlt=95&w=79&h=119" alt="">
                            </div>
                            <div>
                            <h5>Mark Danele</h5>
                            <p class="text-gry">
                                4 mutual firend
                            </p>
                            <small class="text-gry alert"> You have accepted firend request </small>
                            
                            </div>
                                
                        </div>
                        <div class="action">
                            <div class="btn btn-primary" id="Accept">
                                Accept
                            </div>
                            <div class="btn btn-danger" id="Delete">
                                Delete
                            </div>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="https://tse1.mm.bing.net/th?id=OIP.2fspMP1BiOcibZxPubTwJAHaLG&pid=Api&P=0&h=220" alt="">
                            </div>
                            <div>
                            <h5>Even loise</h5>
                            <p class="text-gry">
                                6 mutual firend
                            </p>
                            <small class="text-gry alert"> You have accepted firend request </small>
                            
                            </div>
                                
                        </div>
                        <div class="action">
                            <div class="btn btn-primary" id="Accept">
                                Accept
                            </div>
                            <div class="btn btn-danger" id="Delete">
                                Delete
                            </div>
                        </div>
                    </div>
                    <div class="request">
                        <div class="info">
                            <div class="profile-picture">
                                <img src="https://tse4.mm.bing.net/th?id=OIP.W1RGFwSrDqU5dX1aRqz3bwHaHa&pid=Api&P=0&h=220" alt="">
                            </div>
                            <div>
                            <h5>Hija Binte</h5>
                            <p class="text-gry">
                                2 mutual firend
                            </p>
                            <small class="text-gry alert"> You have accepted firend request </small>
                            
                            </div>
                                
                        </div>
                        <div class="action">
                            <div class="btn btn-primary" id="Accept">
                                Accept
                            </div>
                            <div class="btn btn-danger" id="Delete">
                                Delete
                            </div>
                        </div>
                    </div>
                    
                </div>


                <!--...................end firend request.................-->
            </div>

            <!--....................main right end.............-->
        </div>




    </main>
    <!--.........................--start main section.....................-->




    <!--.........................--start popups aria.....................-->
    <!--.........................--start profile popups.....................-->


    <div class="popup profile-popup">
     <div>
         <div class="popup-box profile-popup-box">
             <h1>Beg Joker</h1>
             <p>@thebegjocker</p>
             <div id="my-profile-picture">
             <img src="https://tse3.mm.bing.net/th?id=OIP.qDpKEsMMPQy0-FVpVSAgSAHaIB&pid=Api&P=0&h=180" >
             </div>
             <label for="profile-upload" class="btn btn-primary btn-lg">update profile picture</label>
             <input type="file" accept="image/jpg, image/png, image/jpeg" id="profile-upload">
             <button class="btn btn-primary btn-lg">Log Out</button>
          </div>
          <span class="close"><i class="fa fa-close"></i></span>
      </div>
    </div>
    <!--.........................--end profile popups.....................-->

    <!--.........................--start addpost popup.....................-->
    <div class="popup add-post-popup">
        <div>
            <form class="popup-box add-post-popup">
                <h1>Add New Post</h1>
                <div class="row post-title">
                    <label>Title</label>
                    <input type="text" placeholder="what's on your mind?" id="add-post">
                </div>
                <div class="row post-img">
                
                        <img src="" id="postimg" >
                        <label for="feed-pic-upload" class="feed-upload-button">
                            <span><i class="fa fa-add"></i></span>
                            upload A  picture
                        </label>
                        <input type="file" accept="image/jpg, image/png, image/jpeg" id="feed-pic-upload">
                        <input type="submit" class="btn btn-primary btn-lg" value="Add post">
                     
                    
                </div>

            </form>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>





    <!--.........................--start theme customize popup.....................-->
    <div class="popup theme-customize">
        <div>
            <div class="popup-box them-customize-popup-box">
                <h1>Coustomize Your Theme</h1>
                <p>Manage Your Font Size,Color,and Background</p>

                <!--...............font size..............-->
                <div class="font-size">
                    <h4>Font Size</h4>
                    <div>
                     <div>
                        <h6>Aa</h6>
                     </div>
                     <div class="choose-size">
                         <span class="font-size-1"></span>
                         <span class="font-size-2 active"></span>
                         <span class="font-size-3"></span>
                         <span class="font-size-4"></span>
                         <span class="font-size-5"></span>
                       </div>
                       <div>
                         <h3>Aa</h3>
                       </div>
                    </div>
                </div>
                <!--............primary colors............-->
                <div class="colors">
                    <h4>color</h4>
                    <div class="choose-color">
                        <span class="color-1 active"></span>
                        <span class="color-2 "></span>
                        <span class="color-3 "></span>
                        <span class="color-4 "></span>
                        <span class="color-5 "></span>
                    </div>
                </div>
                <!--.............backgroung colors...............-->
                <div class="background">
                    <h4>Background</h4>
                    <div class="choose-bg">
                        <div class="bg1 active">
                            <span></span>
                               <h5 > Light</h5>
                        </div>
                        <div class="bg2">
                            <span></span>
                               <h5> Dark</h5>
                        </div>
                    </div>
                </div> 
            </div>
            <span class="close"><i class="fa fa-close"></i></span>
        </div>
    </div>


    <!--.........................--end theme customize popup.....................-->

    <!--.........................--end addpost popup.....................-->




    <!--.........................--end popups aria.....................-->

    <!--.........................--swiper js link.....................-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="./Script.js"></script>

</body>

</html>