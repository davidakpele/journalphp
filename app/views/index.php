<?php $this->view("./components/Header"); ?>
<style>
.error-search:after {position: fixed;left: 600px;top: 0;bottom: 0;width: 30rem;background: rgba(255,255,255,.25);box-sizing: border-box;z-index: -1;content: '';}
</style>
<body class="ember-application">
<?php $this->view("./components/Nav"); ?>
                <div id="library-content" class="container ">
                    <div id="ember620" class="splash-panel __f1079 hide-header ember-view"><!---->
                        <div class="content" >
                            <div class="subjects-container">
                                <ul class="responsive-menu"></ul>
                                <div id="ember625" class="__fbe9a ember-view">
                                    <div>
                                        <h3 class="subjects-library-attribution">Access Provided By</h3>
                                        <!-- logo -->
                                        <?php $this->view("./components/Logo"); ?>
                                    </div>
                                </div>
                                <div class="subjects-search-container clone_result">
                                    <h3 class="subjects-search-sub-head">Find Journal By Title, Subject, or ISSN</h3>
                                    <div id="ember637" class="search-pane-container __bd7a3 subjects ember-view">
                                        <ul role="dialog" class="search-pane complete">
                                            <div id="search_result"></div>
                                            <li class="search-field-container" data-ember-action="" data-ember-action-640="640" data-ember-action-641="641">
                                                <div id="ember644" class="search-field __991a0 ember-view">
                                                    <input aria-label="Find Journal By Title, Subject, or ISSN" placeholder="Find Journal By Title, Subject, or ISSN" type="text" autocomplete="off" title="Find Journal By Title, Subject, or ISSN" id="ember650" class="hero-search ember-text-field ember-view">
                                                    <div class="icon" id="clear_icon">
                                                        <div class="magnifying-glass flaticon stroke magnifying-glass-2"></div>
                                                        <div tabindex="0" aria-label="Hit enter to clear search input or Hit tab to continue to library search result" class="clearer flaticon stroke x-2" data-ember-action="" data-ember-action-8304="8304" style="display:none"></div>
                                                        <div id="ember1178" class="__0d2b3 ember-view" style="display:none">
                                                            <div class="spinner align-right">
                                                                <div class="bounce1"></div>
                                                                <div class="bounce2"></div>
                                                                <div class="bounce3"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="responsive-menu"></ul>
                                    </div>
                                </div>
                                <div class="subjects-search-placeholder"></div>
                                <div id="ember651" class="search-pane-container __bd7a3 subjects ember-view">
                                    <ul role="dialog" class="search-pane">
                                        <li class="exit" data-ember-action="" data-ember-action-652="652"></li>
                                    </ul>
                                    <ul class="responsive-menu"></ul>
                                </div>
                                <div class="subject-holder ">
                                    <h3 tabindex="0" class="subjects-sub-head">Browse Subjects</h3>
                                    <ul id="subjects-list">
                                        <li>
                                            <div id="ember654" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/57" id="ember655" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Arts and Humanities</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember671" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/60" id="ember672" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Biological Sciences</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember674" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/62" id="ember675" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name"> Biomedical and Health Sciences</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember677" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/66" id="ember678" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Business and Economics</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember680" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/61" id="ember681" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Earth and Environmental Sciences</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember683" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/63" id="ember684" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Engineering and Technology</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember686" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/58" id="ember687" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">History</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember689" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/68" id="ember690" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Law and Legal Studies</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember692" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/64" id="ember693" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Mathematics and Statistics</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember695" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/59" id="ember696" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Philosophy and Religion</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember698" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/65" id="ember699" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Physics, Chemistry and Astronomy</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div id="ember701" class="ember-view">
                                                <a tabindex="0" href="<?=ROOT?>libraries/603/subjects/67" id="ember702" class="subjects-list-subject ember-view"> 
                                                    <span class="subjects-list-subject-name">Social Science and Behavioral Science</span>
                                                    <span class="subjects-list-subject-icon flaticon solid files"></span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="banner">
                            <div class="shadow-top"></div>
                            <div class="shadow-bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flash-messages">
            </div>
        </div>
    </div>
    <script>
        const _route="<?=$data['_token']?>"
    </script>
    <script src="<?=ASSETS?>js/script.js"></script>
</body>

</html>