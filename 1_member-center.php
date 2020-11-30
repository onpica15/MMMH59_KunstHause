<?php $title = 'Kunsthaus|會員中心'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的 css -->
<link rel="stylesheet" href="./css/1_member-center.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">
        <div class="banner">
            <img class="Diversity" src=" <?= WEB_ROOT ?>/imgs/member/Diversity.svg">
        </div>
        <div class="member-area mx-auto p-0 col-lg-12 col-md-12 col-sm-12 col-12 w-100">
            <div class="avatar">
                <img src="/KunstHause/imgs/member_imgs/member_20.jpg">
            </div>

            <div class="edit-member pt-5">
                <p>Hi 小米
                    <i class="fas fa-edit"></i>
                    下一場活動要去哪呢?
                </p>
                <button class="btn btn-primary col-2 mt-5">編輯設定</button>
            </div>



            <!-- 我的收藏 區域 -->
            <div class="sort col-10 mx-auto mb-5 pb-2">我的收藏</div>
            <div class="favorite-list ">
                <div class="c-row1 d-flex justify-content-center col-12">
                    <div class="card-wrap m-3 col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                        <div class="card-kv position-relative">
                            <img src="/KunstHause/imgs/event/event-sm/TPE-26.jpg">
                            <div class="time col-4 position-absolute">
                                <p class="my-2">2021.03.20-2021.03.20</p>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0 w-100">
                            <div class="card-info position-relative col-8">
                                <div class="event-name my-2">原子邦妮樂遊原演唱會</div>
                                <div class="event-location my-2">【ZEP NEW TEIPEI 】</div>
                                <!-- 收藏 -->
                                <a href="#" class="like-link position-absolute">
                                    <i class="like far fa-heart"></i>
                                </a>
                            </div>
                            <div class="card-price col-4">
                                <div class="discount mt-3">優惠價</div>
                                <div class="price my-2">$</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrap m-3 col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                        <div class="card-kv position-relative">
                            <img src="/KunstHause/imgs/event/event-sm/TPE-22.jpg">
                            <div class="time col-4 position-absolute mt-3">
                                <p class="my-2">2021.01.17-2021-01.17</p>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0 w-100">
                            <div class="card-info position-relative col-8">
                                <div class="event-name my-2">獨立人種</div>
                                <div class="event-location my-2">【公館河岸留言】</div>
                                <!-- 收藏 -->
                                <a href="#" class="like-link position-absolute">
                                    <i class="like far fa-heart"></i>
                                </a>
                            </div>
                            <div class="card-price col-4">
                                <div class="discount mt-3">優惠價</div>
                                <div class="price my-2">$</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="c-row2 d-flex justify-content-center col-12">

                    <div class="card-wrap m-3 col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                        <div class="card-kv position-relative">
                            <img src="/KunstHause/imgs/event/event-sm/TNN-54.jpg">
                            <div class="time col-4 position-absolute mt-3">
                                <p class="my-2">2020.11.03-2020.12.13</p>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0 w-100">
                            <div class="card-info position-relative col-8">
                                <div class="event-name my-2">維也納藝術月-不均的平面</div>
                                <div class="event-location my-2">【台南市美術館-跨域展演廳】</div>
                                <!-- 收藏 -->
                                <a href="#" class="like-link position-absolute">
                                    <i class="like far fa-heart"></i>
                                </a>
                            </div>
                            <div class="card-price col-4">
                                <div class="discount mt-3">優惠價</div>
                                <div class="price my-2">$</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-wrap m-3 col-lg-5 col-md-5 col-sm-12 col-12 p-0">
                        <div class="card-kv position-relative">
                            <img src="/KunstHause/imgs/event/event-sm/TPE-06.jpg">
                            <div class="time col-4 position-absolute mt-3">
                                <p class="my-2">2020.12.11-2020.12.27</p>
                            </div>
                        </div>
                        <div class="card-body d-flex p-0 w-100">
                            <div class="card-info position-relative col-8">
                                <div class="event-name my-2">小毛頭之亂-大寶寶齊打交</div>
                                <div class="event-location my-2">【台北THE WALL公館】</div>
                                <!-- 收藏 -->
                                <a href="#" class="like-link position-absolute">
                                    <i class="like far fa-heart"></i>
                                </a>
                            </div>
                            <div class="card-price col-4">
                                <div class="discount mt-3">優惠價</div>
                                <div class="price my-2">$</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <!-- 票券管理 區域 -->

            <div class="sort col-10 mx-auto my-5 pb-2">票券管理</div>

            <div class="ticket-wrap d-flex">
                <div class="ticket-kv col-lg-3 p-0">
                    <img class="event-sm-img w-100" src="/KunstHause/imgs/event/event-sm/TXG-08.jpg">
                </div>
                <div class="t-detail col-lg-5 d-flex align-content-center">
                    <div class="main-info my-4">
                        <p class="event-name mb-2">2020百威真我至上音樂巡迴</p>
                        <p class="price mb-2">單價$</p>
                    </div>
                    <div class="sub-info my-4">
                        <p class="date mb-2">2020.01.</p>
                        <p class="number mb-2">訂單編號:</p>
                        <p class="pay mb-2">付款方式:</p>
                        <p class="total mb-2">訂單總額:</p>
                        <p class="status mb-2">訂單狀態:</p>
                    </div>
                    <div class="col-lg-1 sm-none"></div>
                    <div class="e-ticket col-lg-3 d-flex justify-content-around">
                        <button class="delete" type="button" data-toggle="modal" data-target="#cancelModal"></button>
                        <button class="feedback"></button>
                    </div>
                    <div class="qr-code">
                        <button class="qr-code-lg" type="button" data-toggle="modal" data-target="#qrcodeModal">
                            <img src="/KunstHause/imgs/member/qr-code.svg">
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include __DIR__ . '/1_parts/3_script.php'; ?>



<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>