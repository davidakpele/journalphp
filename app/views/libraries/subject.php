<?php $this->view('./components/Header');?>
<body id="pagetop" class="oxy-ui pubs-ui hp-page">
    <!-- Google Tag Manager SST (noscript) -->
    <noscript>
        <iframe src="https://www.analytics.rsc.org/ns.html?id=GTM-56FZ7G" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
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
                Jump to site search <img src="./oxygen/assets/icons/arrow-right-o-light.png"
                    width="24" class="ver-m" alt="">
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
        <div class="media-desktop locale-en-us" style="margin-top:20px">
            <div class="canvas">
                <div id="library-content" class="container ">
                <main class="holdings-container">
                    <div class="subject">
                        <a href="<?=ROOT?>" id="ember1122" class="subject-back-button ember-view"> 
                            <img src="<?=ASSETS?>images/change-subject-chevron-b0613c2c2576dc880a792874777e52b3.png" alt="Change Subject"> 
                            Change Subject
                        </a>
                        <?php  $url=implode('',$_REQUEST);
                                $urlParts = explode('/', $url);
                             
                            ?>
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
                            <h3 tabindex="0" class="bookcase-name" style="font-size:22px"><?=((isset($data['activate_bookshalves']) && !empty($data['activate_bookshalves']))?$data['activate_bookshalves']['category']->categories_name:'')?></h3>
                            <ul class="bookcase-bookshelf-list">
                                <li class="bookcase-bookshelf-list-item">
                                <a href="<?php echo ROOT?>libraries/603/subjects/<?php if(!empty($data['data']['subject']))echo $data['data']['subject']->subjectid.'/bookcases/'.$urlParts[5].'/?sort=title&all=1';?>"  id="ember1115" class="<?=((isset($urlParts[3]) && isset($urlParts[5]) && !isset($urlParts[7]))? 'active': '')?> ember-view" tabindex="0"><span>All Journals</span></a>
                                </li>
                                <?php if(isset($data['activate_bookshalves'])) :?>
                                    <?php if($data['activate_bookshalves']['bookcases'] !=null):?>
                                        <?php foreach($data['activate_bookshalves']['bookcases'] as $bookcasesList):?>
                                            <li class="bookcase-bookshelf-list-item">
                                                <a href="<?php echo ROOT?>libraries/<?=$data['data']['subject']->package_id?>/subjects/<?=$data['activate_bookshalves']['category']->subjectid?>/bookcases/<?=$data['activate_bookshalves']['category']->categoriesid?>/bookshelves/<?=$bookcasesList['bookshelvesid']?>/?sort=title" id="ember1119" 
                                                class="<?=((isset($urlParts[3]) && isset($urlParts[5]) && $bookcasesList['bookshelvesid']==$urlParts[7])? 'active': '')?> ember-view" tabindex="0" style="font-size:15px">
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
                    <div id="ember786" class="journals-container infinite-scroller ember-view"><!---->
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
                            <li class="bookshelf-journal-list-item">
                                <div id="ember8270" class="ember-view">
                                    <a href="/journals/libraries/search/267555?sort=title" id="ember8271" class="bookshelf-journal ember-view" tabindex="0">
                                        <div id="ember8272" class="journal-cover __771d8 ember-view">
                                            <div class="image-container">
                                                <img src="<?=ASSETS?>images/art/1960-6176.png" alt="Cover of 1895 : Revue d’Histoire du Cinéma" title="1895 : Revue d’Histoire du Cinéma">
                                            </div>
                                        </div>
                                        <div title="1895 : Revue d’Histoire du Cinéma" class="bookshelf-journal-title">1895 : Revue d’Histoire du Cinéma</div>
                                    </a>
                                </div>
                            </li>
                                <li class="bookshelf-journal-list-item">
                                    <div id="ember8273" class="ember-view">
                                        <a href="/journals/libraries/search/33246?sort=title" id="ember8274" class="bookshelf-journal ember-view" tabindex="0">
                                            <div id="ember8275" class="journal-cover __771d8 ember-view">
                                                <div class="image-container">
                                                    <img src="<?=ASSETS?>images/art/0148-2076.png" alt="Cover of 19th Century Music" title="19th Century Music">
                                                </div>
                                            </div>
                                            <div title="19th Century Music" class="bookshelf-journal-title">19th Century Music</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="bookshelf-journal-list-item">
                                    <div id="ember8276" class="ember-view">
                                        <a href="/journals/libraries/search/123236?sort=title" id="ember8277" class="bookshelf-journal ember-view" tabindex="0">
                                            <div id="ember8278" class="journal-cover __771d8 ember-view">
                                                <div class="image-container">
                                                    <img src="<?=ASSETS?>images/art/0128-5157.png" alt="Cover of 3L: Language, Linguistics, Literature" title="3L: Language, Linguistics, Literature">
                                                </div>
                                            </div>
                                            <div title="3L: Language, Linguistics, Literature" class="bookshelf-journal-title">3L: Language, Linguistics, Literature</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="bookshelf-journal-list-item">
                                    <div id="ember8279" class="ember-view">
                                        <a href="/journals/libraries/search/10663?sort=title" id="ember8280" class="bookshelf-journal ember-view" tabindex="0">
                                            <div id="ember8281" class="journal-cover __771d8 ember-view">
                                                <div class="image-container">
                                                    <img src="<?=ASSETS?>images/art/0898-9575.png" alt="Cover of a/b: Auto/Biography Studies" title="a/b: Auto/Biography Studies">
                                                </div>
                                            </div>
                                            <div title="a/b: Auto/Biography Studies" class="bookshelf-journal-title">
                                                a/b: Auto/Biography Studies</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="bookshelf-loading-indicator">
                                    <button class="load-more-button" tabindex="0">Load More</button>
                                </li>
                            </ul>
                        </div>
                    </main>
                    <div id="ember797" class="ember-view"></div>
                    <ul class="responsive-menu"></ul>
                </div>
            </div>
            <div class="flash-messages"></div>
        </div>
        <?php $this->view('./components/NavDrawe');?>
    </div>
        <script src="<?=ASSETS?>js/vendor.min.js"></script>
        <script src="<?=ASSETS?>js/pubs-ui.min.js"></script>
        <script src="<?=ASSETS?>js/script.js"></script>
    </body>

</html>