<?php $this->view('./components/Header');?>
<body id="pagetop" class="oxy-ui pubs-ui hp-page">
    <!-- Google Tag Manager SST (noscript) -->
    <noscript>
        <iframe src="https://www.analytics.rsc.org/ns.html?id=GTM-56FZ7G" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <?php 
        $url=implode('',$_REQUEST);
        $urlParts = explode('/', $url);
    ?>
    <!-- End Google Tag Manager SST (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-56FZ7G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
        <div data-id="pnlAccSkipLinks" class="skipto-control">
        <a href="#maincontent" class="skipto__link">
            <div class="viewport r-gutter">
                Jump to main content <img src="./oxygen/assets/icons/arrow-right-o-light.png"
                    width="24" class="ver-m" alt="">
            </div>
        </a>
        <a href="#SearchText" class="skipto__link">
            <div class="viewport r-gutter">
                Jump to site search 
                <img src="./oxygen/assets/icons/arrow-right-o-light.png"  width="24" class="ver-m" alt="">
            </div>
        </a>
    </div>
    <?php $this->view('./components/Nav'); ?>
    <div id="ember-basic-dropdown-wormhole"></div>
    <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
        <section id="shadow-host-companion"></section>
    </div>
    <div id="ember404" class="ember-view">
        <aside class="route-announcer">
            <div aria-live="polite" id="ember432" class="screen-reader ember-view">Loaded SkyBase Data</div>
        </aside>
        <div class="media-desktop locale-en-us" style="margin-top:20px" id="locale-en-us">
            <div class="canvas">
                <div id="library-content" class="container ">
                    <main class="holdings-container">
                        <div class="subject">
                            <a href="<?=ROOT?>" id="ember1122" class="subject-back-button ember-view"> 
                                <img src="<?=ASSETS?>images/change-subject-chevron-b0613c2c2576dc880a792874777e52b3.png" alt="Change Subject"> 
                                Change Subject
                            </a>
                            <h1 tabindex="0" class="subject-name"><?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjects_name;?></h1>
                            <h4 tabindex="0" class="subject-bookcase-list-header">Categories</h4>
                            <ul class="subject-bookcase-list">
                                <li class="subject-bookcase-list-item">
                                    <a href="<?php echo ROOT?>libraries/603/subjects/<?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjectid.'/?sort=title&all=1';?>" id="ember1123" class="<?=((isset($urlParts[3]) && !isset($urlParts[5]) && isset($_REQUEST['all']))? 'active': '')?> ember-view"> All Journals</a></li>
                                    <?php if($data['data']['data'] !=null):?>
                                        <?php foreach($data['data']['data'] as $categoriesList):?>
                                        <li class="subject-bookcase-list-item"> 
                                        <a href="<?php echo ROOT?>libraries/603/subjects/<?php echo $data['data']['subject']->subjectid?>/bookcases/<?php echo $categoriesList['categoriesid'];?>/?sort=title" id="ember1124" class="<?=((isset($urlParts[3]) && isset($urlParts[5]) && $categoriesList['categoriesid']==$urlParts[5])? 'active': '')?> ember-view"><?php echo $categoriesList['categories_name'];?></a> </li>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </ul>
                        </div>
                        <?php if($data['sideline']==true):?>
                            <div class="bookcase">
                                <h3 tabindex="0" class="bookcase-name" style="font-size:22px">
                                <?=((isset($data['activate_bookshalves']) && !empty($data['activate_bookshalves']))?$data['activate_bookshalves']['category']->categories_name:'')?></h3>
                                <ul class="bookcase-bookshelf-list" >
                                    <li class="bookcase-bookshelf-list-item" style="font-size: 18px;color: #666;">
                                        <a href="<?php echo ROOT?>libraries/603/subjects/<?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjectid.'/bookcases/'.$urlParts[5].'/?sort=title&all=1';?>"  id="ember1115" class="<?=((isset($urlParts[3]) && isset($urlParts[5]) && !isset($urlParts[7]))? 'active': '')?> ember-view" tabindex="0"><span>All Journals</span></a>
                                    </li>
                                    <?php if(isset($data['activate_bookshalves'])) :?>
                                        <?php if($data['activate_bookshalves']['bookcases'] !=null):?>
                                            <?php foreach($data['activate_bookshalves']['bookcases'] as $bookcasesList):?>
                                                <li class="bookcase-bookshelf-list-item" >
                                                    <a href="<?php echo ROOT?>libraries/<?=$data['data']['subject']->package_id?>/subjects/<?=$data['activate_bookshalves']['category']->subjectid?>/bookcases/<?=$data['activate_bookshalves']['category']->categoriesid?>/bookshelves/<?=$bookcasesList['bookshelvesid']?>/?sort=title" id="ember1119" 
                                                    class="<?=((isset($urlParts[3]) && isset($urlParts[5]) && $bookcasesList['bookshelvesid']==$urlParts[7])? 'active': '')?> ember-view" tabindex="0" style="font-size:18px;color: #666;">
                                                        <span><?=$bookcasesList['bookshelves_name']?></span>
                                                    </a>
                                                    <div id="ember1126" class="ember-view"></div>
                                                </li>
                                            <?php endforeach;?>
                                        <?php endif;?>
                                    <?php endif;?>
                                </ul>
                            </div>
                        <?php endif;?>
                        <div id="Content_Sidebar" class="journals-container infinite-scroller ember-view" >
                            <div class="controls-container" id="case1">
                                <ul class="controls">
                                    <li tabindex="0" id="returnHome" class="back subject-back-button tabindex" data-ember-action="" data-ember-action-6914="6914">
                                        <span aria-hidden="true" class="icon flaticon solid left-2"></span> Back
                                    </li>
                                    <li tabindex="0" class="categories  tabindex" data-ember-action="" data-ember-action-6915="6915" id="view_mobile_toggle_subject">
                                        Refine <span aria-hidden="true" class="icon flaticon solid down-2"></span>
                                    </li>
                                    <li tabindex="0" class="sort  tabindex" data-ember-action="" data-ember-action-6916="6916" id="view_sort_toggle">
                                        Sort <span aria-hidden="true" class="icon flaticon solid down-2"></span>
                                    </li>
                                </ul>
                                <ul class="subject-bookcase-list bookcase-bookshelf-list" style="display:none" id="hidden_subject_list">
                                    <li id="ember7338" class="subject-bookcase-list-item all-journals <?=((isset($urlParts[3]) && !isset($urlParts[5]) && isset($_REQUEST['all']))? 'active': '')?> ember-view">
                                        <a tabindex="0" href="<?php echo ROOT?>libraries/603/subjects/<?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjectid.'/?sort=title&all=1';?>"" id="ember7339" class="active ember-view">
                                            <div class="text">All Journals - <?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjects_name;?></div>
                                        </a>
                                        <span aria-hidden="true" class="icon flaticon solid down-2"></span>
                                    </li>
                            <?php if($data['data']['data'] !=null):?>
                                <?php foreach($data['data']['data'] as $categoriesList):?>
                                    <li class="subject-bookcase-list-item <?=((isset($urlParts[3]) && isset($urlParts[5]) && $categoriesList['categoriesid']==$urlParts[5])? 'active': '')?>" data-ember-action="" data-ember-action-7340="7340">
                                        <a tabindex="0" href="<?php echo ROOT?>libraries/603/subjects/<?php echo $data['data']['subject']->subjectid?>/bookcases/<?php echo $categoriesList['categoriesid'];?>/?sort=title" id="ember7341" class="ember-view">
                                            <div class="text"><?php echo $categoriesList['categories_name'];?></div>
                                        </a> <span aria-hidden="true" class="icon flaticon solid down-2"></span>
                                    </li>
                            <?php endforeach;?>
                        <?php endif;?>
                                </ul>
                                <ul class="sort-controls" style="display:none" id="hidden_sort">
                                    <li id="ember8453" class="sort-control active ember-view">
                                        <a tabindex="0" href="javascript:void(0)" id="ember8454" class="sort-control sort-by-title active ember-view">                
                                            <div class="text">Journals By Title (A-Z)</div>
                                        </a>             
                                        <span aria-hidden="true" class="icon flaticon solid"></span>
                                    </li>
                                    <li id="ember8455" class="sort-control ember-view">
                                        <a tabindex="0" href="/libraries/603/subjects/63?sort=rank" id="ember8456" class="sort-control sort-by-scimago ember-view">                
                                            <div class="text">Journals By Scimago Rank</div>
                                        </a>              
                                        <span aria-hidden="true" class="icon flaticon solid"></span>
                                    </li>         
                                </ul>
                               
                                <h1 tabindex="0" class="subject-name bookcase-name">
                                    <?=(isset($urlParts[1]) && is_numeric($urlParts[1]) && isset($urlParts[2]) && !isset($urlParts[5]) ? 'All Journals- '.$data["data"]["subject"]->subjects_name : ((isset($urlParts[4]) && is_string($urlParts[4]) && isset($urlParts[5]) && is_numeric($urlParts[5]) && !isset($urlParts[7]) || !isset($urlParts[8])) ? 'All Journals- '.$data["activate_bookshalves"]["category"]->categories_name  : $data["url"]["url_bookshelves"]->bookshelves_name));?>
                                </h1>
                            </div>
                            <div style="margin-right: 47.200000000000045px" id="ember791" class="sort-options-container __eccf5 ember-view">
                                <div class="sort-options">
                                    <span class="active">
                                        <a aria-label="A-Z" href="/libraries/603/subjects/57?sort=title" id="ember792" class="sort-control sort-by-title hide-underline active ember-view" tabindex="0"> Sort <span class="show-underline">A-Z</span></a> 
                                    </span>
                                    <span>
                                        <a aria-label="Journal Rank" href="/libraries/603/subjects/57?sort=rank" id="ember793" class="sort-control sort-by-scimago ember-view" tabindex="0">Journal Rank</a> 
                                    </span>
                                </div>
                            </div>
                                <ul class="bookshelf">
                                    <!-- Books Container-->
                                    <div id="child_container"></div>
                                </ul>
                                <div style="margin-bottom:60px">
                                    <div class="bookshelf-loading-indicator" id="loading" style="display: none;">
                                        <div id="ember1952" class="__0d2b3 ember-view">
                                            <div class="spinner align-center" style="display: none;" id="spinnerLoad">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                        <div class="error-screen" style="text-align: center;display: grid;margin: 0 auto;">
                                            <div tabindex="0" class="message" style="display:none">
                                                <p>An error occurred while contacting the Skybase database center.</p>
                                                <p>Third Iron support has been notified.</p>
                                            </div>
                                        </div>
                                        
                                        <button class="button " id="loadMoreButton" style="place-items: center;display: grid;margin: 0 auto;">Load More</button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    <div id="ember797" class="ember-view"></div>
                    <ul class="responsive-menu"></ul>
                </div>
            </div>
        </div>
        <?php $this->view('./components/NavDrawe');?>
    </div>
        <script src="<?=ASSETS?>js/vendor.min.js"></script>
        <script src="<?=ASSETS?>js/pubs-ui.min.js"></script>
        <script src="<?=ASSETS?>js/script.js"></script>
        <script src="<?=ASSETS?>js/el.js"></script>
    </body>

</html>