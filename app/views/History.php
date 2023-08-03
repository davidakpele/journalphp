<?php $this->view("./components/Header"); ?>

<body class="ember-application">
    <?php $this->view("./components/Nav"); ?>
    <div id="library-content" class="container ">
        <main class="holdings-container">
            <div class="subject">
                <a href="/libraries/603/subjects?sort=title" id="ember84556" class="subject-back-button ember-view">
                    <img src="//browzine-app.thirdiron.com/images/change-subject-chevron-b0613c2c2576dc880a792874777e52b3.png"
                        alt="Change Subject"> Change Subject</a>

                <h1 tabindex="0" class="subject-name">History</h1>

                <h4 tabindex="0" class="subject-bookcase-list-header">Categories</h4>
                <ul class="subject-bookcase-list">
                    <li class="subject-bookcase-list-item">
                        <a href="/journals/libraries/603/subjects/58" id="ember84557" class="active ember-view"> All
                            Journals
                        </a>
                    </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/58/bookcases/83?sort=title"
                            id="ember84558" class="ember-view">History by Time Period</a> </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/58/bookcases/82?sort=title"
                            id="ember84559" class="ember-view">History - General</a> </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/58/bookcases/84?sort=title"
                            id="ember84560" class="ember-view">History of Geographic Regions</a> </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/58/bookcases/86?sort=title"
                            id="ember84561" class="ember-view">Social History</a> </li>
                </ul>
            </div>
               <?php if($data['sideline']==true):?>
                <?php $this->view("components/SideBarMenu") ?>
            <?php endif;?>   
            <!---->
            <div id="ember3315" class="journals-container infinite-scroller ember-view"><!---->
                <div style="margin-right: 93.20000000000005px" id="ember3320"
                    class="sort-options-container __eccf5 ember-view">
                    <div class="sort-options">
                        <!---->
                        <span class="active">
                            <a aria-label="A-Z" href="/journals/libraries/603/subjects/60?sort=title" id="ember3321"
                                class="sort-control sort-by-title hide-underline active ember-view" tabindex="0"> Sort
                                <span class="show-underline">A-Z</span>
                            </a> </span>
                        /
                        <span>
                            <a aria-label="Journal Rank" href="/journals/libraries/603/subjects/60?sort=rank" id="ember3322"
                                class="sort-control sort-by-scimago ember-view" tabindex="0">
                                Journal Rank
                            </a> </span>
                    </div>
                </div>

                <ul class="bookshelf">
                    <li class="bookshelf-journal-list-item">
                        <div id="ember80997" class="ember-view"><a href="/libraries/603/journals/48580?sort=title"
                                id="ember80998" class="bookshelf-journal ember-view">
                                <div id="ember80999" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1623-5770.png"
                                            alt="Cover of  Bulletin du Centre d’Études Médiévales d’Auxerre"
                                            title=" Bulletin du Centre d’Études Médiévales d’Auxerre">
                                        <!---->
                                    </div>
                                </div>
                                <div title=" Bulletin du Centre d’Études Médiévales d’Auxerre"
                                    class="bookshelf-journal-title"> Bulletin du Centre d’Études Médiévales d’Auxerre
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81001" class="ember-view"><a href="/libraries/603/journals/40806?sort=title"
                                id="ember81002" class="bookshelf-journal ember-view">
                                <div id="ember81003" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1755-1560.png"
                                            alt="Cover of 19 : Interdisciplinary Studies in the Long Nineteenth Century"
                                            title="19 : Interdisciplinary Studies in the Long Nineteenth Century">
                                        <!---->
                                    </div>
                                </div>
                                <div title="19 : Interdisciplinary Studies in the Long Nineteenth Century"
                                    class="bookshelf-journal-title">19 : Interdisciplinary Studies in the Long
                                    Nineteenth Century</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81005" class="ember-view"><a href="/libraries/603/journals/369821?sort=title"
                                id="ember81006" class="bookshelf-journal ember-view">
                                <div id="ember81007" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2649-664X.png"
                                            alt="Cover of 20 et 21: Revue d'Histoire"
                                            title="20 et 21: Revue d'Histoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="20 et 21: Revue d'Histoire" class="bookshelf-journal-title">20 et 21: Revue
                                    d'Histoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81009" class="ember-view"><a href="/libraries/603/journals/31972?sort=title"
                                id="ember81010" class="bookshelf-journal ember-view">
                                <div id="ember81011" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2166-4072.png"
                                            alt="Cover of Ab Imperio" title="Ab Imperio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ab Imperio" class="bookshelf-journal-title">Ab Imperio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81013" class="ember-view"><a href="/libraries/603/journals/44563?sort=title"
                                id="ember81014" class="bookshelf-journal ember-view">
                                <div id="ember81015" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2157-7129.png"
                                            alt="Cover of ABO : Interactive Journal for Women in the Arts 1640-1830"
                                            title="ABO : Interactive Journal for Women in the Arts 1640-1830">
                                        <!---->
                                    </div>
                                </div>
                                <div title="ABO : Interactive Journal for Women in the Arts 1640-1830"
                                    class="bookshelf-journal-title">ABO : Interactive Journal for Women in the Arts
                                    1640-1830</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81017" class="ember-view"><a href="/libraries/603/journals/177530?sort=title"
                                id="ember81018" class="bookshelf-journal ember-view">
                                <div id="ember81019" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1712-7432.png"
                                            alt="Cover of Acadiensis : Journal of the History of the Atlantic Region / Revue d’Histoire de la Region Atlantique"
                                            title="Acadiensis : Journal of the History of the Atlantic Region / Revue d’Histoire de la Region Atlantique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acadiensis : Journal of the History of the Atlantic Region / Revue d’Histoire de la Region Atlantique"
                                    class="bookshelf-journal-title">Acadiensis : Journal of the History of the Atlantic
                                    Region / Revue d’Histoire de la Region Atlantique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81021" class="ember-view"><a href="/libraries/603/journals/17039?sort=title"
                                id="ember81022" class="bookshelf-journal ember-view">
                                <div id="ember81023" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0958-5206.png"
                                            alt="Cover of Accounting, Business &amp; Financial History"
                                            title="Accounting, Business &amp; Financial History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Accounting, Business &amp; Financial History"
                                    class="bookshelf-journal-title">Accounting, Business &amp; Financial History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81025" class="ember-view"><a href="/libraries/603/journals/4946?sort=title"
                                id="ember81026" class="bookshelf-journal ember-view">
                                <div id="ember81027" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1032-3732.png"
                                            alt="Cover of Accounting History" title="Accounting History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Accounting History" class="bookshelf-journal-title">Accounting History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81029" class="ember-view"><a href="/libraries/603/journals/34600?sort=title"
                                id="ember81030" class="bookshelf-journal ember-view">
                                <div id="ember81031" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0044-5975.png"
                                            alt="Cover of Acta Antiqua Academiae Scientiarum Hungaricae"
                                            title="Acta Antiqua Academiae Scientiarum Hungaricae">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Antiqua Academiae Scientiarum Hungaricae"
                                    class="bookshelf-journal-title">Acta Antiqua Academiae Scientiarum Hungaricae</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81033" class="ember-view"><a href="/libraries/603/journals/244108?sort=title"
                                id="ember81034" class="bookshelf-journal ember-view">
                                <div id="ember81035" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2228-2009.png"
                                            alt="Cover of Acta Baltica Historiae et Philosophiae Scientiarum"
                                            title="Acta Baltica Historiae et Philosophiae Scientiarum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Baltica Historiae et Philosophiae Scientiarum"
                                    class="bookshelf-journal-title">Acta Baltica Historiae et Philosophiae Scientiarum
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81037" class="ember-view"><a href="/libraries/603/journals/124017?sort=title"
                                id="ember81038" class="bookshelf-journal ember-view">
                                <div id="ember81039" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2064-0404.png"
                                            alt="Cover of Acta Periodica Duellatorum"
                                            title="Acta Periodica Duellatorum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Periodica Duellatorum" class="bookshelf-journal-title">Acta Periodica
                                    Duellatorum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81041" class="ember-view"><a href="/libraries/603/journals/145937?sort=title"
                                id="ember81042" class="bookshelf-journal ember-view">
                                <div id="ember81043" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0001-6829-262bb5b7-8cea-41e1-88e2-8272ad068513.png"
                                            alt="Cover of Acta Poloniae Historica" title="Acta Poloniae Historica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Poloniae Historica" class="bookshelf-journal-title">Acta Poloniae
                                    Historica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81045" class="ember-view"><a href="/libraries/603/journals/41325?sort=title"
                                id="ember81046" class="bookshelf-journal ember-view">
                                <div id="ember81047" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1983-4675.png"
                                            alt="Cover of Acta Scientiarum : Language and Culture"
                                            title="Acta Scientiarum : Language and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Scientiarum : Language and Culture" class="bookshelf-journal-title">
                                    Acta Scientiarum : Language and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81049" class="ember-view"><a href="/libraries/603/journals/188058?sort=title"
                                id="ember81050" class="bookshelf-journal ember-view">
                                <div id="ember81051" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0208-6050-cbf67636-cccd-4fb3-a67d-20a6d1de8cb2.png"
                                            alt="Cover of Acta Universitatis Lodziensis : Folia Historica"
                                            title="Acta Universitatis Lodziensis : Folia Historica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Universitatis Lodziensis : Folia Historica"
                                    class="bookshelf-journal-title">Acta Universitatis Lodziensis : Folia Historica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81053" class="ember-view"><a href="/libraries/603/journals/312504?sort=title"
                                id="ember81054" class="bookshelf-journal ember-view">
                                <div id="ember81055" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2649-7263.png"
                                            alt="Cover of Aden : Paul Nizan et les Années Trente"
                                            title="Aden : Paul Nizan et les Années Trente">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aden : Paul Nizan et les Années Trente" class="bookshelf-journal-title">Aden
                                    : Paul Nizan et les Années Trente</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81057" class="ember-view"><a href="/libraries/603/journals/41977?sort=title"
                                id="ember81058" class="bookshelf-journal ember-view">
                                <div id="ember81059" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0002-0397.png"
                                            alt="Cover of Africa Spectrum" title="Africa Spectrum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Africa Spectrum" class="bookshelf-journal-title">Africa Spectrum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81061" class="ember-view"><a href="/libraries/603/journals/17727?sort=title"
                                id="ember81062" class="bookshelf-journal ember-view">
                                <div id="ember81063" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1753-2523.png"
                                            alt="Cover of African Historical Review" title="African Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="African Historical Review" class="bookshelf-journal-title">African
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81065" class="ember-view"><a href="/libraries/603/journals/398509?sort=title"
                                id="ember81066" class="bookshelf-journal ember-view">
                                <div id="ember81067" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2663-4589.png"
                                            alt="Cover of African Journal of Inter/Multidisciplinary Studies"
                                            title="African Journal of Inter/Multidisciplinary Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="African Journal of Inter/Multidisciplinary Studies"
                                    class="bookshelf-journal-title">African Journal of Inter/Multidisciplinary Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81069" class="ember-view"><a href="/libraries/603/journals/41979?sort=title"
                                id="ember81070" class="bookshelf-journal ember-view">
                                <div id="ember81071" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1764-1977.png"
                                            alt="Cover of Afrique &amp; Histoire" title="Afrique &amp; Histoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Afrique &amp; Histoire" class="bookshelf-journal-title">Afrique &amp;
                                    Histoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81073" class="ember-view"><a href="/libraries/603/journals/41983?sort=title"
                                id="ember81074" class="bookshelf-journal ember-view">
                                <div id="ember81075" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2108-6796.png"
                                            alt="Cover of Afriques : Debats" title="Afriques : Debats">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Afriques : Debats" class="bookshelf-journal-title">Afriques : Debats</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81077" class="ember-view"><a href="/libraries/603/journals/34562?sort=title"
                                id="ember81078" class="bookshelf-journal ember-view">
                                <div id="ember81079" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1533-8290-3cc15c08-58f8-4f62-b803-be478d485221.png"
                                            alt="Cover of Agricultural History" title="Agricultural History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Agricultural History" class="bookshelf-journal-title">Agricultural History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81081" class="ember-view"><a href="/libraries/603/journals/105975?sort=title"
                                id="ember81082" class="bookshelf-journal ember-view">
                                <div id="ember81083" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1068-1051-4d25f71f-7c95-48a7-81c2-c7faf6e41c90.png"
                                            alt="Cover of Al Usur al Wusta : Bulletin of Middle East Medievalists"
                                            title="Al Usur al Wusta : Bulletin of Middle East Medievalists">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al Usur al Wusta : Bulletin of Middle East Medievalists"
                                    class="bookshelf-journal-title">Al Usur al Wusta : Bulletin of Middle East
                                    Medievalists</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81085" class="ember-view"><a href="/libraries/603/journals/31971?sort=title"
                                id="ember81086" class="bookshelf-journal ember-view">
                                <div id="ember81087" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0002-4341.png"
                                            alt="Cover of Alabama Review" title="Alabama Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Alabama Review" class="bookshelf-journal-title">Alabama Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81089" class="ember-view"><a href="/libraries/603/journals/325824?sort=title"
                                id="ember81090" class="bookshelf-journal ember-view">
                                <div id="ember81091" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2085-627X.png"
                                            alt="Cover of Al-Ahwal: Jurnal Hukum Keluarga Islam"
                                            title="Al-Ahwal: Jurnal Hukum Keluarga Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Ahwal: Jurnal Hukum Keluarga Islam" class="bookshelf-journal-title">
                                    Al-Ahwal: Jurnal Hukum Keluarga Islam</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81093" class="ember-view"><a href="/libraries/603/journals/244602?sort=title"
                                id="ember81094" class="bookshelf-journal ember-view">
                                <div id="ember81095" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1693-9867.png"
                                            alt="Cover of Al-A'raf: Jurnal Pemikiran Islam dan Filsafat"
                                            title="Al-A'raf: Jurnal Pemikiran Islam dan Filsafat">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-A'raf: Jurnal Pemikiran Islam dan Filsafat"
                                    class="bookshelf-journal-title">Al-A'raf: Jurnal Pemikiran Islam dan Filsafat</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81097" class="ember-view"><a href="/libraries/603/journals/33339?sort=title"
                                id="ember81098" class="bookshelf-journal ember-view">
                                <div id="ember81099" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1565-1525.png"
                                            alt="Cover of Aleph: Historical Studies in Science and Judaism"
                                            title="Aleph: Historical Studies in Science and Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aleph: Historical Studies in Science and Judaism"
                                    class="bookshelf-journal-title">Aleph: Historical Studies in Science and Judaism
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81101" class="ember-view"><a href="/libraries/603/journals/123721?sort=title"
                                id="ember81102" class="bookshelf-journal ember-view">
                                <div id="ember81103" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2236-4633-2dbbf443-dd45-4b07-b106-14267f723830.png"
                                            alt="Cover of Almanack" title="Almanack">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Almanack" class="bookshelf-journal-title">Almanack</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81105" class="ember-view"><a href="/libraries/603/journals/17470?sort=title"
                                id="ember81106" class="bookshelf-journal ember-view">
                                <div id="ember81107" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0950-3110.png"
                                            alt="Cover of Al-Masaq" title="Al-Masaq">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Masaq" class="bookshelf-journal-title">Al-Masaq</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81109" class="ember-view"><a href="/libraries/603/journals/37477?sort=title"
                                id="ember81110" class="bookshelf-journal ember-view">
                                <div id="ember81111" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0211-3589.png"
                                            alt="Cover of Al-Qantara : Revista de Estudios Arabes"
                                            title="Al-Qantara : Revista de Estudios Arabes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Qantara : Revista de Estudios Arabes" class="bookshelf-journal-title">
                                    Al-Qantara : Revista de Estudios Arabes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81113" class="ember-view"><a href="/libraries/603/journals/42764?sort=title"
                                id="ember81114" class="bookshelf-journal ember-view">
                                <div id="ember81115" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1412-0534.png"
                                            alt="Cover of Al-Ulum" title="Al-Ulum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Ulum" class="bookshelf-journal-title">Al-Ulum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81117" class="ember-view"><a href="/libraries/603/journals/36374?sort=title"
                                id="ember81118" class="bookshelf-journal ember-view">
                                <div id="ember81119" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0002-6980.png"
                                            alt="Cover of Ambix" title="Ambix">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ambix" class="bookshelf-journal-title">Ambix</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81121" class="ember-view"><a href="/libraries/603/journals/42823?sort=title"
                                id="ember81122" class="bookshelf-journal ember-view">
                                <div id="ember81123" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1405-2253.png"
                                            alt="Cover of America Latina en la Historia Economica"
                                            title="America Latina en la Historia Economica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="America Latina en la Historia Economica" class="bookshelf-journal-title">
                                    America Latina en la Historia Economica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81125" class="ember-view"><a href="/libraries/603/journals/42826?sort=title"
                                id="ember81126" class="bookshelf-journal ember-view">
                                <div id="ember81127" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1130-2887.png"
                                            alt="Cover of América Latina Hoy" title="América Latina Hoy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="América Latina Hoy" class="bookshelf-journal-title">América Latina Hoy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81129" class="ember-view"><a href="/libraries/603/journals/15604?sort=title"
                                id="ember81130" class="bookshelf-journal ember-view">
                                <div id="ember81131" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1474-3892.png"
                                            alt="Cover of American Communist History"
                                            title="American Communist History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Communist History" class="bookshelf-journal-title">American
                                    Communist History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81133" class="ember-view"><a href="/libraries/603/journals/30933?sort=title"
                                id="ember81134" class="bookshelf-journal ember-view">
                                <div id="ember81135" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0002-8762.png"
                                            alt="Cover of The American Historical Review"
                                            title="The American Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The American Historical Review" class="bookshelf-journal-title">The American
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81137" class="ember-view"><a href="/libraries/603/journals/10811?sort=title"
                                id="ember81138" class="bookshelf-journal ember-view">
                                <div id="ember81139" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0164-0178.png"
                                            alt="Cover of American Jewish History" title="American Jewish History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Jewish History" class="bookshelf-journal-title">American Jewish
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81141" class="ember-view"><a href="/libraries/603/journals/16674?sort=title"
                                id="ember81142" class="bookshelf-journal ember-view">
                                <div id="ember81143" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1466-4658.png"
                                            alt="Cover of American Nineteenth Century History"
                                            title="American Nineteenth Century History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Nineteenth Century History" class="bookshelf-journal-title">
                                    American Nineteenth Century History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81145" class="ember-view"><a href="/libraries/603/journals/33450?sort=title"
                                id="ember81146" class="bookshelf-journal ember-view">
                                <div id="ember81147" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2161-1580.png"
                                            alt="Cover of American Political Thought"
                                            title="American Political Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Political Thought" class="bookshelf-journal-title">American
                                    Political Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81149" class="ember-view"><a href="/libraries/603/journals/10805?sort=title"
                                id="ember81150" class="bookshelf-journal ember-view">
                                <div id="ember81151" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-0678.png"
                                            alt="Cover of American Quarterly" title="American Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Quarterly" class="bookshelf-journal-title">American Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81153" class="ember-view"><a href="/libraries/603/journals/10941?sort=title"
                                id="ember81154" class="bookshelf-journal ember-view">
                                <div id="ember81155" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0026-3079.png"
                                            alt="Cover of American Studies" title="American Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Studies" class="bookshelf-journal-title">American Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81157" class="ember-view"><a href="/libraries/603/journals/10734?sort=title"
                                id="ember81158" class="bookshelf-journal ember-view">
                                <div id="ember81159" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-1615.png"
                                            alt="Cover of The Americas" title="The Americas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Americas" class="bookshelf-journal-title">The Americas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81161" class="ember-view"><a href="/libraries/603/journals/43332?sort=title"
                                id="ember81162" class="bookshelf-journal ember-view">
                                <div id="ember81163" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1764-7193.png"
                                            alt="Cover of Amnis" title="Amnis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Amnis" class="bookshelf-journal-title">Amnis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81165" class="ember-view"><a href="/libraries/603/journals/43370?sort=title"
                                id="ember81166" class="bookshelf-journal ember-view">
                                <div id="ember81167" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0101-4714.png"
                                            alt="Cover of Anais do Museu Paulista: Historia e Cultura Material"
                                            title="Anais do Museu Paulista: Historia e Cultura Material">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anais do Museu Paulista: Historia e Cultura Material"
                                    class="bookshelf-journal-title">Anais do Museu Paulista: Historia e Cultura Material
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81169" class="ember-view"><a href="/libraries/603/journals/469849?sort=title"
                                id="ember81170" class="bookshelf-journal ember-view">
                                <div id="ember81171" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1853-1555-b3a904b9-701c-4e1d-be6d-c6b68b049223.png"
                                            alt="Cover of Anales de Historia Antigua, Medieval y Moderna"
                                            title="Anales de Historia Antigua, Medieval y Moderna">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anales de Historia Antigua, Medieval y Moderna"
                                    class="bookshelf-journal-title">Anales de Historia Antigua, Medieval y Moderna</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81173" class="ember-view"><a href="/libraries/603/journals/43444?sort=title"
                                id="ember81174" class="bookshelf-journal ember-view">
                                <div id="ember81175" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1330-0598.png"
                                            alt="Cover of Anali Zavoda za Povijesne Znanosti Hrvatske Akademije Znanosti i Umjetnosti u Dubrovniku"
                                            title="Anali Zavoda za Povijesne Znanosti Hrvatske Akademije Znanosti i Umjetnosti u Dubrovniku">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anali Zavoda za Povijesne Znanosti Hrvatske Akademije Znanosti i Umjetnosti u Dubrovniku"
                                    class="bookshelf-journal-title">Anali Zavoda za Povijesne Znanosti Hrvatske
                                    Akademije Znanosti i Umjetnosti u Dubrovniku</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81177" class="ember-view"><a href="/libraries/603/journals/43446?sort=title"
                                id="ember81178" class="bookshelf-journal ember-view">
                                <div id="ember81179" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-2573.png"
                                            alt="Cover of Análise Social" title="Análise Social">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Análise Social" class="bookshelf-journal-title">Análise Social</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81181" class="ember-view"><a href="/libraries/603/journals/43483?sort=title"
                                id="ember81182" class="bookshelf-journal ember-view">
                                <div id="ember81183" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1130-3964-30ca3d71-58ab-4413-b2fc-3ccfad151d42.png"
                                            alt="Cover of Anaquel de Estudios Árabes"
                                            title="Anaquel de Estudios Árabes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anaquel de Estudios Árabes" class="bookshelf-journal-title">Anaquel de
                                    Estudios Árabes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81185" class="ember-view"><a href="/libraries/603/journals/284270?sort=title"
                                id="ember81186" class="bookshelf-journal ember-view">
                                <div id="ember81187" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2392-862X.png"
                                            alt="Cover of Anastasis Research in Medieval Culture and Art"
                                            title="Anastasis Research in Medieval Culture and Art">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anastasis Research in Medieval Culture and Art"
                                    class="bookshelf-journal-title">Anastasis Research in Medieval Culture and Art</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81189" class="ember-view"><a href="/libraries/603/journals/19690?sort=title"
                                id="ember81190" class="bookshelf-journal ember-view">
                                <div id="ember81191" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0066-1546.png"
                                            alt="Cover of Anatolian Studies" title="Anatolian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anatolian Studies" class="bookshelf-journal-title">Anatolian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81193" class="ember-view"><a href="/libraries/603/journals/37941?sort=title"
                                id="ember81194" class="bookshelf-journal ember-view">
                                <div id="ember81195" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2042-5937.png"
                                            alt="Cover of Ancient Asia" title="Ancient Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ancient Asia" class="bookshelf-journal-title">Ancient Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81197" class="ember-view"><a href="/libraries/603/journals/9917?sort=title"
                                id="ember81198" class="bookshelf-journal ember-view">
                                <div id="ember81199" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0929-077X.png"
                                            alt="Cover of Ancient Civilizations from Scythia to Siberia"
                                            title="Ancient Civilizations from Scythia to Siberia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ancient Civilizations from Scythia to Siberia"
                                    class="bookshelf-journal-title">Ancient Civilizations from Scythia to Siberia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81201" class="ember-view"><a href="/libraries/603/journals/19085?sort=title"
                                id="ember81202" class="bookshelf-journal ember-view">
                                <div id="ember81203" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0263-6751.png"
                                            alt="Cover of Anglo-Saxon England" title="Anglo-Saxon England">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anglo-Saxon England" class="bookshelf-journal-title">Anglo-Saxon England
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81205" class="ember-view"><a href="/libraries/603/journals/139465?sort=title"
                                id="ember81206" class="bookshelf-journal ember-view">
                                <div id="ember81207" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0395-2649.png"
                                            alt="Cover of Annales : Histoire, Sciences Sociales"
                                            title="Annales : Histoire, Sciences Sociales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales : Histoire, Sciences Sociales" class="bookshelf-journal-title">
                                    Annales : Histoire, Sciences Sociales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81209" class="ember-view"><a href="/libraries/603/journals/43635?sort=title"
                                id="ember81210" class="bookshelf-journal ember-view">
                                <div id="ember81211" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0399-0826.png"
                                            alt="Cover of Annales de Bretagne et des Pays de l'Ouest"
                                            title="Annales de Bretagne et des Pays de l'Ouest">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales de Bretagne et des Pays de l'Ouest" class="bookshelf-journal-title">
                                    Annales de Bretagne et des Pays de l'Ouest</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81213" class="ember-view"><a href="/libraries/603/journals/43731?sort=title"
                                id="ember81214" class="bookshelf-journal ember-view">
                                <div id="ember81215" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2261-4427.png"
                                            alt="Cover of Annales de Normandie" title="Annales de Normandie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales de Normandie" class="bookshelf-journal-title">Annales de Normandie
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81217" class="ember-view"><a href="/libraries/603/journals/263695?sort=title"
                                id="ember81218" class="bookshelf-journal ember-view">
                                <div id="ember81219" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2398-5682.png"
                                            alt="Cover of Annales: Histoire, Sciences Sociales (English Edition)"
                                            title="Annales: Histoire, Sciences Sociales (English Edition)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales: Histoire, Sciences Sociales (English Edition)"
                                    class="bookshelf-journal-title">Annales: Histoire, Sciences Sociales (English
                                    Edition)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81221" class="ember-view"><a href="/libraries/603/journals/43801?sort=title"
                                id="ember81222" class="bookshelf-journal ember-view">
                                <div id="ember81223" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-4436.png"
                                            alt="Cover of Annales Historiques de la Révolution Française"
                                            title="Annales Historiques de la Révolution Française">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales Historiques de la Révolution Française"
                                    class="bookshelf-journal-title">Annales Historiques de la Révolution Française</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81225" class="ember-view"><a href="/libraries/603/journals/43805?sort=title"
                                id="ember81226" class="bookshelf-journal ember-view">
                                <div id="ember81227" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2272-8023.png"
                                            alt="Cover of Annales Historiques de l’Électricité"
                                            title="Annales Historiques de l’Électricité">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales Historiques de l’Électricité" class="bookshelf-journal-title">
                                    Annales Historiques de l’Électricité</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81229" class="ember-view"><a href="/libraries/603/journals/40217?sort=title"
                                id="ember81230" class="bookshelf-journal ember-view">
                                <div id="ember81231" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2031-5929.png"
                                            alt="Cover of Annali di Scienze Religiose"
                                            title="Annali di Scienze Religiose">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annali di Scienze Religiose" class="bookshelf-journal-title">Annali di
                                    Scienze Religiose</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81233" class="ember-view"><a href="/libraries/603/journals/310462?sort=title"
                                id="ember81234" class="bookshelf-journal ember-view">
                                <div id="ember81235" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2468-5631-c6de9b38-fa83-4820-925c-da7929d9d490.png"
                                            alt="Cover of Annali Sezione Orientale" title="Annali Sezione Orientale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annali Sezione Orientale" class="bookshelf-journal-title">Annali Sezione
                                    Orientale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81239" class="ember-view"><a href="/libraries/603/journals/16864?sort=title"
                                id="ember81240" class="bookshelf-journal ember-view">
                                <div id="ember81241" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-3790.png"
                                            alt="Cover of Annals of Science" title="Annals of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annals of Science" class="bookshelf-journal-title">Annals of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81243" class="ember-view"><a href="/libraries/603/journals/32636?sort=title"
                                id="ember81244" class="bookshelf-journal ember-view">
                                <div id="ember81245" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1613-0421.png"
                                            alt="Cover of Antike und Abendland" title="Antike und Abendland">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Antike und Abendland" class="bookshelf-journal-title">Antike und Abendland
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81247" class="ember-view"><a href="/libraries/603/journals/44468?sort=title"
                                id="ember81248" class="bookshelf-journal ember-view">
                                <div id="ember81249" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1984-3356.png"
                                            alt="Cover of Antíteses" title="Antíteses">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Antíteses" class="bookshelf-journal-title">Antíteses</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81251" class="ember-view"><a href="/libraries/603/journals/44498?sort=title"
                                id="ember81252" class="bookshelf-journal ember-view">
                                <div id="ember81253" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0120-2456.png"
                                            alt="Cover of Anuario Colombiano de Historia Social y de la Cultura"
                                            title="Anuario Colombiano de Historia Social y de la Cultura">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anuario Colombiano de Historia Social y de la Cultura"
                                    class="bookshelf-journal-title">Anuario Colombiano de Historia Social y de la
                                    Cultura</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81255" class="ember-view"><a href="/libraries/603/journals/37474?sort=title"
                                id="ember81256" class="bookshelf-journal ember-view">
                                <div id="ember81257" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0210-5810.png"
                                            alt="Cover of Anuario de Estudios Americanos"
                                            title="Anuario de Estudios Americanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anuario de Estudios Americanos" class="bookshelf-journal-title">Anuario de
                                    Estudios Americanos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81259" class="ember-view"><a href="/libraries/603/journals/44507?sort=title"
                                id="ember81260" class="bookshelf-journal ember-view">
                                <div id="ember81261" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0122-2066.png"
                                            alt="Cover of Anuario de Historia Regional y de las Fronteras"
                                            title="Anuario de Historia Regional y de las Fronteras">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anuario de Historia Regional y de las Fronteras"
                                    class="bookshelf-journal-title">Anuario de Historia Regional y de las Fronteras
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81263" class="ember-view"><a href="/libraries/603/journals/44508?sort=title"
                                id="ember81264" class="bookshelf-journal ember-view">
                                <div id="ember81265" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1853-7049.png"
                                            alt="Cover of Anuario de la Escuela de Historia Virtual"
                                            title="Anuario de la Escuela de Historia Virtual">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anuario de la Escuela de Historia Virtual" class="bookshelf-journal-title">
                                    Anuario de la Escuela de Historia Virtual</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81267" class="ember-view"><a href="/libraries/603/journals/44519?sort=title"
                                id="ember81268" class="bookshelf-journal ember-view">
                                <div id="ember81269" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1668-950X.png"
                                            alt="Cover of Anuario del Instituto de Historia Argentina"
                                            title="Anuario del Instituto de Historia Argentina">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anuario del Instituto de Historia Argentina"
                                    class="bookshelf-journal-title">Anuario del Instituto de Historia Argentina</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81271" class="ember-view"><a href="/libraries/603/journals/19073?sort=title"
                                id="ember81272" class="bookshelf-journal ember-view">
                                <div id="ember81273" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0957-4239.png"
                                            alt="Cover of Arabic Sciences and Philosophy"
                                            title="Arabic Sciences and Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arabic Sciences and Philosophy" class="bookshelf-journal-title">Arabic
                                    Sciences and Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81275" class="ember-view"><a href="/libraries/603/journals/9897?sort=title"
                                id="ember81276" class="bookshelf-journal ember-view">
                                <div id="ember81277" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0570-5398.png"
                                            alt="Cover of Arabica" title="Arabica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arabica" class="bookshelf-journal-title">Arabica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81279" class="ember-view"><a href="/libraries/603/journals/131390?sort=title"
                                id="ember81280" class="bookshelf-journal ember-view">
                                <div id="ember81281" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0801-7778-ff604bc3-2459-4de9-8105-7dd306f17407.png"
                                            alt="Cover of Arbeiderhistorie" title="Arbeiderhistorie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arbeiderhistorie" class="bookshelf-journal-title">Arbeiderhistorie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81283" class="ember-view"><a href="/libraries/603/journals/307658?sort=title"
                                id="ember81284" class="bookshelf-journal ember-view">
                                <div id="ember81285" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2365984X-af501fd2-2239-4637-8377-de3d0a402ed4.png"
                                            alt="Cover of Arbeit : Zeitschrift für Arbeitsforschung, Arbeitsgestaltung und Arbeitspolitik"
                                            title="Arbeit : Zeitschrift für Arbeitsforschung, Arbeitsgestaltung und Arbeitspolitik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arbeit : Zeitschrift für Arbeitsforschung, Arbeitsgestaltung und Arbeitspolitik"
                                    class="bookshelf-journal-title">Arbeit : Zeitschrift für Arbeitsforschung,
                                    Arbeitsgestaltung und Arbeitspolitik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81287" class="ember-view"><a href="/libraries/603/journals/32645?sort=title"
                                id="ember81288" class="bookshelf-journal ember-view">
                                <div id="ember81289" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1868-8888.png"
                                            alt="Cover of Archiv für Religionsgeschichte"
                                            title="Archiv für Religionsgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archiv für Religionsgeschichte" class="bookshelf-journal-title">Archiv für
                                    Religionsgeschichte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81291" class="ember-view"><a href="/libraries/603/journals/35081?sort=title"
                                id="ember81292" class="bookshelf-journal ember-view">
                                <div id="ember81293" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-9519.png"
                                            alt="Cover of Archive for History of Exact Sciences"
                                            title="Archive for History of Exact Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archive for History of Exact Sciences" class="bookshelf-journal-title">
                                    Archive for History of Exact Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81295" class="ember-view"><a href="/libraries/603/journals/36189?sort=title"
                                id="ember81296" class="bookshelf-journal ember-view">
                                <div id="ember81297" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2109-9529.png"
                                            alt="Cover of Archives d'histoire doctrinale et littéraire du Moyen Âge"
                                            title="Archives d'histoire doctrinale et littéraire du Moyen Âge">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives d'histoire doctrinale et littéraire du Moyen Âge"
                                    class="bookshelf-journal-title">Archives d'histoire doctrinale et littéraire du
                                    Moyen Âge</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81299" class="ember-view"><a href="/libraries/603/journals/40221?sort=title"
                                id="ember81300" class="bookshelf-journal ember-view">
                                <div id="ember81301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0003-9810.png"
                                            alt="Cover of Archives Internationales d'Histoire des Sciences"
                                            title="Archives Internationales d'Histoire des Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives Internationales d'Histoire des Sciences"
                                    class="bookshelf-journal-title">Archives Internationales d'Histoire des Sciences
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81303" class="ember-view"><a href="/libraries/603/journals/270221?sort=title"
                                id="ember81304" class="bookshelf-journal ember-view">
                                <div id="ember81305" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1965-0531.png"
                                            alt="Cover of Archives Juives : Revue d'Histoire des Juifs de France"
                                            title="Archives Juives : Revue d'Histoire des Juifs de France">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives Juives : Revue d'Histoire des Juifs de France"
                                    class="bookshelf-journal-title">Archives Juives : Revue d'Histoire des Juifs de
                                    France</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81307" class="ember-view"><a href="/libraries/603/journals/38812?sort=title"
                                id="ember81308" class="bookshelf-journal ember-view">
                                <div id="ember81309" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0260-9541.png"
                                            alt="Cover of Archives of Natural History"
                                            title="Archives of Natural History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives of Natural History" class="bookshelf-journal-title">Archives of
                                    Natural History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81311" class="ember-view"><a href="/libraries/603/journals/44979?sort=title"
                                id="ember81312" class="bookshelf-journal ember-view">
                                <div id="ember81313" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1134-6396-3b0729f7-1972-4e26-b329-6144cd10d8fd.png"
                                            alt="Cover of Arenal : Revista de Historia de las Mujeres"
                                            title="Arenal : Revista de Historia de las Mujeres">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arenal : Revista de Historia de las Mujeres"
                                    class="bookshelf-journal-title">Arenal : Revista de Historia de las Mujeres</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81315" class="ember-view"><a href="/libraries/603/journals/10795?sort=title"
                                id="ember81316" class="bookshelf-journal ember-view">
                                <div id="ember81317" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0004-0975.png"
                                            alt="Cover of Arethusa" title="Arethusa">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arethusa" class="bookshelf-journal-title">Arethusa</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81319" class="ember-view"><a href="/libraries/603/journals/9896?sort=title"
                                id="ember81320" class="bookshelf-journal ember-view">
                                <div id="ember81321" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1567-9896.png"
                                            alt="Cover of Aries" title="Aries">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aries" class="bookshelf-journal-title">Aries</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81323" class="ember-view"><a href="/libraries/603/journals/36394?sort=title"
                                id="ember81324" class="bookshelf-journal ember-view">
                                <div id="ember81325" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1741-6124.png"
                                            alt="Cover of Arms &amp; Armour" title="Arms &amp; Armour">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Arms &amp; Armour" class="bookshelf-journal-title">Arms &amp; Armour</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81327" class="ember-view"><a href="/libraries/603/journals/37482?sort=title"
                                id="ember81328" class="bookshelf-journal ember-view">
                                <div id="ember81329" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0210-4466.png"
                                            alt="Cover of Asclepio" title="Asclepio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Asclepio" class="bookshelf-journal-title">Asclepio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81331" class="ember-view"><a href="/libraries/603/journals/45530?sort=title"
                                id="ember81332" class="bookshelf-journal ember-view">
                                <div id="ember81333" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2287-9811-f3928f71-0191-42a5-8feb-bbf23a6f7aa5.png"
                                            alt="Cover of Asian Review of World Histories"
                                            title="Asian Review of World Histories">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Asian Review of World Histories" class="bookshelf-journal-title">Asian
                                    Review of World Histories</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81335" class="ember-view"><a href="/libraries/603/journals/39881?sort=title"
                                id="ember81336" class="bookshelf-journal ember-view">
                                <div id="ember81337" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1933-2882.png"
                                            alt="Cover of Aspasia" title="Aspasia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aspasia" class="bookshelf-journal-title">Aspasia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81339" class="ember-view"><a href="/libraries/603/journals/231313?sort=title"
                                id="ember81340" class="bookshelf-journal ember-view">
                                <div id="ember81341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0718-0462-77bc5547-74ec-4f2e-ba61-fe54bdc72bb9.png"
                                            alt="Cover of Atenea" title="Atenea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Atenea" class="bookshelf-journal-title">Atenea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81343" class="ember-view"><a href="/libraries/603/journals/158748?sort=title"
                                id="ember81344" class="bookshelf-journal ember-view">
                                <div id="ember81345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1715-0698.png"
                                            alt="Cover of Atlantis : Critical Studies in Gender, Culture, and Social Justice"
                                            title="Atlantis : Critical Studies in Gender, Culture, and Social Justice">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Atlantis : Critical Studies in Gender, Culture, and Social Justice"
                                    class="bookshelf-journal-title">Atlantis : Critical Studies in Gender, Culture, and
                                    Social Justice</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81347" class="ember-view"><a href="/libraries/603/journals/11105?sort=title"
                                id="ember81348" class="bookshelf-journal ember-view">
                                <div id="ember81349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0004-8992.png"
                                            alt="Cover of Australian Economic History Review"
                                            title="Australian Economic History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australian Economic History Review" class="bookshelf-journal-title">
                                    Australian Economic History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81351" class="ember-view"><a href="/libraries/603/journals/17820?sort=title"
                                id="ember81352" class="bookshelf-journal ember-view">
                                <div id="ember81353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1031-461X.png"
                                            alt="Cover of Australian Historical Studies"
                                            title="Australian Historical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australian Historical Studies" class="bookshelf-journal-title">Australian
                                    Historical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81355" class="ember-view"><a href="/libraries/603/journals/11358?sort=title"
                                id="ember81356" class="bookshelf-journal ember-view">
                                <div id="ember81357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0004-9522.png"
                                            alt="Cover of Australian Journal of Politics &amp; History"
                                            title="Australian Journal of Politics &amp; History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australian Journal of Politics &amp; History"
                                    class="bookshelf-journal-title">Australian Journal of Politics &amp; History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81359" class="ember-view"><a href="/libraries/603/journals/19786?sort=title"
                                id="ember81360" class="bookshelf-journal ember-view">
                                <div id="ember81361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0067-2378.png"
                                            alt="Cover of Austrian History Yearbook" title="Austrian History Yearbook">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Austrian History Yearbook" class="bookshelf-journal-title">Austrian History
                                    Yearbook</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81363" class="ember-view"><a href="/libraries/603/journals/160031?sort=title"
                                id="ember81364" class="bookshelf-journal ember-view">
                                <div id="ember81365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1514-3899-ced27e44-c304-4346-8309-6c00be706921.png"
                                            alt="Cover of Avances del Cesor" title="Avances del Cesor">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Avances del Cesor" class="bookshelf-journal-title">Avances del Cesor</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81367" class="ember-view"><a href="/libraries/603/journals/46243?sort=title"
                                id="ember81368" class="bookshelf-journal ember-view">
                                <div id="ember81369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0350-7653.png"
                                            alt="Cover of Balcanica" title="Balcanica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Balcanica" class="bookshelf-journal-title">Balcanica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81371" class="ember-view"><a href="/libraries/603/journals/321609?sort=title"
                                id="ember81372" class="bookshelf-journal ember-view">
                                <div id="ember81373" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2468-9246-02720ce5-c94c-42e0-a836-6d2ff365660e.webp"
                                            alt="Cover of Bamboo and Silk" title="Bamboo and Silk">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bamboo and Silk" class="bookshelf-journal-title">Bamboo and Silk</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81375" class="ember-view"><a href="/libraries/603/journals/46312?sort=title"
                                id="ember81376" class="bookshelf-journal ember-view">
                                <div id="ember81377" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2198-3534.png"
                                            alt="Cover of Bandung : Journal of the Global South"
                                            title="Bandung : Journal of the Global South">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bandung : Journal of the Global South" class="bookshelf-journal-title">
                                    Bandung : Journal of the Global South</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81379" class="ember-view"><a href="/libraries/603/journals/46665?sort=title"
                                id="ember81380" class="bookshelf-journal ember-view">
                                <div id="ember81381" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1419-0222.png"
                                            alt="Cover of Belvedere Meridionale" title="Belvedere Meridionale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Belvedere Meridionale" class="bookshelf-journal-title">Belvedere Meridionale
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81383" class="ember-view"><a href="/libraries/603/journals/18054?sort=title"
                                id="ember81384" class="bookshelf-journal ember-view">
                                <div id="ember81385" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0080-4606.png"
                                            alt="Cover of Biographical Memoirs of Fellows of the Royal Society"
                                            title="Biographical Memoirs of Fellows of the Royal Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biographical Memoirs of Fellows of the Royal Society"
                                    class="bookshelf-journal-title">Biographical Memoirs of Fellows of the Royal Society
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81387" class="ember-view"><a href="/libraries/603/journals/47146?sort=title"
                                id="ember81388" class="bookshelf-journal ember-view">
                                <div id="ember81389" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1643-0700-aec96c07-dd23-4e04-aff6-ad241bc06a7f.png"
                                            alt="Cover of Biuletyn Szadkowski" title="Biuletyn Szadkowski">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biuletyn Szadkowski" class="bookshelf-journal-title">Biuletyn Szadkowski
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81391" class="ember-view"><a href="/libraries/603/journals/46902?sort=title"
                                id="ember81392" class="bookshelf-journal ember-view">
                                <div id="ember81393" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0165-0505.png"
                                            alt="Cover of BMGN: Low Countries Historical Review"
                                            title="BMGN: Low Countries Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="BMGN: Low Countries Historical Review" class="bookshelf-journal-title">BMGN:
                                    Low Countries Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81395" class="ember-view"><a href="/libraries/603/journals/133154?sort=title"
                                id="ember81396" class="bookshelf-journal ember-view">
                                <div id="ember81397" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1981-8122.png"
                                            alt="Cover of Boletim do Museu Paraense Emilio Goeldi. Ciencias Humanas"
                                            title="Boletim do Museu Paraense Emilio Goeldi. Ciencias Humanas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Boletim do Museu Paraense Emilio Goeldi. Ciencias Humanas"
                                    class="bookshelf-journal-title">Boletim do Museu Paraense Emilio Goeldi. Ciencias
                                    Humanas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81399" class="ember-view"><a href="/libraries/603/journals/10708?sort=title"
                                id="ember81400" class="bookshelf-journal ember-view">
                                <div id="ember81401" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1098-7371.png"
                                            alt="Cover of Book History" title="Book History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Book History" class="bookshelf-journal-title">Book History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81403" class="ember-view"><a href="/libraries/603/journals/33433?sort=title"
                                id="ember81404" class="bookshelf-journal ember-view">
                                <div id="ember81405" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2153-8018.png"
                                            alt="Cover of Boom: A Journal of California"
                                            title="Boom: A Journal of California">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Boom: A Journal of California" class="bookshelf-journal-title">Boom: A
                                    Journal of California</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81407" class="ember-view"><a href="/libraries/603/journals/38826?sort=title"
                                id="ember81408" class="bookshelf-journal ember-view">
                                <div id="ember81409" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2043-8567.png"
                                            alt="Cover of Britain and the World" title="Britain and the World">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Britain and the World" class="bookshelf-journal-title">Britain and the World
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81411" class="ember-view"><a href="/libraries/603/journals/367985?sort=title"
                                id="ember81412" class="bookshelf-journal ember-view">
                                <div id="ember81413" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2637-5494.png"
                                            alt="Cover of British Journal for the History of Mathematics"
                                            title="British Journal for the History of Mathematics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="British Journal for the History of Mathematics"
                                    class="bookshelf-journal-title">British Journal for the History of Mathematics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81415" class="ember-view"><a href="/libraries/603/journals/19050?sort=title"
                                id="ember81416" class="bookshelf-journal ember-view">
                                <div id="ember81417" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0007-0874.png"
                                            alt="Cover of The British Journal for the History of Science"
                                            title="The British Journal for the History of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The British Journal for the History of Science"
                                    class="bookshelf-journal-title">The British Journal for the History of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81419" class="ember-view"><a href="/libraries/603/journals/36369?sort=title"
                                id="ember81420" class="bookshelf-journal ember-view">
                                <div id="ember81421" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1474-8932.png"
                                            alt="Cover of Bronte Studies" title="Bronte Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bronte Studies" class="bookshelf-journal-title">Bronte Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81423" class="ember-view"><a href="/libraries/603/journals/17476?sort=title"
                                id="ember81424" class="bookshelf-journal ember-view">
                                <div id="ember81425" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1749-8430.png"
                                            alt="Cover of BSHM Bulletin: Journal of the British Society for the History of Mathematics"
                                            title="BSHM Bulletin: Journal of the British Society for the History of Mathematics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="BSHM Bulletin: Journal of the British Society for the History of Mathematics"
                                    class="bookshelf-journal-title">BSHM Bulletin: Journal of the British Society for
                                    the History of Mathematics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81427" class="ember-view"><a href="/libraries/603/journals/48451?sort=title"
                                id="ember81428" class="bookshelf-journal ember-view">
                                <div id="ember81429" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0303-7495.png"
                                            alt="Cover of Bulletin de l'Institut Francais d'Etudes Andines"
                                            title="Bulletin de l'Institut Francais d'Etudes Andines">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin de l'Institut Francais d'Etudes Andines"
                                    class="bookshelf-journal-title">Bulletin de l'Institut Francais d'Etudes Andines
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81431" class="ember-view"><a href="/libraries/603/journals/48657?sort=title"
                                id="ember81432" class="bookshelf-journal ember-view">
                                <div id="ember81433" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1775-3821.png"
                                            alt="Cover of Bulletin Hispanique" title="Bulletin Hispanique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin Hispanique" class="bookshelf-journal-title">Bulletin Hispanique
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81435" class="ember-view"><a href="/libraries/603/journals/300851?sort=title"
                                id="ember81436" class="bookshelf-journal ember-view">
                                <div id="ember81437" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/24741612.png"
                                            alt="Cover of Bulletin of Spanish Visual Studies"
                                            title="Bulletin of Spanish Visual Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin of Spanish Visual Studies" class="bookshelf-journal-title">Bulletin
                                    of Spanish Visual Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81439" class="ember-view"><a href="/libraries/603/journals/10798?sort=title"
                                id="ember81440" class="bookshelf-journal ember-view">
                                <div id="ember81441" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0007-5140.png"
                                            alt="Cover of Bulletin of the History of Medicine"
                                            title="Bulletin of the History of Medicine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin of the History of Medicine" class="bookshelf-journal-title">
                                    Bulletin of the History of Medicine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81443" class="ember-view"><a href="/libraries/603/journals/16610?sort=title"
                                id="ember81444" class="bookshelf-journal ember-view">
                                <div id="ember81445" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0007-6791.png"
                                            alt="Cover of Business History" title="Business History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Business History" class="bookshelf-journal-title">Business History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81447" class="ember-view"><a href="/libraries/603/journals/19430?sort=title"
                                id="ember81448" class="bookshelf-journal ember-view">
                                <div id="ember81449" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0007-6805.png"
                                            alt="Cover of Business History Review" title="Business History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Business History Review" class="bookshelf-journal-title">Business History
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81451" class="ember-view"><a href="/libraries/603/journals/49269?sort=title"
                                id="ember81452" class="bookshelf-journal ember-view">
                                <div id="ember81453" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1791-4884.png"
                                            alt="Cover of Byzantina Symmeikta" title="Byzantina Symmeikta">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Byzantina Symmeikta" class="bookshelf-journal-title">Byzantina Symmeikta
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81455" class="ember-view"><a href="/libraries/603/journals/36385?sort=title"
                                id="ember81456" class="bookshelf-journal ember-view">
                                <div id="ember81457" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0307-0131.png"
                                            alt="Cover of Byzantine and Modern Greek Studies"
                                            title="Byzantine and Modern Greek Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Byzantine and Modern Greek Studies" class="bookshelf-journal-title">
                                    Byzantine and Modern Greek Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81459" class="ember-view"><a href="/libraries/603/journals/263428?sort=title"
                                id="ember81460" class="bookshelf-journal ember-view">
                                <div id="ember81461" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1413-6651-1df9bb23-901a-4e37-8b4f-62e117933df1.png"
                                            alt="Cover of Cadernos Espinosanos" title="Cadernos Espinosanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cadernos Espinosanos" class="bookshelf-journal-title">Cadernos Espinosanos
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81463" class="ember-view"><a href="/libraries/603/journals/49392?sort=title"
                                id="ember81464" class="bookshelf-journal ember-view">
                                <div id="ember81465" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0007-9731.png"
                                            alt="Cover of Cahiers de Civilisation Médiévale"
                                            title="Cahiers de Civilisation Médiévale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers de Civilisation Médiévale" class="bookshelf-journal-title">Cahiers
                                    de Civilisation Médiévale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81467" class="ember-view"><a href="/libraries/603/journals/49385?sort=title"
                                id="ember81468" class="bookshelf-journal ember-view">
                                <div id="ember81469" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0008-0055.png"
                                            alt="Cover of Cahiers d'Études Africaines"
                                            title="Cahiers d'Études Africaines">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers d'Études Africaines" class="bookshelf-journal-title">Cahiers
                                    d'Études Africaines</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81471" class="ember-view"><a href="/libraries/603/journals/49439?sort=title"
                                id="ember81472" class="bookshelf-journal ember-view">
                                <div id="ember81473" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2108-7083.png"
                                            alt="Cover of Cahiers d’Études Hispaniques Médiévales"
                                            title="Cahiers d’Études Hispaniques Médiévales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers d’Études Hispaniques Médiévales" class="bookshelf-journal-title">
                                    Cahiers d’Études Hispaniques Médiévales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81475" class="ember-view"><a href="/libraries/603/journals/49457?sort=title"
                                id="ember81476" class="bookshelf-journal ember-view">
                                <div id="ember81477" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1777-5388.png"
                                            alt="Cover of Cahiers du Monde Russe : Russie, Empire Russe, URSS, États Indépendants"
                                            title="Cahiers du Monde Russe : Russie, Empire Russe, URSS, États Indépendants">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers du Monde Russe : Russie, Empire Russe, URSS, États Indépendants"
                                    class="bookshelf-journal-title">Cahiers du Monde Russe : Russie, Empire Russe, URSS,
                                    États Indépendants</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81480" class="ember-view"><a href="/libraries/603/journals/49622?sort=title"
                                id="ember81481" class="bookshelf-journal ember-view">
                                <div id="ember81482" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0960-1163.png"
                                            alt="Cover of Camden fifth series" title="Camden fifth series">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Camden fifth series" class="bookshelf-journal-title">Camden fifth series
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81484" class="ember-view"><a href="/libraries/603/journals/49686?sort=title"
                                id="ember81485" class="bookshelf-journal ember-view">
                                <div id="ember81486" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0823-2105.png"
                                            alt="Cover of Canadian Bulletin of Medical History"
                                            title="Canadian Bulletin of Medical History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian Bulletin of Medical History" class="bookshelf-journal-title">
                                    Canadian Bulletin of Medical History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81488" class="ember-view"><a href="/libraries/603/journals/38738?sort=title"
                                id="ember81489" class="bookshelf-journal ember-view">
                                <div id="ember81490" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0008-3755.png"
                                            alt="Cover of Canadian Historical Review"
                                            title="Canadian Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian Historical Review" class="bookshelf-journal-title">Canadian
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81492" class="ember-view"><a href="/libraries/603/journals/38760?sort=title"
                                id="ember81493" class="bookshelf-journal ember-view">
                                <div id="ember81494" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0008-4107.png"
                                            alt="Cover of Canadian Journal of History"
                                            title="Canadian Journal of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian Journal of History" class="bookshelf-journal-title">Canadian
                                    Journal of History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81496" class="ember-view"><a href="/libraries/603/journals/9766?sort=title"
                                id="ember81497" class="bookshelf-journal ember-view">
                                <div id="ember81498" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0090-8290.png"
                                            alt="Cover of Canadian-American Slavic Studies"
                                            title="Canadian-American Slavic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian-American Slavic Studies" class="bookshelf-journal-title">
                                    Canadian-American Slavic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81500" class="ember-view"><a href="/libraries/603/journals/303588?sort=title"
                                id="ember81501" class="bookshelf-journal ember-view">
                                <div id="ember81502" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2477-2771.png"
                                            alt="Cover of Candrasangkala: Journal of Education and History"
                                            title="Candrasangkala: Journal of Education and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Candrasangkala: Journal of Education and History"
                                    class="bookshelf-journal-title">Candrasangkala: Journal of Education and History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81504" class="ember-view"><a href="/libraries/603/journals/375442?sort=title"
                                id="ember81505" class="bookshelf-journal ember-view">
                                <div id="ember81506" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/25766406.png"
                                            alt="Cover of Capitalism : A Journal of History and Economics"
                                            title="Capitalism : A Journal of History and Economics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Capitalism : A Journal of History and Economics"
                                    class="bookshelf-journal-title">Capitalism : A Journal of History and Economics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81508" class="ember-view"><a href="/libraries/603/journals/39700?sort=title"
                                id="ember81509" class="bookshelf-journal ember-view">
                                <div id="ember81510" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2169-0847.png"
                                            alt="Cover of Catedral Tomada : Revista de Critica Literaria Latinoamericana"
                                            title="Catedral Tomada : Revista de Critica Literaria Latinoamericana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Catedral Tomada : Revista de Critica Literaria Latinoamericana"
                                    class="bookshelf-journal-title">Catedral Tomada : Revista de Critica Literaria
                                    Latinoamericana</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81512" class="ember-view"><a href="/libraries/603/journals/17937?sort=title"
                                id="ember81513" class="bookshelf-journal ember-view">
                                <div id="ember81514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1939-2397.png"
                                            alt="Cover of Celebrity Studies" title="Celebrity Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Celebrity Studies" class="bookshelf-journal-title">Celebrity Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81516" class="ember-view"><a href="/libraries/603/journals/6990?sort=title"
                                id="ember81517" class="bookshelf-journal ember-view">
                                <div id="ember81518" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1600-0498-bf5348be-9bee-4b49-a85f-b76ec4e34723.png"
                                            alt="Cover of Centaurus" title="Centaurus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Centaurus" class="bookshelf-journal-title">Centaurus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81520" class="ember-view"><a href="/libraries/603/journals/50417?sort=title"
                                id="ember81521" class="bookshelf-journal ember-view">
                                <div id="ember81522" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2300-1682-60ccaecc-03e2-43e3-bcd1-99399c1609dc.png"
                                            alt="Cover of Central and Eastern European Migration Review"
                                            title="Central and Eastern European Migration Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Central and Eastern European Migration Review"
                                    class="bookshelf-journal-title">Central and Eastern European Migration Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81524" class="ember-view"><a href="/libraries/603/journals/36373?sort=title"
                                id="ember81525" class="bookshelf-journal ember-view">
                                <div id="ember81526" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1479-0963.png"
                                            alt="Cover of Central Europe" title="Central Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Central Europe" class="bookshelf-journal-title">Central Europe</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81528" class="ember-view"><a href="/libraries/603/journals/18953?sort=title"
                                id="ember81529" class="bookshelf-journal ember-view">
                                <div id="ember81530" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0008-9389.png"
                                            alt="Cover of Central European History" title="Central European History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Central European History" class="bookshelf-journal-title">Central European
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81532" class="ember-view"><a href="/libraries/603/journals/125582?sort=title"
                                id="ember81533" class="bookshelf-journal ember-view">
                                <div id="ember81534" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1699-7468-ec45072f-f898-4d6d-b406-498171e34ea2.png"
                                            alt="Cover of Cercles : Revista d'Història Cultural"
                                            title="Cercles : Revista d'Història Cultural">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cercles : Revista d'Història Cultural" class="bookshelf-journal-title">
                                    Cercles : Revista d'Història Cultural</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81536" class="ember-view"><a href="/libraries/603/journals/36483?sort=title"
                                id="ember81537" class="bookshelf-journal ember-view">
                                <div id="ember81538" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1758-5716.png"
                                            alt="Cover of Childhood in the Past: An International Journal"
                                            title="Childhood in the Past: An International Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Childhood in the Past: An International Journal"
                                    class="bookshelf-journal-title">Childhood in the Past: An International Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81540" class="ember-view"><a href="/libraries/603/journals/367157?sort=title"
                                id="ember81541" class="bookshelf-journal ember-view">
                                <div id="ember81542" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2589-4641-05550f33-3060-4cd4-b78a-ade4f67c40e8.webp"
                                            alt="Cover of China and Asia" title="China and Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="China and Asia" class="bookshelf-journal-title">China and Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81544" class="ember-view"><a href="/libraries/603/journals/36467?sort=title"
                                id="ember81545" class="bookshelf-journal ember-view">
                                <div id="ember81546" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1547-402X.png"
                                            alt="Cover of The Chinese Historical Review"
                                            title="The Chinese Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Chinese Historical Review" class="bookshelf-journal-title">The Chinese
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81548" class="ember-view"><a href="/libraries/603/journals/50902?sort=title"
                                id="ember81549" class="bookshelf-journal ember-view">
                                <div id="ember81550" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0009-4633.png"
                                            alt="Cover of Chinese Studies in History"
                                            title="Chinese Studies in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Chinese Studies in History" class="bookshelf-journal-title">Chinese Studies
                                    in History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81552" class="ember-view"><a href="/libraries/603/journals/40224?sort=title"
                                id="ember81553" class="bookshelf-journal ember-view">
                                <div id="ember81554" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0009-6067.png"
                                            alt="Cover of Chronique d'Egypte" title="Chronique d'Egypte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Chronique d'Egypte" class="bookshelf-journal-title">Chronique d'Egypte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81556" class="ember-view"><a href="/libraries/603/journals/19431?sort=title"
                                id="ember81557" class="bookshelf-journal ember-view">
                                <div id="ember81558" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0009-6407.png"
                                            alt="Cover of Church History" title="Church History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Church History" class="bookshelf-journal-title">Church History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81560" class="ember-view"><a href="/libraries/603/journals/9904?sort=title"
                                id="ember81561" class="bookshelf-journal ember-view">
                                <div id="ember81562" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1871-241X.png"
                                            alt="Cover of Church History and Religious Culture"
                                            title="Church History and Religious Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Church History and Religious Culture" class="bookshelf-journal-title">Church
                                    History and Religious Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81564" class="ember-view"><a href="/libraries/603/journals/300965?sort=title"
                                id="ember81565" class="bookshelf-journal ember-view">
                                <div id="ember81566" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2149-0678.png"
                                            alt="Cover of Cihannüma: Tarih ve Coğrafya Araştırmaları Dergisi"
                                            title="Cihannüma: Tarih ve Coğrafya Araştırmaları Dergisi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cihannüma: Tarih ve Coğrafya Araştırmaları Dergisi"
                                    class="bookshelf-journal-title">Cihannüma: Tarih ve Coğrafya Araştırmaları Dergisi
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81568" class="ember-view"><a href="/libraries/603/journals/10711?sort=title"
                                id="ember81569" class="bookshelf-journal ember-view">
                                <div id="ember81570" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0009-8078.png"
                                            alt="Cover of Civil War History" title="Civil War History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Civil War History" class="bookshelf-journal-title">Civil War History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81572" class="ember-view"><a href="/libraries/603/journals/433247?sort=title"
                                id="ember81573" class="bookshelf-journal ember-view">
                                <div id="ember81574" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2362-3063-b520bfd0-1b7e-4205-a681-bf324f0df73d.png"
                                            alt="Cover of Clío &amp; Asociados : La Historia Enseñada"
                                            title="Clío &amp; Asociados : La Historia Enseñada">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Clío &amp; Asociados : La Historia Enseñada"
                                    class="bookshelf-journal-title">Clío &amp; Asociados : La Historia Enseñada</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81576" class="ember-view"><a href="/libraries/603/journals/293082?sort=title"
                                id="ember81577" class="bookshelf-journal ember-view">
                                <div id="ember81578" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2525-5649.png"
                                            alt="Cover of Clio: Revista de Pesquisa Histórica"
                                            title="Clio: Revista de Pesquisa Histórica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Clio: Revista de Pesquisa Histórica" class="bookshelf-journal-title">Clio:
                                    Revista de Pesquisa Histórica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81580" class="ember-view"><a href="/libraries/603/journals/51514?sort=title"
                                id="ember81581" class="bookshelf-journal ember-view">
                                <div id="ember81582" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2373-7530.png"
                                            alt="Cover of Cliodynamics" title="Cliodynamics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cliodynamics" class="bookshelf-journal-title">Cliodynamics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81584" class="ember-view"><a href="/libraries/603/journals/2887?sort=title"
                                id="ember81585" class="bookshelf-journal ember-view">
                                <div id="ember81586" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1863-2505.png"
                                            alt="Cover of Cliometrica" title="Cliometrica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cliometrica" class="bookshelf-journal-title">Cliometrica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81588" class="ember-view"><a href="/libraries/603/journals/243995?sort=title"
                                id="ember81589" class="bookshelf-journal ember-view">
                                <div id="ember81590" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1224-032X.png"
                                            alt="Cover of Codrul Cosminului" title="Codrul Cosminului">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Codrul Cosminului" class="bookshelf-journal-title">Codrul Cosminului</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81592" class="ember-view"><a href="/libraries/603/journals/51559?sort=title"
                                id="ember81593" class="bookshelf-journal ember-view">
                                <div id="ember81594" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1794-5887-4492600e-acc0-4246-aa73-da6417753053.png"
                                            alt="Cover of Co-herencia" title="Co-herencia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Co-herencia" class="bookshelf-journal-title">Co-herencia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81596" class="ember-view"><a href="/libraries/603/journals/16658?sort=title"
                                id="ember81597" class="bookshelf-journal ember-view">
                                <div id="ember81598" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1468-2745.png"
                                            alt="Cover of Cold War History" title="Cold War History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cold War History" class="bookshelf-journal-title">Cold War History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81600" class="ember-view"><a href="/libraries/603/journals/17145?sort=title"
                                id="ember81601" class="bookshelf-journal ember-view">
                                <div id="ember81602" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1060-9164.png"
                                            alt="Cover of Colonial Latin American Review"
                                            title="Colonial Latin American Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Colonial Latin American Review" class="bookshelf-journal-title">Colonial
                                    Latin American Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81604" class="ember-view"><a href="/libraries/603/journals/18260?sort=title"
                                id="ember81605" class="bookshelf-journal ember-view">
                                <div id="ember81606" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0961-754X.png"
                                            alt="Cover of Common Knowledge" title="Common Knowledge">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Common Knowledge" class="bookshelf-journal-title">Common Knowledge</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81608" class="ember-view"><a href="/libraries/603/journals/271611?sort=title"
                                id="ember81609" class="bookshelf-journal ember-view">
                                <div id="ember81610" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2531-9884-07672836-0d97-42c4-9f77-0f0b178b12cb.png"
                                            alt="Cover of Comparative Cultural Studies : European and Latin American Perspectives"
                                            title="Comparative Cultural Studies : European and Latin American Perspectives">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Comparative Cultural Studies : European and Latin American Perspectives"
                                    class="bookshelf-journal-title">Comparative Cultural Studies : European and Latin
                                    American Perspectives</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81612" class="ember-view"><a href="/libraries/603/journals/18972?sort=title"
                                id="ember81613" class="bookshelf-journal ember-view">
                                <div id="ember81614" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0010-4175.png"
                                            alt="Cover of Comparative Studies in Society and History"
                                            title="Comparative Studies in Society and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Comparative Studies in Society and History" class="bookshelf-journal-title">
                                    Comparative Studies in Society and History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81616" class="ember-view"><a href="/libraries/603/journals/16648?sort=title"
                                id="ember81617" class="bookshelf-journal ember-view">
                                <div id="ember81618" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1361-9462.png"
                                            alt="Cover of Contemporary British History"
                                            title="Contemporary British History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contemporary British History" class="bookshelf-journal-title">Contemporary
                                    British History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81620" class="ember-view"><a href="/libraries/603/journals/19055?sort=title"
                                id="ember81621" class="bookshelf-journal ember-view">
                                <div id="ember81622" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0960-7773.png"
                                            alt="Cover of Contemporary European History"
                                            title="Contemporary European History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contemporary European History" class="bookshelf-journal-title">Contemporary
                                    European History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81624" class="ember-view"><a href="/libraries/603/journals/19051?sort=title"
                                id="ember81625" class="bookshelf-journal ember-view">
                                <div id="ember81626" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0268-4160.png"
                                            alt="Cover of Continuity and Change" title="Continuity and Change">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Continuity and Change" class="bookshelf-journal-title">Continuity and Change
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81628" class="ember-view"><a href="/libraries/603/journals/244703?sort=title"
                                id="ember81629" class="bookshelf-journal ember-view">
                                <div id="ember81630" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1807-9326.png"
                                            alt="Cover of Contributions to the History of Concepts"
                                            title="Contributions to the History of Concepts">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contributions to the History of Concepts" class="bookshelf-journal-title">
                                    Contributions to the History of Concepts</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81632" class="ember-view"><a href="/libraries/603/journals/36396?sort=title"
                                id="ember81633" class="bookshelf-journal ember-view">
                                <div id="ember81634" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0590-8876.png"
                                            alt="Cover of Costume" title="Costume">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Costume" class="bookshelf-journal-title">Costume</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81636" class="ember-view"><a href="/libraries/603/journals/53721?sort=title"
                                id="ember81637" class="bookshelf-journal ember-view">
                                <div id="ember81638" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2326-4462.png"
                                            alt="Cover of Critical Historical Studies"
                                            title="Critical Historical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critical Historical Studies" class="bookshelf-journal-title">Critical
                                    Historical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81640" class="ember-view"><a href="/libraries/603/journals/53807?sort=title"
                                id="ember81641" class="bookshelf-journal ember-view">
                                <div id="ember81642" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2158-9666.png"
                                            alt="Cover of Cross-Currents: East Asian History and Culture Review"
                                            title="Cross-Currents: East Asian History and Culture Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cross-Currents: East Asian History and Culture Review"
                                    class="bookshelf-journal-title">Cross-Currents: East Asian History and Culture
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81644" class="ember-view"><a href="/libraries/603/journals/37481?sort=title"
                                id="ember81645" class="bookshelf-journal ember-view">
                                <div id="ember81646" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0210-847X.png"
                                            alt="Cover of Cuadernos de Estudios Gallegos"
                                            title="Cuadernos de Estudios Gallegos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuadernos de Estudios Gallegos" class="bookshelf-journal-title">Cuadernos de
                                    Estudios Gallegos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81648" class="ember-view"><a href="/libraries/603/journals/53869?sort=title"
                                id="ember81649" class="bookshelf-journal ember-view">
                                <div id="ember81650" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0719-1243-95cb4638-ae57-4d67-b8fa-6604dc5f4cc2.png"
                                            alt="Cover of Cuadernos de Historia" title="Cuadernos de Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuadernos de Historia" class="bookshelf-journal-title">Cuadernos de Historia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81652" class="ember-view"><a href="/libraries/603/journals/53871?sort=title"
                                id="ember81653" class="bookshelf-journal ember-view">
                                <div id="ember81654" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0214-400X-a33587aa-d793-4230-a750-8734b6d2bc91.png"
                                            alt="Cover of Cuadernos de Historia Contemporánea"
                                            title="Cuadernos de Historia Contemporánea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuadernos de Historia Contemporánea" class="bookshelf-journal-title">
                                    Cuadernos de Historia Contemporánea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81656" class="ember-view"><a href="/libraries/603/journals/53878?sort=title"
                                id="ember81657" class="bookshelf-journal ember-view">
                                <div id="ember81658" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0214-4018-7a169580-49be-405d-abbd-1f75f7eaa13e.png"
                                            alt="Cover of Cuadernos de Historia Moderna"
                                            title="Cuadernos de Historia Moderna">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuadernos de Historia Moderna" class="bookshelf-journal-title">Cuadernos de
                                    Historia Moderna</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81660" class="ember-view"><a href="/libraries/603/journals/260490?sort=title"
                                id="ember81661" class="bookshelf-journal ember-view">
                                <div id="ember81662" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2445-3587-18e2e3a2-7240-4be3-98da-19e41f001002.png"
                                            alt="Cover of Cuadernos Europeos de Deusto / Deusto Journal of European Studies"
                                            title="Cuadernos Europeos de Deusto / Deusto Journal of European Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuadernos Europeos de Deusto / Deusto Journal of European Studies"
                                    class="bookshelf-journal-title">Cuadernos Europeos de Deusto / Deusto Journal of
                                    European Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81664" class="ember-view"><a href="/libraries/603/journals/35941?sort=title"
                                id="ember81665" class="bookshelf-journal ember-view">
                                <div id="ember81666" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1478-0038.png"
                                            alt="Cover of Cultural and Social History"
                                            title="Cultural and Social History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cultural and Social History" class="bookshelf-journal-title">Cultural and
                                    Social History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81668" class="ember-view"><a href="/libraries/603/journals/38834?sort=title"
                                id="ember81669" class="bookshelf-journal ember-view">
                                <div id="ember81670" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2045-290X.png"
                                            alt="Cover of Cultural History" title="Cultural History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cultural History" class="bookshelf-journal-title">Cultural History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81672" class="ember-view"><a href="/libraries/603/journals/37475?sort=title"
                                id="ember81673" class="bookshelf-journal ember-view">
                                <div id="ember81674" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2253-797X-70640e49-dad2-4eef-bdbc-0dccd7be3583.png"
                                            alt="Cover of Culture &amp; History Digital Journal"
                                            title="Culture &amp; History Digital Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Culture &amp; History Digital Journal" class="bookshelf-journal-title">
                                    Culture &amp; History Digital Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81676" class="ember-view"><a href="/libraries/603/journals/394130?sort=title"
                                id="ember81677" class="bookshelf-journal ember-view">
                                <div id="ember81678" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/26333287.png"
                                            alt="Cover of Cultures of Science" title="Cultures of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cultures of Science" class="bookshelf-journal-title">Cultures of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81680" class="ember-view"><a href="/libraries/603/journals/332764?sort=title"
                                id="ember81681" class="bookshelf-journal ember-view">
                                <div id="ember81682" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2470-4040-ae29cad6-c8ec-4f9c-9574-494bbec2ba91.webp"
                                            alt="Cover of DABIR : Digital Archive of Brief Notes &amp; Iran Review"
                                            title="DABIR : Digital Archive of Brief Notes &amp; Iran Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="DABIR : Digital Archive of Brief Notes &amp; Iran Review"
                                    class="bookshelf-journal-title">DABIR : Digital Archive of Brief Notes &amp; Iran
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81684" class="ember-view"><a href="/libraries/603/journals/32163?sort=title"
                                id="ember81685" class="bookshelf-journal ember-view">
                                <div id="ember81686" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0011-5266.png"
                                            alt="Cover of Daedalus" title="Daedalus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Daedalus" class="bookshelf-journal-title">Daedalus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81688" class="ember-view"><a href="/libraries/603/journals/54514?sort=title"
                                id="ember81689" class="bookshelf-journal ember-view">
                                <div id="ember81690" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1879-6583-620c27b8-92cf-429a-bbcc-8610b4d51f48.png"
                                            alt="Cover of Daphnis" title="Daphnis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Daphnis" class="bookshelf-journal-title">Daphnis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81692" class="ember-view"><a href="/libraries/603/journals/54517?sort=title"
                                id="ember81693" class="bookshelf-journal ember-view">
                                <div id="ember81694" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2325-6249.png"
                                            alt="Cover of Dapim" title="Dapim">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dapim" class="bookshelf-journal-title">Dapim</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81696" class="ember-view"><a href="/libraries/603/journals/55045?sort=title"
                                id="ember81697" class="bookshelf-journal ember-view">
                                <div id="ember81698" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2038-0925.png"
                                            alt="Cover of Diacronie. Studi di Storia Contemporanea"
                                            title="Diacronie. Studi di Storia Contemporanea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diacronie. Studi di Storia Contemporanea" class="bookshelf-journal-title">
                                    Diacronie. Studi di Storia Contemporanea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81700" class="ember-view"><a href="/libraries/603/journals/55051?sort=title"
                                id="ember81701" class="bookshelf-journal ember-view">
                                <div id="ember81702" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0719-2681-6a905e58-1c0d-4769-8c0d-09e645291135.png"
                                            alt="Cover of Diálogo Andino : Revista de Historia, Geografía y Cultura Andina"
                                            title="Diálogo Andino : Revista de Historia, Geografía y Cultura Andina">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diálogo Andino : Revista de Historia, Geografía y Cultura Andina"
                                    class="bookshelf-journal-title">Diálogo Andino : Revista de Historia, Geografía y
                                    Cultura Andina</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81704" class="ember-view"><a href="/libraries/603/journals/263911?sort=title"
                                id="ember81705" class="bookshelf-journal ember-view">
                                <div id="ember81706" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2215-3292.png"
                                            alt="Cover of Diálogos" title="Diálogos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diálogos" class="bookshelf-journal-title">Diálogos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81708" class="ember-view"><a href="/libraries/603/journals/55069?sort=title"
                                id="ember81709" class="bookshelf-journal ember-view">
                                <div id="ember81710" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1955-270X.png"
                                            alt="Cover of Dialogues d'Histoire Ancienne"
                                            title="Dialogues d'Histoire Ancienne">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialogues d'Histoire Ancienne" class="bookshelf-journal-title">Dialogues
                                    d'Histoire Ancienne</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81712" class="ember-view"><a href="/libraries/603/journals/479887?sort=title"
                                id="ember81713" class="bookshelf-journal ember-view">
                                <div id="ember81714" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2754-1258-8fa88bc2-bf6a-4b36-9927-01f0afb2ec31.png"
                                            alt="Cover of Dialogues in Urban Research"
                                            title="Dialogues in Urban Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialogues in Urban Research" class="bookshelf-journal-title">Dialogues in
                                    Urban Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81716" class="ember-view"><a href="/libraries/603/journals/399505?sort=title"
                                id="ember81717" class="bookshelf-journal ember-view">
                                <div id="ember81718" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/26621983.png"
                                            alt="Cover of Digital War" title="Digital War">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Digital War" class="bookshelf-journal-title">Digital War</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81721" class="ember-view"><a href="/libraries/603/journals/3926?sort=title"
                                id="ember81722" class="bookshelf-journal ember-view">
                                <div id="ember81723" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0145-2096.png"
                                            alt="Cover of Diplomatic History" title="Diplomatic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diplomatic History" class="bookshelf-journal-title">Diplomatic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81725" class="ember-view"><a href="/libraries/603/journals/36439?sort=title"
                                id="ember81726" class="bookshelf-journal ember-view">
                                <div id="ember81727" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1478-7318.png"
                                            alt="Cover of Dix Neuf" title="Dix Neuf">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dix Neuf" class="bookshelf-journal-title">Dix Neuf</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81729" class="ember-view"><a href="/libraries/603/journals/36085?sort=title"
                                id="ember81730" class="bookshelf-journal ember-view">
                                <div id="ember81731" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1760-7892.png"
                                            alt="Cover of Dix-huitième siècle" title="Dix-huitième siècle">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dix-huitième siècle" class="bookshelf-journal-title">Dix-huitième siècle
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81733" class="ember-view"><a href="/libraries/603/journals/36098?sort=title"
                                id="ember81734" class="bookshelf-journal ember-view">
                                <div id="ember81735" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1969-6965.png"
                                            alt="Cover of Dix-septième siècle" title="Dix-septième siècle">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dix-septième siècle" class="bookshelf-journal-title">Dix-septième siècle
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81737" class="ember-view"><a href="/libraries/603/journals/430885?sort=title"
                                id="ember81738" class="bookshelf-journal ember-view">
                                <div id="ember81739" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/26659492.png"
                                            alt="Cover of DNK : Documentatieblad voor de Nederlandse kerkgeschiedenis na 1800"
                                            title="DNK : Documentatieblad voor de Nederlandse kerkgeschiedenis na 1800">
                                        <!---->
                                    </div>
                                </div>
                                <div title="DNK : Documentatieblad voor de Nederlandse kerkgeschiedenis na 1800"
                                    class="bookshelf-journal-title">DNK : Documentatieblad voor de Nederlandse
                                    kerkgeschiedenis na 1800</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81741" class="ember-view"><a href="/libraries/603/journals/154626?sort=title"
                                id="ember81742" class="bookshelf-journal ember-view">
                                <div id="ember81743" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1697-4328-d157701c-f33b-41f2-84c7-4bd7246e7c78.png"
                                            alt="Cover of Documenta &amp; Instrumenta"
                                            title="Documenta &amp; Instrumenta">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Documenta &amp; Instrumenta" class="bookshelf-journal-title">Documenta &amp;
                                    Instrumenta</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81745" class="ember-view"><a href="/libraries/603/journals/55451?sort=title"
                                id="ember81746" class="bookshelf-journal ember-view">
                                <div id="ember81747" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1408-967X.png"
                                            alt="Cover of Documenta Praehistorica" title="Documenta Praehistorica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Documenta Praehistorica" class="bookshelf-journal-title">Documenta
                                    Praehistorica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81749" class="ember-view"><a href="/libraries/603/journals/40747?sort=title"
                                id="ember81750" class="bookshelf-journal ember-view">
                                <div id="ember81751" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0012-5415.png"
                                            alt="Cover of Der Donauraum" title="Der Donauraum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Der Donauraum" class="bookshelf-journal-title">Der Donauraum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81753" class="ember-view"><a href="/libraries/603/journals/36444?sort=title"
                                id="ember81754" class="bookshelf-journal ember-view">
                                <div id="ember81755" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0361-2112.png"
                                            alt="Cover of Dress" title="Dress">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dress" class="bookshelf-journal-title">Dress</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81757" class="ember-view"><a href="/libraries/603/journals/36460?sort=title"
                                id="ember81758" class="bookshelf-journal ember-view">
                                <div id="ember81759" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0309-6564.png"
                                            alt="Cover of Dutch Crossing" title="Dutch Crossing">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dutch Crossing" class="bookshelf-journal-title">Dutch Crossing</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81761" class="ember-view"><a href="/libraries/603/journals/10852?sort=title"
                                id="ember81762" class="bookshelf-journal ember-view">
                                <div id="ember81763" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1543-4273.png"
                                            alt="Cover of Early American Studies: An Interdisciplinary Journal"
                                            title="Early American Studies: An Interdisciplinary Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early American Studies: An Interdisciplinary Journal"
                                    class="bookshelf-journal-title">Early American Studies: An Interdisciplinary Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81765" class="ember-view"><a href="/libraries/603/journals/36427?sort=title"
                                id="ember81766" class="bookshelf-journal ember-view">
                                <div id="ember81767" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1529-9104.png"
                                            alt="Cover of Early Medieval China" title="Early Medieval China">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early Medieval China" class="bookshelf-journal-title">Early Medieval China
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81769" class="ember-view"><a href="/libraries/603/journals/4562?sort=title"
                                id="ember81770" class="bookshelf-journal ember-view">
                                <div id="ember81771" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0963-9462.png"
                                            alt="Cover of Early Medieval Europe" title="Early Medieval Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early Medieval Europe" class="bookshelf-journal-title">Early Medieval Europe
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81773" class="ember-view"><a href="/libraries/603/journals/17382?sort=title"
                                id="ember81774" class="bookshelf-journal ember-view">
                                <div id="ember81775" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1746-0654.png"
                                            alt="Cover of Early Popular Visual Culture"
                                            title="Early Popular Visual Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early Popular Visual Culture" class="bookshelf-journal-title">Early Popular
                                    Visual Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81777" class="ember-view"><a href="/libraries/603/journals/9834?sort=title"
                                id="ember81778" class="bookshelf-journal ember-view">
                                <div id="ember81779" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1383-7427.png"
                                            alt="Cover of Early Science and Medicine"
                                            title="Early Science and Medicine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early Science and Medicine" class="bookshelf-journal-title">Early Science
                                    and Medicine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81781" class="ember-view"><a href="/libraries/603/journals/9776?sort=title"
                                id="ember81782" class="bookshelf-journal ember-view">
                                <div id="ember81783" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0094-3037.png"
                                            alt="Cover of East Central Europe" title="East Central Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="East Central Europe" class="bookshelf-journal-title">East Central Europe
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81785" class="ember-view"><a href="/libraries/603/journals/16697?sort=title"
                                id="ember81786" class="bookshelf-journal ember-view">
                                <div id="ember81787" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1350-1674.png"
                                            alt="Cover of East European Jewish Affairs"
                                            title="East European Jewish Affairs">
                                        <!---->
                                    </div>
                                </div>
                                <div title="East European Jewish Affairs" class="bookshelf-journal-title">East European
                                    Jewish Affairs</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81789" class="ember-view"><a href="/libraries/603/journals/56090?sort=title"
                                id="ember81790" class="bookshelf-journal ember-view">
                                <div id="ember81791" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0104-0618.png"
                                            alt="Cover of Economia e Sociedade" title="Economia e Sociedade">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Economia e Sociedade" class="bookshelf-journal-title">Economia e Sociedade
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81793" class="ember-view"><a href="/libraries/603/journals/15763?sort=title"
                                id="ember81794" class="bookshelf-journal ember-view">
                                <div id="ember81795" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2078-0389.png"
                                            alt="Cover of Economic History of Developing Regions"
                                            title="Economic History of Developing Regions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Economic History of Developing Regions" class="bookshelf-journal-title">
                                    Economic History of Developing Regions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81797" class="ember-view"><a href="/libraries/603/journals/7011?sort=title"
                                id="ember81798" class="bookshelf-journal ember-view">
                                <div id="ember81799" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0013-0117.png"
                                            alt="Cover of The Economic History Review"
                                            title="The Economic History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Economic History Review" class="bookshelf-journal-title">The Economic
                                    History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81801" class="ember-view"><a href="/libraries/603/journals/496216?sort=title"
                                id="ember81802" class="bookshelf-journal ember-view">
                                <div id="ember81803" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2530-6448-ff02e1f9-55b8-4baf-b93f-05113f855fa5.png"
                                            alt="Cover of Edad Media Revista de Historia"
                                            title="Edad Media Revista de Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Edad Media Revista de Historia" class="bookshelf-journal-title">Edad Media
                                    Revista de Historia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81805" class="ember-view"><a href="/libraries/603/journals/10894?sort=title"
                                id="ember81806" class="bookshelf-journal ember-view">
                                <div id="ember81807" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0193-5380.png"
                                            alt="Cover of The Eighteenth Century" title="The Eighteenth Century">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Eighteenth Century" class="bookshelf-journal-title">The Eighteenth
                                    Century</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81809" class="ember-view"><a href="/libraries/603/journals/18264?sort=title"
                                id="ember81810" class="bookshelf-journal ember-view">
                                <div id="ember81811" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0098-2601.png"
                                            alt="Cover of Eighteenth-Century Life" title="Eighteenth-Century Life">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Eighteenth-Century Life" class="bookshelf-journal-title">Eighteenth-Century
                                    Life</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81813" class="ember-view"><a href="/libraries/603/journals/10696?sort=title"
                                id="ember81814" class="bookshelf-journal ember-view">
                                <div id="ember81815" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0013-2586.png"
                                            alt="Cover of Eighteenth-Century Studies"
                                            title="Eighteenth-Century Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Eighteenth-Century Studies" class="bookshelf-journal-title">
                                    Eighteenth-Century Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81817" class="ember-view"><a href="/libraries/603/journals/59740?sort=title"
                                id="ember81818" class="bookshelf-journal ember-view">
                                <div id="ember81819" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1989-9289.png"
                                            alt="Cover of El Futuro del Pasado" title="El Futuro del Pasado">
                                        <!---->
                                    </div>
                                </div>
                                <div title="El Futuro del Pasado" class="bookshelf-journal-title">El Futuro del Pasado
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81821" class="ember-view"><a href="/libraries/603/journals/56660?sort=title"
                                id="ember81822" class="bookshelf-journal ember-view">
                                <div id="ember81823" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1897-3426-0ffc5574-0fb8-4ca7-bd21-ece95070e682.png"
                                            alt="Cover of Electrum" title="Electrum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Electrum" class="bookshelf-journal-title">Electrum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81825" class="ember-view"><a href="/libraries/603/journals/56721?sort=title"
                                id="ember81826" class="bookshelf-journal ember-view">
                                <div id="ember81827" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2316-1191-f9f20bc1-f0eb-452d-9004-3d911e9cda51.png"
                                            alt="Cover of Em Tempo de Histórias" title="Em Tempo de Histórias">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Em Tempo de Histórias" class="bookshelf-journal-title">Em Tempo de Histórias
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81829" class="ember-view"><a href="/libraries/603/journals/56827?sort=title"
                                id="ember81830" class="bookshelf-journal ember-view">
                                <div id="ember81831" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0214-3038-8fd1b5d3-27fb-45c5-b8b3-0f8175e2ac8b.png"
                                            alt="Cover of En la España Medieval" title="En la España Medieval">
                                        <!---->
                                    </div>
                                </div>
                                <div title="En la España Medieval" class="bookshelf-journal-title">En la España Medieval
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81833" class="ember-view"><a href="/libraries/603/journals/336414?sort=title"
                                id="ember81834" class="bookshelf-journal ember-view">
                                <div id="ember81835" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2560-8371.png"
                                            alt="Cover of Encounters in Theory and History of Education"
                                            title="Encounters in Theory and History of Education">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Encounters in Theory and History of Education"
                                    class="bookshelf-journal-title">Encounters in Theory and History of Education</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81837" class="ember-view"><a href="/libraries/603/journals/56839?sort=title"
                                id="ember81838" class="bookshelf-journal ember-view">
                                <div id="ember81839" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0424-9674.png"
                                            alt="Cover of Encuentro" title="Encuentro">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Encuentro" class="bookshelf-journal-title">Encuentro</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81841" class="ember-view"><a href="/libraries/603/journals/7548?sort=title"
                                id="ember81842" class="bookshelf-journal ember-view">
                                <div id="ember81843" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0160-9327.png"
                                            alt="Cover of Endeavour" title="Endeavour">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Endeavour" class="bookshelf-journal-title">Endeavour</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81845" class="ember-view"><a href="/libraries/603/journals/17909?sort=title"
                                id="ember81846" class="bookshelf-journal ember-view">
                                <div id="ember81847" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1937-8629.png"
                                            alt="Cover of Engineering Studies" title="Engineering Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Engineering Studies" class="bookshelf-journal-title">Engineering Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81849" class="ember-view"><a href="/libraries/603/journals/10367?sort=title"
                                id="ember81850" class="bookshelf-journal ember-view">
                                <div id="ember81851" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0013-8266.png"
                                            alt="Cover of The English Historical Review"
                                            title="The English Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The English Historical Review" class="bookshelf-journal-title">The English
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81853" class="ember-view"><a href="/libraries/603/journals/3976?sort=title"
                                id="ember81854" class="bookshelf-journal ember-view">
                                <div id="ember81855" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0013-8312.png"
                                            alt="Cover of English Literary Renaissance"
                                            title="English Literary Renaissance">
                                        <!---->
                                    </div>
                                </div>
                                <div title="English Literary Renaissance" class="bookshelf-journal-title">English
                                    Literary Renaissance</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81857" class="ember-view"><a href="/libraries/603/journals/57013?sort=title"
                                id="ember81858" class="bookshelf-journal ember-view">
                                <div id="ember81859" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1458-1396-c6980302-7d54-4475-89c0-382aca034182.png"
                                            alt="Cover of Ennen ja Nyt : Historian Tietosanomat"
                                            title="Ennen ja Nyt : Historian Tietosanomat">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ennen ja Nyt : Historian Tietosanomat" class="bookshelf-journal-title">Ennen
                                    ja Nyt : Historian Tietosanomat</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81861" class="ember-view"><a href="/libraries/603/journals/10477?sort=title"
                                id="ember81862" class="bookshelf-journal ember-view">
                                <div id="ember81863" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1467-2227.png"
                                            alt="Cover of Enterprise and Society" title="Enterprise and Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Enterprise and Society" class="bookshelf-journal-title">Enterprise and
                                    Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81865" class="ember-view"><a href="/libraries/603/journals/36127?sort=title"
                                id="ember81866" class="bookshelf-journal ember-view">
                                <div id="ember81867" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2100-9864.png"
                                            alt="Cover of Entreprises et histoire" title="Entreprises et histoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Entreprises et histoire" class="bookshelf-journal-title">Entreprises et
                                    histoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81869" class="ember-view"><a href="/libraries/603/journals/57118?sort=title"
                                id="ember81870" class="bookshelf-journal ember-view">
                                <div id="ember81871" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0967-3407-91876b3b-63d0-4159-ab37-519cb659f5f7.png"
                                            alt="Cover of Environment and History" title="Environment and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Environment and History" class="bookshelf-journal-title">Environment and
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81873" class="ember-view"><a href="/libraries/603/journals/10535?sort=title"
                                id="ember81874" class="bookshelf-journal ember-view">
                                <div id="ember81875" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1930-8892-642c9921-1338-4231-b046-4a647a94c7ab.png"
                                            alt="Cover of Environmental History" title="Environmental History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Environmental History" class="bookshelf-journal-title">Environmental History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81877" class="ember-view"><a href="/libraries/603/journals/57261?sort=title"
                                id="ember81878" class="bookshelf-journal ember-view">
                                <div id="ember81879" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2341-2380-6da8a0a0-446f-43f4-a9c8-7f1003d6d638.png"
                                            alt="Cover of Erasmo : Revista de Historia Bajomedieval y Moderna"
                                            title="Erasmo : Revista de Historia Bajomedieval y Moderna">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Erasmo : Revista de Historia Bajomedieval y Moderna"
                                    class="bookshelf-journal-title">Erasmo : Revista de Historia Bajomedieval y Moderna
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81881" class="ember-view"><a href="/libraries/603/journals/9793?sort=title"
                                id="ember81882" class="bookshelf-journal ember-view">
                                <div id="ember81883" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0276-2854.png"
                                            alt="Cover of Erasmus Studies" title="Erasmus Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Erasmus Studies" class="bookshelf-journal-title">Erasmus Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81885" class="ember-view"><a href="/libraries/603/journals/101163?sort=title"
                                id="ember81886" class="bookshelf-journal ember-view">
                                <div id="ember81887" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2405-5069-aa58ba59-75ae-49cc-a462-0b516c216800.png"
                                            alt="Cover of Erudition and the Republic of Letters"
                                            title="Erudition and the Republic of Letters">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Erudition and the Republic of Letters" class="bookshelf-journal-title">
                                    Erudition and the Republic of Letters</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81889" class="ember-view"><a href="/libraries/603/journals/355693?sort=title"
                                id="ember81890" class="bookshelf-journal ember-view">
                                <div id="ember81891" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2531-1646-6a180b76-4dbc-4db4-9041-f1da872d137b.png"
                                            alt="Cover of ES Review : Spanish Journal of English Studies"
                                            title="ES Review : Spanish Journal of English Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="ES Review : Spanish Journal of English Studies"
                                    class="bookshelf-journal-title">ES Review : Spanish Journal of English Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81893" class="ember-view"><a href="/libraries/603/journals/57327?sort=title"
                                id="ember81894" class="bookshelf-journal ember-view">
                                <div id="ember81895" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2340-7263.png"
                                            alt="Cover of Espacio, Tiempo y Educación"
                                            title="Espacio, Tiempo y Educación">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Espacio, Tiempo y Educación" class="bookshelf-journal-title">Espacio, Tiempo
                                    y Educación</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81897" class="ember-view"><a href="/libraries/603/journals/55756?sort=title"
                                id="ember81898" class="bookshelf-journal ember-view">
                                <div id="ember81899" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1951-6169.png"
                                            alt="Cover of e-Spania" title="e-Spania">
                                        <!---->
                                    </div>
                                </div>
                                <div title="e-Spania" class="bookshelf-journal-title">e-Spania</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81901" class="ember-view"><a href="/libraries/603/journals/381387?sort=title"
                                id="ember81902" class="bookshelf-journal ember-view">
                                <div id="ember81903" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2469-0961-0d71b20e-4506-45ca-bdfd-26bf51f42e01.png"
                                            alt="Cover of Estudios de Historia de España"
                                            title="Estudios de Historia de España">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudios de Historia de España" class="bookshelf-journal-title">Estudios de
                                    Historia de España</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81905" class="ember-view"><a href="/libraries/603/journals/57451?sort=title"
                                id="ember81906" class="bookshelf-journal ember-view">
                                <div id="ember81907" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0185-2620-f455de5b-cd5f-482c-a11d-5feee152e0c1.png"
                                            alt="Cover of Estudios de Historia Moderna y Contemporánea de México"
                                            title="Estudios de Historia Moderna y Contemporánea de México">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudios de Historia Moderna y Contemporánea de México"
                                    class="bookshelf-journal-title">Estudios de Historia Moderna y Contemporánea de
                                    México</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81909" class="ember-view"><a href="/libraries/603/journals/314379?sort=title"
                                id="ember81910" class="bookshelf-journal ember-view">
                                <div id="ember81911" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0187-6961.png"
                                            alt="Cover of Estudios Fronterizos" title="Estudios Fronterizos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudios Fronterizos" class="bookshelf-journal-title">Estudios Fronterizos
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81913" class="ember-view"><a href="/libraries/603/journals/57504?sort=title"
                                id="ember81914" class="bookshelf-journal ember-view">
                                <div id="ember81915" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0103-2186.png"
                                            alt="Cover of Estudos Históricos" title="Estudos Históricos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudos Históricos" class="bookshelf-journal-title">Estudos Históricos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81917" class="ember-view"><a href="/libraries/603/journals/57506?sort=title"
                                id="ember81918" class="bookshelf-journal ember-view">
                                <div id="ember81919" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0101-4064.png"
                                            alt="Cover of Estudos Ibero-Americanos" title="Estudos Ibero-Americanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudos Ibero-Americanos" class="bookshelf-journal-title">Estudos
                                    Ibero-Americanos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81921" class="ember-view"><a href="/libraries/603/journals/18265?sort=title"
                                id="ember81922" class="bookshelf-journal ember-view">
                                <div id="ember81923" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0014-1801.png"
                                            alt="Cover of Ethnohistory" title="Ethnohistory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethnohistory" class="bookshelf-journal-title">Ethnohistory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81925" class="ember-view"><a href="/libraries/603/journals/57559?sort=title"
                                id="ember81926" class="bookshelf-journal ember-view">
                                <div id="ember81927" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0353-1589.png"
                                            alt="Cover of Etnoantropolos̆ki Problemi / Issues in Ethnology and Anthropology"
                                            title="Etnoantropolos̆ki Problemi / Issues in Ethnology and Anthropology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etnoantropolos̆ki Problemi / Issues in Ethnology and Anthropology"
                                    class="bookshelf-journal-title">Etnoantropolos̆ki Problemi / Issues in Ethnology and
                                    Anthropology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81929" class="ember-view"><a href="/libraries/603/journals/32727?sort=title"
                                id="ember81930" class="bookshelf-journal ember-view">
                                <div id="ember81931" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2163-8217.png"
                                            alt="Cover of Etruscan Studies" title="Etruscan Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etruscan Studies" class="bookshelf-journal-title">Etruscan Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81933" class="ember-view"><a href="/libraries/603/journals/57589?sort=title"
                                id="ember81934" class="bookshelf-journal ember-view">
                                <div id="ember81935" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2102-5525.png"
                                            alt="Cover of Études Balkaniques" title="Études Balkaniques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Études Balkaniques" class="bookshelf-journal-title">Études Balkaniques</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81937" class="ember-view"><a href="/libraries/603/journals/341498?sort=title"
                                id="ember81938" class="bookshelf-journal ember-view">
                                <div id="ember81939" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2728-4395.png"
                                            alt="Cover of Etudes et Documents Berbères"
                                            title="Etudes et Documents Berbères">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etudes et Documents Berbères" class="bookshelf-journal-title">Etudes et
                                    Documents Berbères</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81941" class="ember-view"><a href="/libraries/603/journals/57681?sort=title"
                                id="ember81942" class="bookshelf-journal ember-view">
                                <div id="ember81943" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1777-537X.png"
                                            alt="Cover of Études Rurales" title="Études Rurales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Études Rurales" class="bookshelf-journal-title">Études Rurales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81945" class="ember-view"><a href="/libraries/603/journals/57691?sort=title"
                                id="ember81946" class="bookshelf-journal ember-view">
                                <div id="ember81947" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2426-6078.png"
                                            alt="Cover of Etudes Tsiganes" title="Etudes Tsiganes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etudes Tsiganes" class="bookshelf-journal-title">Etudes Tsiganes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81949" class="ember-view"><a href="/libraries/603/journals/372329?sort=title"
                                id="ember81950" class="bookshelf-journal ember-view">
                                <div id="ember81951" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2468-5623-a8b51f24-9680-46af-bfab-6b62c2edce3a.png"
                                            alt="Cover of Eurasian Studies" title="Eurasian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Eurasian Studies" class="bookshelf-journal-title">Eurasian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81953" class="ember-view"><a href="/libraries/603/journals/1852?sort=title"
                                id="ember81954" class="bookshelf-journal ember-view">
                                <div id="ember81955" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0265-6914.png"
                                            alt="Cover of European History Quarterly"
                                            title="European History Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European History Quarterly" class="bookshelf-journal-title">European History
                                    Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81957" class="ember-view"><a href="/libraries/603/journals/435908?sort=title"
                                id="ember81958" class="bookshelf-journal ember-view">
                                <div id="ember81959" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2666-7703.png"
                                            alt="Cover of European Journal for the History of Medicine and Health"
                                            title="European Journal for the History of Medicine and Health">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Journal for the History of Medicine and Health"
                                    class="bookshelf-journal-title">European Journal for the History of Medicine and
                                    Health</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81962" class="ember-view"><a href="/libraries/603/journals/17019?sort=title"
                                id="ember81963" class="bookshelf-journal ember-view">
                                <div id="ember81964" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0967-2567.png"
                                            alt="Cover of The European Journal of the History of Economic Thought"
                                            title="The European Journal of the History of Economic Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The European Journal of the History of Economic Thought"
                                    class="bookshelf-journal-title">The European Journal of the History of Economic
                                    Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81966" class="ember-view"><a href="/libraries/603/journals/16849?sort=title"
                                id="ember81967" class="bookshelf-journal ember-view">
                                <div id="ember81968" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1084-8770.png"
                                            alt="Cover of The European Legacy" title="The European Legacy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The European Legacy" class="bookshelf-journal-title">The European Legacy
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81970" class="ember-view"><a href="/libraries/603/journals/10515?sort=title"
                                id="ember81971" class="bookshelf-journal ember-view">
                                <div id="ember81972" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1361-4916.png"
                                            alt="Cover of European Review of Economic History"
                                            title="European Review of Economic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Review of Economic History" class="bookshelf-journal-title">
                                    European Review of Economic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81974" class="ember-view"><a href="/libraries/603/journals/57936?sort=title"
                                id="ember81975" class="bookshelf-journal ember-view">
                                <div id="ember81976" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1350-7486.png"
                                            alt="Cover of European Review of History / Revue européene d'histoire"
                                            title="European Review of History / Revue européene d'histoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Review of History / Revue européene d'histoire"
                                    class="bookshelf-journal-title">European Review of History / Revue européene
                                    d'histoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81978" class="ember-view"><a href="/libraries/603/journals/58160?sort=title"
                                id="ember81979" class="bookshelf-journal ember-view">
                                <div id="ember81980" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2053-9665.png"
                                            alt="Cover of Exchanges: The Interdisciplinary Research Journal"
                                            title="Exchanges: The Interdisciplinary Research Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Exchanges: The Interdisciplinary Research Journal"
                                    class="bookshelf-journal-title">Exchanges: The Interdisciplinary Research Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81982" class="ember-view"><a href="/libraries/603/journals/36408?sort=title"
                                id="ember81983" class="bookshelf-journal ember-view">
                                <div id="ember81984" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1041-2573.png"
                                            alt="Cover of Exemplaria" title="Exemplaria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Exemplaria" class="bookshelf-journal-title">Exemplaria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81986" class="ember-view"><a href="/libraries/603/journals/7201?sort=title"
                                id="ember81987" class="bookshelf-journal ember-view">
                                <div id="ember81988" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0014-4983.png"
                                            alt="Cover of Explorations in Economic History"
                                            title="Explorations in Economic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Explorations in Economic History" class="bookshelf-journal-title">
                                    Explorations in Economic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81990" class="ember-view"><a href="/libraries/603/journals/58235?sort=title"
                                id="ember81991" class="bookshelf-journal ember-view">
                                <div id="ember81992" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0098-2474.png"
                                            alt="Cover of Explorations in Renaissance culture"
                                            title="Explorations in Renaissance culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Explorations in Renaissance culture" class="bookshelf-journal-title">
                                    Explorations in Renaissance culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81994" class="ember-view"><a href="/libraries/603/journals/9808?sort=title"
                                id="ember81995" class="bookshelf-journal ember-view">
                                <div id="ember81996" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/default-journal-cover.png"
                                            alt="Cover of Le Fait Missionnaire" title="Le Fait Missionnaire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Le Fait Missionnaire" class="bookshelf-journal-title">Le Fait Missionnaire
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember81998" class="ember-view"><a href="/libraries/603/journals/36398?sort=title"
                                id="ember81999" class="bookshelf-journal ember-view">
                                <div id="ember82000" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1463-1180.png"
                                            alt="Cover of Family &amp; Community History"
                                            title="Family &amp; Community History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Family &amp; Community History" class="bookshelf-journal-title">Family &amp;
                                    Community History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82002" class="ember-view"><a href="/libraries/603/journals/9814?sort=title"
                                id="ember82003" class="bookshelf-journal ember-view">
                                <div id="ember82004" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2211-6249.png"
                                            alt="Cover of Fascism" title="Fascism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Fascism" class="bookshelf-journal-title">Fascism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82006" class="ember-view"><a href="/libraries/603/journals/19056?sort=title"
                                id="ember82007" class="bookshelf-journal ember-view">
                                <div id="ember82008" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0968-5650.png"
                                            alt="Cover of Financial History Review" title="Financial History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Financial History Review" class="bookshelf-journal-title">Financial History
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82010" class="ember-view"><a href="/libraries/603/journals/33377?sort=title"
                                id="ember82011" class="bookshelf-journal ember-view">
                                <div id="ember82012" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2156-4078.png"
                                            alt="Cover of Fire!!!" title="Fire!!!">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Fire!!!" class="bookshelf-journal-title">Fire!!!</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82014" class="ember-view"><a href="/libraries/603/journals/15568?sort=title"
                                id="ember82015" class="bookshelf-journal ember-view">
                                <div id="ember82016" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1947-5020.png"
                                            alt="Cover of First World War Studies" title="First World War Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="First World War Studies" class="bookshelf-journal-title">First World War
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82018" class="ember-view"><a href="/libraries/603/journals/247346?sort=title"
                                id="ember82019" class="bookshelf-journal ember-view">
                                <div id="ember82020" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0867-8294.png"
                                            alt="Cover of Folia Historica Cracoviensia"
                                            title="Folia Historica Cracoviensia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Folia Historica Cracoviensia" class="bookshelf-journal-title">Folia
                                    Historica Cracoviensia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82022" class="ember-view"><a href="/libraries/603/journals/40228?sort=title"
                                id="ember82023" class="bookshelf-journal ember-view">
                                <div id="ember82024" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1780-3187.png"
                                            alt="Cover of Food and History" title="Food and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Food and History" class="bookshelf-journal-title">Food and History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82026" class="ember-view"><a href="/libraries/603/journals/394346?sort=title"
                                id="ember82027" class="bookshelf-journal ember-view">
                                <div id="ember82028" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2589-5923-8a60bd6d-bd80-412f-91be-00786866feb1.webp"
                                            alt="Cover of Frankokratia : Journal for the Study of Greek Lands Under Latin Rule"
                                            title="Frankokratia : Journal for the Study of Greek Lands Under Latin Rule">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Frankokratia : Journal for the Study of Greek Lands Under Latin Rule"
                                    class="bookshelf-journal-title">Frankokratia : Journal for the Study of Greek Lands
                                    Under Latin Rule</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82030" class="ember-view"><a href="/libraries/603/journals/10831?sort=title"
                                id="ember82031" class="bookshelf-journal ember-view">
                                <div id="ember82032" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1539-3402.png"
                                            alt="Cover of French Colonial History" title="French Colonial History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="French Colonial History" class="bookshelf-journal-title">French Colonial
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82034" class="ember-view"><a href="/libraries/603/journals/18266?sort=title"
                                id="ember82035" class="bookshelf-journal ember-view">
                                <div id="ember82036" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0016-1071.png"
                                            alt="Cover of French Historical Studies" title="French Historical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="French Historical Studies" class="bookshelf-journal-title">French Historical
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82038" class="ember-view"><a href="/libraries/603/journals/10376?sort=title"
                                id="ember82039" class="bookshelf-journal ember-view">
                                <div id="ember82040" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0269-1191.png"
                                            alt="Cover of French History" title="French History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="French History" class="bookshelf-journal-title">French History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82042" class="ember-view"><a href="/libraries/603/journals/426886?sort=title"
                                id="ember82043" class="bookshelf-journal ember-view">
                                <div id="ember82044" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2539-4711-0d93325a-346d-4635-a582-bf8a9c4b72cc.png"
                                            alt="Cover of Fronteras de la Historia" title="Fronteras de la Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Fronteras de la Historia" class="bookshelf-journal-title">Fronteras de la
                                    Historia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82046" class="ember-view"><a href="/libraries/603/journals/723?sort=title"
                                id="ember82047" class="bookshelf-journal ember-view">
                                <div id="ember82048" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1673-3401.png"
                                            alt="Cover of Frontiers of History in China"
                                            title="Frontiers of History in China">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Frontiers of History in China" class="bookshelf-journal-title">Frontiers of
                                    History in China</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82050" class="ember-view"><a href="/libraries/603/journals/33251?sort=title"
                                id="ember82051" class="bookshelf-journal ember-view">
                                <div id="ember82052" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1529-3262.png"
                                            alt="Cover of Gastronomica" title="Gastronomica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gastronomica" class="bookshelf-journal-title">Gastronomica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82054" class="ember-view"><a href="/libraries/603/journals/114781?sort=title"
                                id="ember82055" class="bookshelf-journal ember-view">
                                <div id="ember82056" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1307-9778.png"
                                            alt="Cover of Gazi Akademik Bakış" title="Gazi Akademik Bakış">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gazi Akademik Bakış" class="bookshelf-journal-title">Gazi Akademik Bakış
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82058" class="ember-view"><a href="/libraries/603/journals/105523?sort=title"
                                id="ember82059" class="bookshelf-journal ember-view">
                                <div id="ember82060" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1303-0094.png"
                                            alt="Cover of Gaziantep University Journal of Social Sciences"
                                            title="Gaziantep University Journal of Social Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gaziantep University Journal of Social Sciences"
                                    class="bookshelf-journal-title">Gaziantep University Journal of Social Sciences
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82062" class="ember-view"><a href="/libraries/603/journals/7567?sort=title"
                                id="ember82063" class="bookshelf-journal ember-view">
                                <div id="ember82064" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1468-0424.png"
                                            alt="Cover of Gender &amp; History" title="Gender &amp; History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gender &amp; History" class="bookshelf-journal-title">Gender &amp; History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82066" class="ember-view"><a href="/libraries/603/journals/162754?sort=title"
                                id="ember82067" class="bookshelf-journal ember-view">
                                <div id="ember82068" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2313-5778.png"
                                            alt="Cover of Genealogy" title="Genealogy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Genealogy" class="bookshelf-journal-title">Genealogy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82070" class="ember-view"><a href="/libraries/603/journals/136523?sort=title"
                                id="ember82071" class="bookshelf-journal ember-view">
                                <div id="ember82072" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0213-0181-c0a018f7-cc90-41e9-8633-d197156db4e0.png"
                                            alt="Cover of Gerión : Revista de Historia Antigua"
                                            title="Gerión : Revista de Historia Antigua">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gerión : Revista de Historia Antigua" class="bookshelf-journal-title">Gerión
                                    : Revista de Historia Antigua</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82074" class="ember-view"><a href="/libraries/603/journals/10511?sort=title"
                                id="ember82075" class="bookshelf-journal ember-view">
                                <div id="ember82076" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0266-3554.png"
                                            alt="Cover of German History" title="German History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="German History" class="bookshelf-journal-title">German History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82078" class="ember-view"><a href="/libraries/603/journals/40299?sort=title"
                                id="ember82079" class="bookshelf-journal ember-view">
                                <div id="ember82080" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0149-7952.png"
                                            alt="Cover of German Studies Review" title="German Studies Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="German Studies Review" class="bookshelf-journal-title">German Studies Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82082" class="ember-view"><a href="/libraries/603/journals/268441?sort=title"
                                id="ember82083" class="bookshelf-journal ember-view">
                                <div id="ember82084" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2196-9000.png"
                                            alt="Cover of Geschichte und Gesellschaft"
                                            title="Geschichte und Gesellschaft">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Geschichte und Gesellschaft" class="bookshelf-journal-title">Geschichte und
                                    Gesellschaft</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82086" class="ember-view"><a href="/libraries/603/journals/37467?sort=title"
                                id="ember82087" class="bookshelf-journal ember-view">
                                <div id="ember82088" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0436-029X.png"
                                            alt="Cover of Gladius" title="Gladius">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gladius" class="bookshelf-journal-title">Gladius</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82090" class="ember-view"><a href="/libraries/603/journals/141302?sort=title"
                                id="ember82091" class="bookshelf-journal ember-view">
                                <div id="ember82092" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1973-3739-f25a7f4f-5c90-4867-b596-49bffa1b1c30.png"
                                            alt="Cover of Global Environment : A Journal of Transdisciplinary History"
                                            title="Global Environment : A Journal of Transdisciplinary History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Global Environment : A Journal of Transdisciplinary History"
                                    class="bookshelf-journal-title">Global Environment : A Journal of Transdisciplinary
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82094" class="ember-view"><a href="/libraries/603/journals/60486?sort=title"
                                id="ember82095" class="bookshelf-journal ember-view">
                                <div id="ember82096" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2054-9547.png"
                                            alt="Cover of Global Food History" title="Global Food History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Global Food History" class="bookshelf-journal-title">Global Food History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82098" class="ember-view"><a href="/libraries/603/journals/138052?sort=title"
                                id="ember82099" class="bookshelf-journal ember-view">
                                <div id="ember82100" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2077-1800.png"
                                            alt="Cover of Granì" title="Granì">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Granì" class="bookshelf-journal-title">Granì</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82102" class="ember-view"><a href="/libraries/603/journals/9786?sort=title"
                                id="ember82103" class="bookshelf-journal ember-view">
                                <div id="ember82104" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0167-3831.png"
                                            alt="Cover of Grotiana" title="Grotiana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Grotiana" class="bookshelf-journal-title">Grotiana</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82106" class="ember-view"><a href="/libraries/603/journals/61123?sort=title"
                                id="ember82107" class="bookshelf-journal ember-view">
                                <div id="ember82108" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2460-7916.png"
                                            alt="Cover of Harmoni Sosial : Jurnal Pendidikan IPS"
                                            title="Harmoni Sosial : Jurnal Pendidikan IPS">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Harmoni Sosial : Jurnal Pendidikan IPS" class="bookshelf-journal-title">
                                    Harmoni Sosial : Jurnal Pendidikan IPS</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82110" class="ember-view"><a href="/libraries/603/journals/61234?sort=title"
                                id="ember82111" class="bookshelf-journal ember-view">
                                <div id="ember82112" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0440-5145.png"
                                            alt="Cover of Hawaiian Journal of History"
                                            title="Hawaiian Journal of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hawaiian Journal of History" class="bookshelf-journal-title">Hawaiian
                                    Journal of History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82114" class="ember-view"><a href="/libraries/603/journals/33378?sort=title"
                                id="ember82115" class="bookshelf-journal ember-view">
                                <div id="ember82116" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1442-1771.png"
                                            alt="Cover of Health and History" title="Health and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Health and History" class="bookshelf-journal-title">Health and History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82118" class="ember-view"><a href="/libraries/603/journals/128923?sort=title"
                                id="ember82119" class="bookshelf-journal ember-view">
                                <div id="ember82120" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0017-9841.png"
                                            alt="Cover of Heimen" title="Heimen">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Heimen" class="bookshelf-journal-title">Heimen</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82122" class="ember-view"><a href="/libraries/603/journals/398247?sort=title"
                                id="ember82123" class="bookshelf-journal ember-view">
                                <div id="ember82124" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2688-8211.png"
                                            alt="Cover of Hiperboreea" title="Hiperboreea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hiperboreea" class="bookshelf-journal-title">Hiperboreea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82126" class="ember-view"><a href="/libraries/603/journals/61654?sort=title"
                                id="ember82127" class="bookshelf-journal ember-view">
                                <div id="ember82128" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2328-1308.png"
                                            alt="Cover of Hipogrifo : Revista de Literatura y Cultura del Siglo de Oro"
                                            title="Hipogrifo : Revista de Literatura y Cultura del Siglo de Oro">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hipogrifo : Revista de Literatura y Cultura del Siglo de Oro"
                                    class="bookshelf-journal-title">Hipogrifo : Revista de Literatura y Cultura del
                                    Siglo de Oro</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82130" class="ember-view"><a href="/libraries/603/journals/37484?sort=title"
                                id="ember82131" class="bookshelf-journal ember-view">
                                <div id="ember82132" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2141.png"
                                            alt="Cover of Hispania" title="Hispania">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hispania" class="bookshelf-journal-title">Hispania</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82134" class="ember-view"><a href="/libraries/603/journals/37478?sort=title"
                                id="ember82135" class="bookshelf-journal ember-view">
                                <div id="ember82136" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-215X.png"
                                            alt="Cover of Hispania Sacra" title="Hispania Sacra">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hispania Sacra" class="bookshelf-journal-title">Hispania Sacra</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82138" class="ember-view"><a href="/libraries/603/journals/18268?sort=title"
                                id="ember82139" class="bookshelf-journal ember-view">
                                <div id="ember82140" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2168.png"
                                            alt="Cover of Hispanic American Historical Review"
                                            title="Hispanic American Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hispanic American Historical Review" class="bookshelf-journal-title">
                                    Hispanic American Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82142" class="ember-view"><a href="/libraries/603/journals/61672?sort=title"
                                id="ember82143" class="bookshelf-journal ember-view">
                                <div id="ember82144" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1957-7745.png"
                                            alt="Cover of Histoire &amp; Mesure" title="Histoire &amp; Mesure">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histoire &amp; Mesure" class="bookshelf-journal-title">Histoire &amp; Mesure
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82146" class="ember-view"><a href="/libraries/603/journals/247250?sort=title"
                                id="ember82147" class="bookshelf-journal ember-view">
                                <div id="ember82148" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1254-728X.png"
                                            alt="Cover of Histoire &amp; Sociétés Rurales"
                                            title="Histoire &amp; Sociétés Rurales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histoire &amp; Sociétés Rurales" class="bookshelf-journal-title">Histoire
                                    &amp; Sociétés Rurales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82150" class="ember-view"><a href="/libraries/603/journals/36026?sort=title"
                                id="ember82151" class="bookshelf-journal ember-view">
                                <div id="ember82152" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0752-5702.png"
                                            alt="Cover of Histoire, économie &amp; société"
                                            title="Histoire, économie &amp; société">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histoire, économie &amp; société" class="bookshelf-journal-title">Histoire,
                                    économie &amp; société</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82154" class="ember-view"><a href="/libraries/603/journals/32211?sort=title"
                                id="ember82155" class="bookshelf-journal ember-view">
                                <div id="ember82156" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2257.png"
                                            alt="Cover of Histoire sociale/Social history"
                                            title="Histoire sociale/Social history">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histoire sociale/Social history" class="bookshelf-journal-title">Histoire
                                    sociale/Social history</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82158" class="ember-view"><a href="/libraries/603/journals/36152?sort=title"
                                id="ember82159" class="bookshelf-journal ember-view">
                                <div id="ember82160" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1954-3670.png"
                                            alt="Cover of Histoire@Politique" title="Histoire@Politique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histoire@Politique" class="bookshelf-journal-title">Histoire@Politique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82162" class="ember-view"><a href="/libraries/603/journals/61684?sort=title"
                                id="ember82163" class="bookshelf-journal ember-view">
                                <div id="ember82164" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2145-132X.png"
                                            alt="Cover of HISTOReLo: Revista de Historia Regional y Local"
                                            title="HISTOReLo: Revista de Historia Regional y Local">
                                        <!---->
                                    </div>
                                </div>
                                <div title="HISTOReLo: Revista de Historia Regional y Local"
                                    class="bookshelf-journal-title">HISTOReLo: Revista de Historia Regional y Local
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82166" class="ember-view"><a href="/libraries/603/journals/61688?sort=title"
                                id="ember82167" class="bookshelf-journal ember-view">
                                <div id="ember82168" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0717-7194-1f7759b1-5b5f-4043-a763-4a95e479eb30.png"
                                            alt="Cover of Historia" title="Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia" class="bookshelf-journal-title">Historia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82170" class="ember-view"><a href="/libraries/603/journals/244608?sort=title"
                                id="ember82171" class="bookshelf-journal ember-view">
                                <div id="ember82172" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2337-4713.png"
                                            alt="Cover of Historia : Jurnal Program Studi Pendidikan Sejarah"
                                            title="Historia : Jurnal Program Studi Pendidikan Sejarah">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia : Jurnal Program Studi Pendidikan Sejarah"
                                    class="bookshelf-journal-title">Historia : Jurnal Program Studi Pendidikan Sejarah
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82174" class="ember-view"><a href="/libraries/603/journals/61694?sort=title"
                                id="ember82175" class="bookshelf-journal ember-view">
                                <div id="ember82176" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0122-8803-3f778adb-096c-4778-b88b-86e5d4226bed.png"
                                            alt="Cover of Historia Caribe" title="Historia Caribe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia Caribe" class="bookshelf-journal-title">Historia Caribe</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82178" class="ember-view"><a href="/libraries/603/journals/61696?sort=title"
                                id="ember82179" class="bookshelf-journal ember-view">
                                <div id="ember82180" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0104-5970.png"
                                            alt="Cover of Historia, Ciencias, Saude : Manguinhos"
                                            title="Historia, Ciencias, Saude : Manguinhos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia, Ciencias, Saude : Manguinhos" class="bookshelf-journal-title">
                                    Historia, Ciencias, Saude : Manguinhos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82182" class="ember-view"><a href="/libraries/603/journals/61699?sort=title"
                                id="ember82183" class="bookshelf-journal ember-view">
                                <div id="ember82184" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0121-1617.png"
                                            alt="Cover of Historia Crítica" title="Historia Crítica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia Crítica" class="bookshelf-journal-title">Historia Crítica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82186" class="ember-view"><a href="/libraries/603/journals/61701?sort=title"
                                id="ember82187" class="bookshelf-journal ember-view">
                                <div id="ember82188" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1414-3518.png"
                                            alt="Cover of História da Educação" title="História da Educação">
                                        <!---->
                                    </div>
                                </div>
                                <div title="História da Educação" class="bookshelf-journal-title">História da Educação
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82190" class="ember-view"><a href="/libraries/603/journals/61703?sort=title"
                                id="ember82191" class="bookshelf-journal ember-view">
                                <div id="ember82192" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0212-0267.png"
                                            alt="Cover of Historia de la Educación" title="Historia de la Educación">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia de la Educación" class="bookshelf-journal-title">Historia de la
                                    Educación</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82194" class="ember-view"><a href="/libraries/603/journals/148428?sort=title"
                                id="ember82195" class="bookshelf-journal ember-view">
                                <div id="ember82196" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2318-1729-16f91463-f6c2-4b31-bdfe-b19203207982.png"
                                            alt="Cover of História, Histórias" title="História, Histórias">
                                        <!---->
                                    </div>
                                </div>
                                <div title="História, Histórias" class="bookshelf-journal-title">História, Histórias
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82198" class="ember-view"><a href="/libraries/603/journals/1690?sort=title"
                                id="ember82199" class="bookshelf-journal ember-view">
                                <div id="ember82200" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0315-0860.png"
                                            alt="Cover of Historia Mathematica" title="Historia Mathematica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia Mathematica" class="bookshelf-journal-title">Historia Mathematica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82203" class="ember-view"><a href="/libraries/603/journals/61718?sort=title"
                                id="ember82204" class="bookshelf-journal ember-view">
                                <div id="ember82205" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0717-5248.png"
                                            alt="Cover of Historia Social y de las Mentalidades"
                                            title="Historia Social y de las Mentalidades">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia Social y de las Mentalidades" class="bookshelf-journal-title">
                                    Historia Social y de las Mentalidades</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82207" class="ember-view"><a href="/libraries/603/journals/61716?sort=title"
                                id="ember82208" class="bookshelf-journal ember-view">
                                <div id="ember82209" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1137-0734-2c9d3e72-f3d6-4b67-9b2d-7f07938dc231.png"
                                            alt="Cover of Historia y Comunicación Social"
                                            title="Historia y Comunicación Social">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia y Comunicación Social" class="bookshelf-journal-title">Historia y
                                    Comunicación Social</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82211" class="ember-view"><a href="/libraries/603/journals/61722?sort=title"
                                id="ember82212" class="bookshelf-journal ember-view">
                                <div id="ember82213" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2027-5137-54857c9d-3bb8-4afb-ac5c-e5b267f5c41e.png"
                                            alt="Cover of Historia y Memoria" title="Historia y Memoria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia y Memoria" class="bookshelf-journal-title">Historia y Memoria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82215" class="ember-view"><a href="/libraries/603/journals/61721?sort=title"
                                id="ember82216" class="bookshelf-journal ember-view">
                                <div id="ember82217" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1575-0361-b22f8721-195b-46bc-aa93-c0b544a111c4.png"
                                            alt="Cover of Historia y Política" title="Historia y Política">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia y Política" class="bookshelf-journal-title">Historia y Política
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82219" class="ember-view"><a href="/libraries/603/journals/61723?sort=title"
                                id="ember82220" class="bookshelf-journal ember-view">
                                <div id="ember82221" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0121-8417.png"
                                            alt="Cover of Historia y Sociedad" title="Historia y Sociedad">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historia y Sociedad" class="bookshelf-journal-title">Historia y Sociedad
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82223" class="ember-view"><a href="/libraries/603/journals/4722?sort=title"
                                id="ember82224" class="bookshelf-journal ember-view">
                                <div id="ember82225" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2370.png"
                                            alt="Cover of Historian" title="Historian">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historian" class="bookshelf-journal-title">Historian</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82227" class="ember-view"><a href="/libraries/603/journals/309139?sort=title"
                                id="ember82228" class="bookshelf-journal ember-view">
                                <div id="ember82229" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2223-375X-60910cd0-4763-49e1-8eb1-923ddc4c5cd9.png"
                                            alt="Cover of Histórica" title="Histórica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histórica" class="bookshelf-journal-title">Histórica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82231" class="ember-view"><a href="/libraries/603/journals/17629?sort=title"
                                id="ember82232" class="bookshelf-journal ember-view">
                                <div id="ember82233" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0891-2963.png"
                                            alt="Cover of Historical Biology" title="Historical Biology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Biology" class="bookshelf-journal-title">Historical Biology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82235" class="ember-view"><a href="/libraries/603/journals/61735?sort=title"
                                id="ember82236" class="bookshelf-journal ember-view">
                                <div id="ember82237" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2331-7523-6e69e432-0f8d-4a50-bfe3-ce4ddf966811.png"
                                            alt="Cover of Historical Geography" title="Historical Geography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Geography" class="bookshelf-journal-title">Historical Geography
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82239" class="ember-view"><a href="/libraries/603/journals/19043?sort=title"
                                id="ember82240" class="bookshelf-journal ember-view">
                                <div id="ember82241" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-246X.png"
                                            alt="Cover of The Historical Journal" title="The Historical Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Historical Journal" class="bookshelf-journal-title">The Historical
                                    Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82243" class="ember-view"><a href="/libraries/603/journals/16760?sort=title"
                                id="ember82244" class="bookshelf-journal ember-view">
                                <div id="ember82245" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0143-9685.png"
                                            alt="Cover of Historical Journal of Film, Radio and Television"
                                            title="Historical Journal of Film, Radio and Television">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Journal of Film, Radio and Television"
                                    class="bookshelf-journal-title">Historical Journal of Film, Radio and Television
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82247" class="ember-view"><a href="/libraries/603/journals/17580?sort=title"
                                id="ember82248" class="bookshelf-journal ember-view">
                                <div id="ember82249" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0161-5440.png"
                                            alt="Cover of Historical Methods: A Journal of Quantitative and Interdisciplinary History"
                                            title="Historical Methods: A Journal of Quantitative and Interdisciplinary History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Methods: A Journal of Quantitative and Interdisciplinary History"
                                    class="bookshelf-journal-title">Historical Methods: A Journal of Quantitative and
                                    Interdisciplinary History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82251" class="ember-view"><a href="/libraries/603/journals/18015?sort=title"
                                id="ember82252" class="bookshelf-journal ember-view">
                                <div id="ember82253" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0727-3061.png"
                                            alt="Cover of Historical Records of Australian Science"
                                            title="Historical Records of Australian Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Records of Australian Science" class="bookshelf-journal-title">
                                    Historical Records of Australian Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82255" class="ember-view"><a href="/libraries/603/journals/39882?sort=title"
                                id="ember82256" class="bookshelf-journal ember-view">
                                <div id="ember82257" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0315-7997.png"
                                            alt="Cover of Historical Reflections" title="Historical Reflections">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Reflections" class="bookshelf-journal-title">Historical
                                    Reflections</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82259" class="ember-view"><a href="/libraries/603/journals/11153?sort=title"
                                id="ember82260" class="bookshelf-journal ember-view">
                                <div id="ember82261" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0950-3471.png"
                                            alt="Cover of Historical Research" title="Historical Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Research" class="bookshelf-journal-title">Historical Research
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82263" class="ember-view"><a href="/libraries/603/journals/141896?sort=title"
                                id="ember82264" class="bookshelf-journal ember-view">
                                <div id="ember82265" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1790-3572.png"
                                            alt="Cover of Historical Review / La Revue Historique"
                                            title="Historical Review / La Revue Historique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Review / La Revue Historique" class="bookshelf-journal-title">
                                    Historical Review / La Revue Historique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82267" class="ember-view"><a href="/libraries/603/journals/38786?sort=title"
                                id="ember82268" class="bookshelf-journal ember-view">
                                <div id="ember82269" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1362-1572.png"
                                            alt="Cover of Historical Studies in Industrial Relations"
                                            title="Historical Studies in Industrial Relations">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Studies in Industrial Relations" class="bookshelf-journal-title">
                                    Historical Studies in Industrial Relations</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82271" class="ember-view"><a href="/libraries/603/journals/33276?sort=title"
                                id="ember82272" class="bookshelf-journal ember-view">
                                <div id="ember82273" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1939-1811.png"
                                            alt="Cover of Historical Studies in the Natural Sciences"
                                            title="Historical Studies in the Natural Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Studies in the Natural Sciences" class="bookshelf-journal-title">
                                    Historical Studies in the Natural Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82275" class="ember-view"><a href="/libraries/603/journals/33428?sort=title"
                                id="ember82276" class="bookshelf-journal ember-view">
                                <div id="ember82277" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0890-9997.png"
                                            alt="Cover of Historical Studies in the Physical and Biological Sciences"
                                            title="Historical Studies in the Physical and Biological Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historical Studies in the Physical and Biological Sciences"
                                    class="bookshelf-journal-title">Historical Studies in the Physical and Biological
                                    Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82279" class="ember-view"><a href="/libraries/603/journals/10927?sort=title"
                                id="ember82280" class="bookshelf-journal ember-view">
                                <div id="ember82281" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1941-4188.png"
                                            alt="Cover of Historically Speaking" title="Historically Speaking">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historically Speaking" class="bookshelf-journal-title">Historically Speaking
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82283" class="ember-view"><a href="/libraries/603/journals/61750?sort=title"
                                id="ember82284" class="bookshelf-journal ember-view">
                                <div id="ember82285" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1804-0616.png"
                                            alt="Cover of Historická Sociologie" title="Historická Sociologie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historická Sociologie" class="bookshelf-journal-title">Historická Sociologie
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82287" class="ember-view"><a href="/libraries/603/journals/405749?sort=title"
                                id="ember82288" class="bookshelf-journal ember-view">
                                <div id="ember82289" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2409-9252-18e555bd-a990-4b89-963c-2c622fb8df1c.png"
                                            alt="Cover of Histories" title="Histories">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Histories" class="bookshelf-journal-title">Histories</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82291" class="ember-view"><a href="/libraries/603/journals/61758?sort=title"
                                id="ember82292" class="bookshelf-journal ember-view">
                                <div id="ember82293" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2194-4032.png"
                                            alt="Cover of Historische Anthropologie" title="Historische Anthropologie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historische Anthropologie" class="bookshelf-journal-title">Historische
                                    Anthropologie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82295" class="ember-view"><a href="/libraries/603/journals/40797?sort=title"
                                id="ember82296" class="bookshelf-journal ember-view">
                                <div id="ember82297" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2196-680X.png"
                                            alt="Cover of Historische Zeitschrift" title="Historische Zeitschrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historische Zeitschrift" class="bookshelf-journal-title">Historische
                                    Zeitschrift</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82299" class="ember-view"><a href="/libraries/603/journals/38766?sort=title"
                                id="ember82300" class="bookshelf-journal ember-view">
                                <div id="ember82301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2194-4040.png"
                                            alt="Cover of Historisch-Politische Mitteilungen"
                                            title="Historisch-Politische Mitteilungen">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historisch-Politische Mitteilungen" class="bookshelf-journal-title">
                                    Historisch-Politische Mitteilungen</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82303" class="ember-view"><a href="/libraries/603/journals/127651?sort=title"
                                id="ember82304" class="bookshelf-journal ember-view">
                                <div id="ember82305" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-263X.png"
                                            alt="Cover of Historisk tidsskrift" title="Historisk tidsskrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Historisk tidsskrift" class="bookshelf-journal-title">Historisk tidsskrift
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82307" class="ember-view"><a href="/libraries/603/journals/4759?sort=title"
                                id="ember82308" class="bookshelf-journal ember-view">
                                <div id="ember82309" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2648.png"
                                            alt="Cover of History" title="History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History" class="bookshelf-journal-title">History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82311" class="ember-view"><a href="/libraries/603/journals/33359?sort=title"
                                id="ember82312" class="bookshelf-journal ember-view">
                                <div id="ember82313" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1527-1994.png"
                                            alt="Cover of History &amp; Memory" title="History &amp; Memory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History &amp; Memory" class="bookshelf-journal-title">History &amp; Memory
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82315" class="ember-view"><a href="/libraries/603/journals/16606?sort=title"
                                id="ember82316" class="bookshelf-journal ember-view">
                                <div id="ember82317" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0391-9714.png"
                                            alt="Cover of History &amp; Philosophy of the Life Sciences"
                                            title="History &amp; Philosophy of the Life Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History &amp; Philosophy of the Life Sciences"
                                    class="bookshelf-journal-title">History &amp; Philosophy of the Life Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82319" class="ember-view"><a href="/libraries/603/journals/7584?sort=title"
                                id="ember82320" class="bookshelf-journal ember-view">
                                <div id="ember82321" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2230-8075.png"
                                            alt="Cover of History and Sociology of South Asia"
                                            title="History and Sociology of South Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History and Sociology of South Asia" class="bookshelf-journal-title">History
                                    and Sociology of South Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82323" class="ember-view"><a href="/libraries/603/journals/17448?sort=title"
                                id="ember82324" class="bookshelf-journal ember-view">
                                <div id="ember82325" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0734-1512.png"
                                            alt="Cover of History and Technology" title="History and Technology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History and Technology" class="bookshelf-journal-title">History and
                                    Technology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82327" class="ember-view"><a href="/libraries/603/journals/4767?sort=title"
                                id="ember82328" class="bookshelf-journal ember-view">
                                <div id="ember82329" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2656.png"
                                            alt="Cover of History and Theory" title="History and Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History and Theory" class="bookshelf-journal-title">History and Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82331" class="ember-view"><a href="/libraries/603/journals/6017?sort=title"
                                id="ember82332" class="bookshelf-journal ember-view">
                                <div id="ember82333" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1478-0542.png"
                                            alt="Cover of History Compass" title="History Compass">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History Compass" class="bookshelf-journal-title">History Compass</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82335" class="ember-view"><a href="/libraries/603/journals/364509?sort=title"
                                id="ember82336" class="bookshelf-journal ember-view">
                                <div id="ember82337" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1472-9474.png"
                                            alt="Cover of History Education Research Journal"
                                            title="History Education Research Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History Education Research Journal" class="bookshelf-journal-title">History
                                    Education Research Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82339" class="ember-view"><a href="/libraries/603/journals/10827?sort=title"
                                id="ember82340" class="bookshelf-journal ember-view">
                                <div id="ember82341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0361-5413.png"
                                            alt="Cover of History in Africa" title="History in Africa">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History in Africa" class="bookshelf-journal-title">History in Africa</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82343" class="ember-view"><a href="/libraries/603/journals/6749?sort=title"
                                id="ember82344" class="bookshelf-journal ember-view">
                                <div id="ember82345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2680.png"
                                            alt="Cover of History of Education Quarterly"
                                            title="History of Education Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Education Quarterly" class="bookshelf-journal-title">History of
                                    Education Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82347" class="ember-view"><a href="/libraries/603/journals/16462?sort=title"
                                id="ember82348" class="bookshelf-journal ember-view">
                                <div id="ember82349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0191-6599.png"
                                            alt="Cover of History of European Ideas" title="History of European Ideas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of European Ideas" class="bookshelf-journal-title">History of
                                    European Ideas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82351" class="ember-view"><a href="/libraries/603/journals/61783?sort=title"
                                id="ember82352" class="bookshelf-journal ember-view">
                                <div id="ember82353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2379-3163.png"
                                            alt="Cover of History of Humanities" title="History of Humanities">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Humanities" class="bookshelf-journal-title">History of Humanities
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82355" class="ember-view"><a href="/libraries/603/journals/17769?sort=title"
                                id="ember82356" class="bookshelf-journal ember-view">
                                <div id="ember82357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0308-7298.png"
                                            alt="Cover of History of Photography" title="History of Photography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Photography" class="bookshelf-journal-title">History of
                                    Photography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82359" class="ember-view"><a href="/libraries/603/journals/3110?sort=title"
                                id="ember82360" class="bookshelf-journal ember-view">
                                <div id="ember82361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0957-154X.png"
                                            alt="Cover of History of Psychiatry" title="History of Psychiatry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Psychiatry" class="bookshelf-journal-title">History of Psychiatry
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82363" class="ember-view"><a href="/libraries/603/journals/21090?sort=title"
                                id="ember82364" class="bookshelf-journal ember-view">
                                <div id="ember82365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1093-4510.png"
                                            alt="Cover of History of Psychology" title="History of Psychology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Psychology" class="bookshelf-journal-title">History of Psychology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82367" class="ember-view"><a href="/libraries/603/journals/33305?sort=title"
                                id="ember82368" class="bookshelf-journal ember-view">
                                <div id="ember82369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0018-2710.png"
                                            alt="Cover of History of Religions" title="History of Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Religions" class="bookshelf-journal-title">History of Religions
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82371" class="ember-view"><a href="/libraries/603/journals/61781?sort=title"
                                id="ember82372" class="bookshelf-journal ember-view">
                                <div id="ember82373" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2373-518X.png"
                                            alt="Cover of History of Retailing and Consumption"
                                            title="History of Retailing and Consumption">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Retailing and Consumption" class="bookshelf-journal-title">
                                    History of Retailing and Consumption</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82375" class="ember-view"><a href="/libraries/603/journals/39833?sort=title"
                                id="ember82376" class="bookshelf-journal ember-view">
                                <div id="ember82377" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/default-journal-cover.png"
                                            alt="Cover of History of Science" title="History of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Science" class="bookshelf-journal-title">History of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82379" class="ember-view"><a href="/libraries/603/journals/177211?sort=title"
                                id="ember82380" class="bookshelf-journal ember-view">
                                <div id="ember82381" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2369-775X.png"
                                            alt="Cover of History of Science in South Asia"
                                            title="History of Science in South Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Science in South Asia" class="bookshelf-journal-title">History of
                                    Science in South Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82383" class="ember-view"><a href="/libraries/603/journals/16415?sort=title"
                                id="ember82384" class="bookshelf-journal ember-view">
                                <div id="ember82385" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1081-602X.png"
                                            alt="Cover of The History of the Family" title="The History of the Family">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The History of the Family" class="bookshelf-journal-title">The History of
                                    the Family</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82387" class="ember-view"><a href="/libraries/603/journals/1200?sort=title"
                                id="ember82388" class="bookshelf-journal ember-view">
                                <div id="ember82389" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0952-6951.png"
                                            alt="Cover of History of the Human Sciences"
                                            title="History of the Human Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of the Human Sciences" class="bookshelf-journal-title">History of
                                    the Human Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82391" class="ember-view"><a href="/libraries/603/journals/33465?sort=title"
                                id="ember82392" class="bookshelf-journal ember-view">
                                <div id="ember82393" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2159-9785.png"
                                            alt="Cover of History of the Present" title="History of the Present">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of the Present" class="bookshelf-journal-title">History of the
                                    Present</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82395" class="ember-view"><a href="/libraries/603/journals/17612?sort=title"
                                id="ember82396" class="bookshelf-journal ember-view">
                                <div id="ember82397" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0361-2759.png"
                                            alt="Cover of History: Reviews of New Books"
                                            title="History: Reviews of New Books">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History: Reviews of New Books" class="bookshelf-journal-title">History:
                                    Reviews of New Books</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82399" class="ember-view"><a href="/libraries/603/journals/10379?sort=title"
                                id="ember82400" class="bookshelf-journal ember-view">
                                <div id="ember82401" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1363-3554.png"
                                            alt="Cover of History Workshop Journal" title="History Workshop Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History Workshop Journal" class="bookshelf-journal-title">History Workshop
                                    Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82403" class="ember-view"><a href="/libraries/603/journals/9788?sort=title"
                                id="ember82404" class="bookshelf-journal ember-view">
                                <div id="ember82405" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0921-5891.png"
                                            alt="Cover of Hobbes Studies" title="Hobbes Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hobbes Studies" class="bookshelf-journal-title">Hobbes Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82407" class="ember-view"><a href="/libraries/603/journals/10352?sort=title"
                                id="ember82408" class="bookshelf-journal ember-view">
                                <div id="ember82409" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/8756-6583.png"
                                            alt="Cover of Holocaust and Genocide Studies"
                                            title="Holocaust and Genocide Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Holocaust and Genocide Studies" class="bookshelf-journal-title">Holocaust
                                    and Genocide Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82411" class="ember-view"><a href="/libraries/603/journals/61849?sort=title"
                                id="ember82412" class="bookshelf-journal ember-view">
                                <div id="ember82413" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1750-4902.png"
                                            alt="Cover of Holocaust Studies" title="Holocaust Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Holocaust Studies" class="bookshelf-journal-title">Holocaust Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82415" class="ember-view"><a href="/libraries/603/journals/33447?sort=title"
                                id="ember82416" class="bookshelf-journal ember-view">
                                <div id="ember82417" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2152-5188.png"
                                            alt="Cover of HOPOS: The Journal of the International Society for the History of Philosophy of Science"
                                            title="HOPOS: The Journal of the International Society for the History of Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="HOPOS: The Journal of the International Society for the History of Philosophy of Science"
                                    class="bookshelf-journal-title">HOPOS: The Journal of the International Society for
                                    the History of Philosophy of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82419" class="ember-view"><a href="/libraries/603/journals/126860?sort=title"
                                id="ember82420" class="bookshelf-journal ember-view">
                                <div id="ember82421" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/16467752-0e3d0b3d-5975-4bcf-9f08-77b112d33cae.png"
                                            alt="Cover of HoST : Journal  of History of Science and Technology"
                                            title="HoST : Journal  of History of Science and Technology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="HoST : Journal  of History of Science and Technology"
                                    class="bookshelf-journal-title">HoST : Journal of History of Science and Technology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82423" class="ember-view"><a href="/libraries/603/journals/62242?sort=title"
                                id="ember82424" class="bookshelf-journal ember-view">
                                <div id="ember82425" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1298-6216.png"
                                            alt="Cover of Hypothèses" title="Hypothèses">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hypothèses" class="bookshelf-journal-title">Hypothèses</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82427" class="ember-view"><a href="/libraries/603/journals/263637?sort=title"
                                id="ember82428" class="bookshelf-journal ember-view">
                                <div id="ember82429" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2386-5768-e09e26a3-fdf0-4ada-906d-53719e629530.png"
                                            alt="Cover of Iberian Journal of the History of Economic Thought"
                                            title="Iberian Journal of the History of Economic Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Iberian Journal of the History of Economic Thought"
                                    class="bookshelf-journal-title">Iberian Journal of the History of Economic Thought
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82431" class="ember-view"><a href="/libraries/603/journals/265088?sort=title"
                                id="ember82432" class="bookshelf-journal ember-view">
                                <div id="ember82433" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2002-4509.png"
                                            alt="Cover of Iberoamericana : Nordic Journal of Latin American and Caribbean Studies"
                                            title="Iberoamericana : Nordic Journal of Latin American and Caribbean Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Iberoamericana : Nordic Journal of Latin American and Caribbean Studies"
                                    class="bookshelf-journal-title">Iberoamericana : Nordic Journal of Latin American
                                    and Caribbean Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82435" class="ember-view"><a href="/libraries/603/journals/393?sort=title"
                                id="ember82436" class="bookshelf-journal ember-view">
                                <div id="ember82437" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1058-6180.png"
                                            alt="Cover of IEEE Annals of the History of Computing"
                                            title="IEEE Annals of the History of Computing">
                                        <!---->
                                    </div>
                                </div>
                                <div title="IEEE Annals of the History of Computing" class="bookshelf-journal-title">
                                    IEEE Annals of the History of Computing</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82439" class="ember-view"><a href="/libraries/603/journals/146555?sort=title"
                                id="ember82440" class="bookshelf-journal ember-view">
                                <div id="ember82441" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2314-3908-fae6a2b5-d3bb-4779-8f88-cb9f1277d6a8.png"
                                            alt="Cover of IHS : Antiguos Jesuitas en Iberoamérica"
                                            title="IHS : Antiguos Jesuitas en Iberoamérica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="IHS : Antiguos Jesuitas en Iberoamérica" class="bookshelf-journal-title">IHS
                                    : Antiguos Jesuitas en Iberoamérica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82444" class="ember-view"><a href="/libraries/603/journals/9761?sort=title"
                                id="ember82445" class="bookshelf-journal ember-view">
                                <div id="ember82446" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1871-7993.png"
                                            alt="Cover of Images" title="Images">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Images" class="bookshelf-journal-title">Images</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82448" class="ember-view"><a href="/libraries/603/journals/62595?sort=title"
                                id="ember82449" class="bookshelf-journal ember-view">
                                <div id="ember82450" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0308-5694.png"
                                            alt="Cover of Imago Mundi" title="Imago Mundi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Imago Mundi" class="bookshelf-journal-title">Imago Mundi</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82452" class="ember-view"><a href="/libraries/603/journals/313712?sort=title"
                                id="ember82453" class="bookshelf-journal ember-view">
                                <div id="ember82454" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2469-0457-6342e0bc-7196-4ef1-b7a6-7f9a27da8f47.png"
                                            alt="Cover of Improntas de la Historia y la Comunicación"
                                            title="Improntas de la Historia y la Comunicación">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Improntas de la Historia y la Comunicación" class="bookshelf-journal-title">
                                    Improntas de la Historia y la Comunicación</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82456" class="ember-view"><a href="/libraries/603/journals/62703?sort=title"
                                id="ember82457" class="bookshelf-journal ember-view">
                                <div id="ember82458" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0169-3379.png"
                                            alt="Cover of Incontri : Rivista Europea di Studi Italiani"
                                            title="Incontri : Rivista Europea di Studi Italiani">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Incontri : Rivista Europea di Studi Italiani"
                                    class="bookshelf-journal-title">Incontri : Rivista Europea di Studi Italiani</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82460" class="ember-view"><a href="/libraries/603/journals/62788?sort=title"
                                id="ember82461" class="bookshelf-journal ember-view">
                                <div id="ember82462" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2339-8523.png"
                                            alt="Cover of Indialogs : Spanish Journal of India Studies"
                                            title="Indialogs : Spanish Journal of India Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indialogs : Spanish Journal of India Studies"
                                    class="bookshelf-journal-title">Indialogs : Spanish Journal of India Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82464" class="ember-view"><a href="/libraries/603/journals/4040?sort=title"
                                id="ember82465" class="bookshelf-journal ember-view">
                                <div id="ember82466" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0019-4646.png"
                                            alt="Cover of Indian Economic &amp; Social History Review"
                                            title="Indian Economic &amp; Social History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indian Economic &amp; Social History Review"
                                    class="bookshelf-journal-title">Indian Economic &amp; Social History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82468" class="ember-view"><a href="/libraries/603/journals/7407?sort=title"
                                id="ember82469" class="bookshelf-journal ember-view">
                                <div id="ember82470" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0376-9836.png"
                                            alt="Cover of Indian Historical Review" title="Indian Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indian Historical Review" class="bookshelf-journal-title">Indian Historical
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82472" class="ember-view"><a href="/libraries/603/journals/121456?sort=title"
                                id="ember82473" class="bookshelf-journal ember-view">
                                <div id="ember82474" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2454-9991-55d8bbed-64c0-4d13-81af-b21a34d788f8.png"
                                            alt="Cover of Indian Journal of History of Science"
                                            title="Indian Journal of History of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indian Journal of History of Science" class="bookshelf-journal-title">Indian
                                    Journal of History of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82476" class="ember-view"><a href="/libraries/603/journals/34967?sort=title"
                                id="ember82477" class="bookshelf-journal ember-view">
                                <div id="ember82478" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/196673-e3ebb249-49fb-46ea-ac3e-07a40c1206d1.png"
                                            alt="Cover of Indiana Magazine of History"
                                            title="Indiana Magazine of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indiana Magazine of History" class="bookshelf-journal-title">Indiana
                                    Magazine of History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82480" class="ember-view"><a href="/libraries/603/journals/9841?sort=title"
                                id="ember82481" class="bookshelf-journal ember-view">
                                <div id="ember82482" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0019-7246.png"
                                            alt="Cover of Indo-Iranian Journal" title="Indo-Iranian Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indo-Iranian Journal" class="bookshelf-journal-title">Indo-Iranian Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82484" class="ember-view"><a href="/libraries/603/journals/10481?sort=title"
                                id="ember82485" class="bookshelf-journal ember-view">
                                <div id="ember82486" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0960-6491.png"
                                            alt="Cover of Industrial and Corporate Change"
                                            title="Industrial and Corporate Change">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Industrial and Corporate Change" class="bookshelf-journal-title">Industrial
                                    and Corporate Change</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82488" class="ember-view"><a href="/libraries/603/journals/36376?sort=title"
                                id="ember82489" class="bookshelf-journal ember-view">
                                <div id="ember82490" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0309-0728.png"
                                            alt="Cover of Industrial Archaeology Review"
                                            title="Industrial Archaeology Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Industrial Archaeology Review" class="bookshelf-journal-title">Industrial
                                    Archaeology Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82492" class="ember-view"><a href="/libraries/603/journals/38802?sort=title"
                                id="ember82493" class="bookshelf-journal ember-view">
                                <div id="ember82494" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0020-157x.png"
                                            alt="Cover of The Innes Review" title="The Innes Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Innes Review" class="bookshelf-journal-title">The Innes Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82496" class="ember-view"><a href="/libraries/603/journals/37423?sort=title"
                                id="ember82497" class="bookshelf-journal ember-view">
                                <div id="ember82498" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2212-9421.png"
                                            alt="Cover of Intellectual History of the Islamicate World"
                                            title="Intellectual History of the Islamicate World">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Intellectual History of the Islamicate World"
                                    class="bookshelf-journal-title">Intellectual History of the Islamicate World</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82500" class="ember-view"><a href="/libraries/603/journals/17645?sort=title"
                                id="ember82501" class="bookshelf-journal ember-view">
                                <div id="ember82502" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1749-6977.png"
                                            alt="Cover of Intellectual History Review"
                                            title="Intellectual History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Intellectual History Review" class="bookshelf-journal-title">Intellectual
                                    History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82504" class="ember-view"><a href="/libraries/603/journals/16198?sort=title"
                                id="ember82505" class="bookshelf-journal ember-view">
                                <div id="ember82506" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/default-journal-cover.png"
                                            alt="Cover of Intellectual News" title="Intellectual News">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Intellectual News" class="bookshelf-journal-title">Intellectual News</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82508" class="ember-view"><a href="/libraries/603/journals/63526?sort=title"
                                id="ember82509" class="bookshelf-journal ember-view">
                                <div id="ember82510" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2380-8969.png"
                                            alt="Cover of Interdisciplinary Journal of Partnership Studies"
                                            title="Interdisciplinary Journal of Partnership Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Interdisciplinary Journal of Partnership Studies"
                                    class="bookshelf-journal-title">Interdisciplinary Journal of Partnership Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82512" class="ember-view"><a href="/libraries/603/journals/9806?sort=title"
                                id="ember82513" class="bookshelf-journal ember-view">
                                <div id="ember82514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0378-7869.png"
                                            alt="Cover of International Bibliography of Military History"
                                            title="International Bibliography of Military History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Bibliography of Military History"
                                    class="bookshelf-journal-title">International Bibliography of Military History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82516" class="ember-view"><a href="/libraries/603/journals/15602?sort=title"
                                id="ember82517" class="bookshelf-journal ember-view">
                                <div id="ember82518" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0707-5332.png"
                                            alt="Cover of The International History Review"
                                            title="The International History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The International History Review" class="bookshelf-journal-title">The
                                    International History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82520" class="ember-view"><a href="/libraries/603/journals/63758?sort=title"
                                id="ember82521" class="bookshelf-journal ember-view">
                                <div id="ember82522" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2214-9910.png"
                                            alt="Cover of International Journal for History, Culture and Modernity"
                                            title="International Journal for History, Culture and Modernity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal for History, Culture and Modernity"
                                    class="bookshelf-journal-title">International Journal for History, Culture and
                                    Modernity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82524" class="ember-view"><a href="/libraries/603/journals/36424?sort=title"
                                id="ember82525" class="bookshelf-journal ember-view">
                                <div id="ember82526" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1758-1206.png"
                                            alt="Cover of International Journal for the History of Engineering &amp; Technology"
                                            title="International Journal for the History of Engineering &amp; Technology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal for the History of Engineering &amp; Technology"
                                    class="bookshelf-journal-title">International Journal for the History of Engineering
                                    &amp; Technology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82528" class="ember-view"><a href="/libraries/603/journals/17299?sort=title"
                                id="ember82529" class="bookshelf-journal ember-view">
                                <div id="ember82530" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1474-225X.png"
                                            alt="Cover of International journal for the Study of the Christian Church"
                                            title="International journal for the Study of the Christian Church">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International journal for the Study of the Christian Church"
                                    class="bookshelf-journal-title">International journal for the Study of the Christian
                                    Church</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82532" class="ember-view"><a href="/libraries/603/journals/237512?sort=title"
                                id="ember82533" class="bookshelf-journal ember-view">
                                <div id="ember82534" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2327-7866-feb6b183-ab85-41cc-bed6-48168f7f4b51.png"
                                            alt="Cover of International Journal of Diverse Identities"
                                            title="International Journal of Diverse Identities">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Diverse Identities"
                                    class="bookshelf-journal-title">International Journal of Diverse Identities</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82536" class="ember-view"><a href="/libraries/603/journals/64124?sort=title"
                                id="ember82537" class="bookshelf-journal ember-view">
                                <div id="ember82538" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1578-7044.png"
                                            alt="Cover of International Journal of English Studies"
                                            title="International Journal of English Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of English Studies" class="bookshelf-journal-title">
                                    International Journal of English Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82540" class="ember-view"><a href="/libraries/603/journals/64264?sort=title"
                                id="ember82541" class="bookshelf-journal ember-view">
                                <div id="ember82542" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1598-2041.png"
                                            alt="Cover of International Journal of Korean History"
                                            title="International Journal of Korean History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Korean History" class="bookshelf-journal-title">
                                    International Journal of Korean History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82544" class="ember-view"><a href="/libraries/603/journals/64306?sort=title"
                                id="ember82545" class="bookshelf-journal ember-view">
                                <div id="ember82546" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0843-8714.png"
                                            alt="Cover of International Journal of Maritime History"
                                            title="International Journal of Maritime History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Maritime History" class="bookshelf-journal-title">
                                    International Journal of Maritime History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82548" class="ember-view"><a href="/libraries/603/journals/154206?sort=title"
                                id="ember82549" class="bookshelf-journal ember-view">
                                <div id="ember82550" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2468-3299-4a808082-52bb-42ca-9f6a-2f985d578f57.webp"
                                            alt="Cover of International Journal of Military History and Historiography"
                                            title="International Journal of Military History and Historiography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Military History and Historiography"
                                    class="bookshelf-journal-title">International Journal of Military History and
                                    Historiography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82552" class="ember-view"><a href="/libraries/603/journals/36497?sort=title"
                                id="ember82553" class="bookshelf-journal ember-view">
                                <div id="ember82554" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2051-4530.png"
                                            alt="Cover of International Journal of Regional and Local History"
                                            title="International Journal of Regional and Local History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Regional and Local History"
                                    class="bookshelf-journal-title">International Journal of Regional and Local History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82556" class="ember-view"><a href="/libraries/603/journals/477600?sort=title"
                                id="ember82557" class="bookshelf-journal ember-view">
                                <div id="ember82558" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2772-7858-fefeff90-43b2-4e64-ba49-60e33b3ca07b.webp"
                                            alt="Cover of International Journal of Social Imaginaries"
                                            title="International Journal of Social Imaginaries">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Social Imaginaries"
                                    class="bookshelf-journal-title">International Journal of Social Imaginaries</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82560" class="ember-view"><a href="/libraries/603/journals/16598?sort=title"
                                id="ember82561" class="bookshelf-journal ember-view">
                                <div id="ember82562" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0952-3367.png"
                                            alt="Cover of The International Journal of the History of Sport"
                                            title="The International Journal of the History of Sport">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The International Journal of the History of Sport"
                                    class="bookshelf-journal-title">The International Journal of the History of Sport
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82564" class="ember-view"><a href="/libraries/603/journals/18980?sort=title"
                                id="ember82565" class="bookshelf-journal ember-view">
                                <div id="ember82566" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0147-5479.png"
                                            alt="Cover of International Labor and Working-Class History"
                                            title="International Labor and Working-Class History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Labor and Working-Class History"
                                    class="bookshelf-journal-title">International Labor and Working-Class History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82568" class="ember-view"><a href="/libraries/603/journals/19044?sort=title"
                                id="ember82569" class="bookshelf-journal ember-view">
                                <div id="ember82570" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0020-8590.png"
                                            alt="Cover of International Review of Social History"
                                            title="International Review of Social History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Review of Social History" class="bookshelf-journal-title">
                                    International Review of Social History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82572" class="ember-view"><a href="/libraries/603/journals/315161?sort=title"
                                id="ember82573" class="bookshelf-journal ember-view">
                                <div id="ember82574" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/24701483.png"
                                            alt="Cover of Internet Histories" title="Internet Histories">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Internet Histories" class="bookshelf-journal-title">Internet Histories</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82576" class="ember-view"><a href="/libraries/603/journals/445980?sort=title"
                                id="ember82577" class="bookshelf-journal ember-view">
                                <div id="ember82578" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2530-6472-5f86f9e9-51a4-489f-a09b-7d92c1c2ad09.png"
                                            alt="Cover of Investigaciones Históricas : Época Moderna y Contemporánea"
                                            title="Investigaciones Históricas : Época Moderna y Contemporánea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Investigaciones Históricas : Época Moderna y Contemporánea"
                                    class="bookshelf-journal-title">Investigaciones Históricas : Época Moderna y
                                    Contemporánea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82580" class="ember-view"><a href="/libraries/603/journals/65101?sort=title"
                                id="ember82581" class="bookshelf-journal ember-view">
                                <div id="ember82582" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-0889.png"
                                            alt="Cover of Iraq" title="Iraq">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Iraq" class="bookshelf-journal-title">Iraq</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82584" class="ember-view"><a href="/libraries/603/journals/65118?sort=title"
                                id="ember82585" class="bookshelf-journal ember-view">
                                <div id="ember82586" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0332-4893.png"
                                            alt="Cover of Irish Economic and Social History"
                                            title="Irish Economic and Social History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Irish Economic and Social History" class="bookshelf-journal-title">Irish
                                    Economic and Social History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82588" class="ember-view"><a href="/libraries/603/journals/33297?sort=title"
                                id="ember82589" class="bookshelf-journal ember-view">
                                <div id="ember82590" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-1753.png"
                                            alt="Cover of Isis" title="Isis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Isis" class="bookshelf-journal-title">Isis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82592" class="ember-view"><a href="/libraries/603/journals/36375?sort=title"
                                id="ember82593" class="bookshelf-journal ember-view">
                                <div id="ember82594" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0261-4340.png"
                                            alt="Cover of The Italianist" title="The Italianist">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Italianist" class="bookshelf-journal-title">The Italianist</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82596" class="ember-view"><a href="/libraries/603/journals/20694?sort=title"
                                id="ember82597" class="bookshelf-journal ember-view">
                                <div id="ember82598" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0165-1153.png"
                                            alt="Cover of Itinerario" title="Itinerario">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Itinerario" class="bookshelf-journal-title">Itinerario</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82600" class="ember-view"><a href="/libraries/603/journals/65449?sort=title"
                                id="ember82601" class="bookshelf-journal ember-view">
                                <div id="ember82602" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0718-5049.png"
                                            alt="Cover of Izquierdas" title="Izquierdas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Izquierdas" class="bookshelf-journal-title">Izquierdas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82604" class="ember-view"><a href="/libraries/603/journals/65448?sort=title"
                                id="ember82605" class="bookshelf-journal ember-view">
                                <div id="ember82606" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2338-249X.png"
                                            alt="Cover of Izumi: Jurnal Bahasa, Sastra dan Budaya Jepang"
                                            title="Izumi: Jurnal Bahasa, Sastra dan Budaya Jepang">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Izumi: Jurnal Bahasa, Sastra dan Budaya Jepang"
                                    class="bookshelf-journal-title">Izumi: Jurnal Bahasa, Sastra dan Budaya Jepang</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82608" class="ember-view"><a href="/libraries/603/journals/65495?sort=title"
                                id="ember82609" class="bookshelf-journal ember-view">
                                <div id="ember82610" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2194-3680.png"
                                            alt="Cover of Jahrbuch für Geschichte Lateinamerikas / Anuario de Historia de América Latina"
                                            title="Jahrbuch für Geschichte Lateinamerikas / Anuario de Historia de América Latina">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jahrbuch für Geschichte Lateinamerikas / Anuario de Historia de América Latina"
                                    class="bookshelf-journal-title">Jahrbuch für Geschichte Lateinamerikas / Anuario de
                                    Historia de América Latina</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82612" class="ember-view"><a href="/libraries/603/journals/65505?sort=title"
                                id="ember82613" class="bookshelf-journal ember-view">
                                <div id="ember82614" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-4019.png"
                                            alt="Cover of Jahrbücher für Geschichte Osteuropas"
                                            title="Jahrbücher für Geschichte Osteuropas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jahrbücher für Geschichte Osteuropas" class="bookshelf-journal-title">
                                    Jahrbücher für Geschichte Osteuropas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82616" class="ember-view"><a href="/libraries/603/journals/38650?sort=title"
                                id="ember82617" class="bookshelf-journal ember-view">
                                <div id="ember82618" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0012-0456.png"
                                            alt="Cover of Jahresbericht der Deutschen Mathematiker-Vereinigung"
                                            title="Jahresbericht der Deutschen Mathematiker-Vereinigung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jahresbericht der Deutschen Mathematiker-Vereinigung"
                                    class="bookshelf-journal-title">Jahresbericht der Deutschen Mathematiker-Vereinigung
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82620" class="ember-view"><a href="/libraries/603/journals/132328?sort=title"
                                id="ember82621" class="bookshelf-journal ember-view">
                                <div id="ember82622" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1349-807X.png"
                                            alt="Cover of Japanese Research in Business History"
                                            title="Japanese Research in Business History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Japanese Research in Business History" class="bookshelf-journal-title">
                                    Japanese Research in Business History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82624" class="ember-view"><a href="/libraries/603/journals/65702?sort=title"
                                id="ember82625" class="bookshelf-journal ember-view">
                                <div id="ember82626" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0389-1186.png"
                                            alt="Cover of Japanese Slavic and East European Studies"
                                            title="Japanese Slavic and East European Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Japanese Slavic and East European Studies" class="bookshelf-journal-title">
                                    Japanese Slavic and East European Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82628" class="ember-view"><a href="/libraries/603/journals/33346?sort=title"
                                id="ember82629" class="bookshelf-journal ember-view">
                                <div id="ember82630" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1531-0485.png"
                                            alt="Cover of Journal for Early Modern Cultural Studies"
                                            title="Journal for Early Modern Cultural Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for Early Modern Cultural Studies" class="bookshelf-journal-title">
                                    Journal for Early Modern Cultural Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82632" class="ember-view"><a href="/libraries/603/journals/1419?sort=title"
                                id="ember82633" class="bookshelf-journal ember-view">
                                <div id="ember82634" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1754-0194.png"
                                            alt="Cover of Journal for Eighteenth-Century Studies"
                                            title="Journal for Eighteenth-Century Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for Eighteenth-Century Studies" class="bookshelf-journal-title">
                                    Journal for Eighteenth-Century Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82636" class="ember-view"><a href="/libraries/603/journals/1086?sort=title"
                                id="ember82637" class="bookshelf-journal ember-view">
                                <div id="ember82638" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0925-4560.png"
                                            alt="Cover of Journal for General Philosophy of Science / Zeitschrift für Allgemeine Wissenschaftstheorie"
                                            title="Journal for General Philosophy of Science / Zeitschrift für Allgemeine Wissenschaftstheorie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for General Philosophy of Science / Zeitschrift für Allgemeine Wissenschaftstheorie"
                                    class="bookshelf-journal-title">Journal for General Philosophy of Science /
                                    Zeitschrift für Allgemeine Wissenschaftstheorie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82640" class="ember-view"><a href="/libraries/603/journals/15755?sort=title"
                                id="ember82641" class="bookshelf-journal ember-view">
                                <div id="ember82642" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2153-3369.png"
                                            alt="Cover of Journal for Maritime Research"
                                            title="Journal for Maritime Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for Maritime Research" class="bookshelf-journal-title">Journal for
                                    Maritime Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82644" class="ember-view"><a href="/libraries/603/journals/66239?sort=title"
                                id="ember82645" class="bookshelf-journal ember-view">
                                <div id="ember82646" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-8286.png"
                                            alt="Cover of Journal for the History of Astronomy"
                                            title="Journal for the History of Astronomy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the History of Astronomy" class="bookshelf-journal-title">
                                    Journal for the History of Astronomy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82648" class="ember-view"><a href="/libraries/603/journals/412873?sort=title"
                                id="ember82649" class="bookshelf-journal ember-view">
                                <div id="ember82650" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2632-282X-be8af23a-b9d2-44c3-9bd3-c32c581d7440.png"
                                            alt="Cover of Journal for the History of Knowledge"
                                            title="Journal for the History of Knowledge">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the History of Knowledge" class="bookshelf-journal-title">
                                    Journal for the History of Knowledge</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82652" class="ember-view"><a href="/libraries/603/journals/10901?sort=title"
                                id="ember82653" class="bookshelf-journal ember-view">
                                <div id="ember82654" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1930-1189.png"
                                            alt="Cover of Journal for the Study of Radicalism"
                                            title="Journal for the Study of Radicalism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of Radicalism" class="bookshelf-journal-title">Journal
                                    for the Study of Radicalism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82656" class="ember-view"><a href="/libraries/603/journals/37445?sort=title"
                                id="ember82657" class="bookshelf-journal ember-view">
                                <div id="ember82658" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2214-2363.png"
                                            alt="Cover of Journal of Abbasid Studies"
                                            title="Journal of Abbasid Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Abbasid Studies" class="bookshelf-journal-title">Journal of
                                    Abbasid Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82660" class="ember-view"><a href="/libraries/603/journals/33373?sort=title"
                                id="ember82661" class="bookshelf-journal ember-view">
                                <div id="ember82662" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1548-1867.png"
                                            alt="Cover of The Journal of African American History"
                                            title="The Journal of African American History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of African American History" class="bookshelf-journal-title">The
                                    Journal of African American History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82664" class="ember-view"><a href="/libraries/603/journals/36478?sort=title"
                                id="ember82665" class="bookshelf-journal ember-view">
                                <div id="ember82666" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2161-9441.png"
                                            alt="Cover of Journal of African Diaspora Archaeology and Heritage"
                                            title="Journal of African Diaspora Archaeology and Heritage">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of African Diaspora Archaeology and Heritage"
                                    class="bookshelf-journal-title">Journal of African Diaspora Archaeology and Heritage
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82668" class="ember-view"><a href="/libraries/603/journals/19054?sort=title"
                                id="ember82669" class="bookshelf-journal ember-view">
                                <div id="ember82670" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-8537.png"
                                            alt="Cover of The Journal of African History"
                                            title="The Journal of African History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of African History" class="bookshelf-journal-title">The Journal
                                    of African History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82672" class="ember-view"><a href="/libraries/603/journals/266641?sort=title"
                                id="ember82673" class="bookshelf-journal ember-view">
                                <div id="ember82674" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2468-0958-a3fdd0af-3717-4f3d-a9db-26324fde8c15.webp"
                                            alt="Cover of Journal of African Military History"
                                            title="Journal of African Military History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of African Military History" class="bookshelf-journal-title">Journal
                                    of African Military History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82676" class="ember-view"><a href="/libraries/603/journals/33467?sort=title"
                                id="ember82677" class="bookshelf-journal ember-view">
                                <div id="ember82678" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0278-5927.png"
                                            alt="Cover of Journal of American Ethnic History"
                                            title="Journal of American Ethnic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of American Ethnic History" class="bookshelf-journal-title">Journal
                                    of American Ethnic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82680" class="ember-view"><a href="/libraries/603/journals/21351?sort=title"
                                id="ember82681" class="bookshelf-journal ember-view">
                                <div id="ember82682" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1945-2314.png"
                                            alt="Cover of Journal of American History"
                                            title="Journal of American History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of American History" class="bookshelf-journal-title">Journal of
                                    American History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82685" class="ember-view"><a href="/libraries/603/journals/19025?sort=title"
                                id="ember82686" class="bookshelf-journal ember-view">
                                <div id="ember82687" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-8758.png"
                                            alt="Cover of Journal of American Studies"
                                            title="Journal of American Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of American Studies" class="bookshelf-journal-title">Journal of
                                    American Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82689" class="ember-view"><a href="/libraries/603/journals/112429?sort=title"
                                id="ember82690" class="bookshelf-journal ember-view">
                                <div id="ember82691" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2324-8114.png"
                                            alt="Cover of Journal of Ancient History"
                                            title="Journal of Ancient History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Ancient History" class="bookshelf-journal-title">Journal of
                                    Ancient History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82693" class="ember-view"><a href="/libraries/603/journals/66384?sort=title"
                                id="ember82694" class="bookshelf-journal ember-view">
                                <div id="ember82695" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2360-266X.png"
                                            alt="Cover of Journal of Ancient History and Archaeology"
                                            title="Journal of Ancient History and Archaeology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Ancient History and Archaeology" class="bookshelf-journal-title">
                                    Journal of Ancient History and Archaeology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82697" class="ember-view"><a href="/libraries/603/journals/315008?sort=title"
                                id="ember82698" class="bookshelf-journal ember-view">
                                <div id="ember82699" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1869-3296.png"
                                            alt="Cover of Journal of Ancient Judaism"
                                            title="Journal of Ancient Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Ancient Judaism" class="bookshelf-journal-title">Journal of
                                    Ancient Judaism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82701" class="ember-view"><a href="/libraries/603/journals/66382?sort=title"
                                id="ember82702" class="bookshelf-journal ember-view">
                                <div id="ember82703" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2352-4529.png"
                                            alt="Cover of Journal of Anesthesia History"
                                            title="Journal of Anesthesia History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Anesthesia History" class="bookshelf-journal-title">Journal of
                                    Anesthesia History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82705" class="ember-view"><a href="/libraries/603/journals/66401?sort=title"
                                id="ember82706" class="bookshelf-journal ember-view">
                                <div id="ember82707" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1082-7161.png"
                                            alt="Cover of Journal of Appalachian Studies"
                                            title="Journal of Appalachian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Appalachian Studies" class="bookshelf-journal-title">Journal of
                                    Appalachian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82709" class="ember-view"><a href="/libraries/603/journals/367145?sort=title"
                                id="ember82710" class="bookshelf-journal ember-view">
                                <div id="ember82711" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2589-5885-f9f650ab-c4c1-4bc8-992e-152e9f90986f.webp"
                                            alt="Cover of Journal of Applied History"
                                            title="Journal of Applied History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Applied History" class="bookshelf-journal-title">Journal of
                                    Applied History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82713" class="ember-view"><a href="/libraries/603/journals/19428?sort=title"
                                id="ember82714" class="bookshelf-journal ember-view">
                                <div id="ember82715" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-9118.png"
                                            alt="Cover of The Journal of Asian Studies"
                                            title="The Journal of Asian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Asian Studies" class="bookshelf-journal-title">The Journal of
                                    Asian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82717" class="ember-view"><a href="/libraries/603/journals/66525?sort=title"
                                id="ember82718" class="bookshelf-journal ember-view">
                                <div id="ember82719" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2165-669X.png"
                                            alt="Cover of Journal of Austrian Studies"
                                            title="Journal of Austrian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Austrian Studies" class="bookshelf-journal-title">Journal of
                                    Austrian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82721" class="ember-view"><a href="/libraries/603/journals/19092?sort=title"
                                id="ember82722" class="bookshelf-journal ember-view">
                                <div id="ember82723" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0021-9371.png"
                                            alt="Cover of The Journal of British Studies"
                                            title="The Journal of British Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of British Studies" class="bookshelf-journal-title">The Journal
                                    of British Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82725" class="ember-view"><a href="/libraries/603/journals/477602?sort=title"
                                id="ember82726" class="bookshelf-journal ember-view">
                                <div id="ember82727" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2772-865X-2c61c9d9-3a3c-4ce8-9b11-b437420da4a7.webp"
                                            alt="Cover of Journal of Central Asian History"
                                            title="Journal of Central Asian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Central Asian History" class="bookshelf-journal-title">Journal of
                                    Central Asian History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82729" class="ember-view"><a href="/libraries/603/journals/237419?sort=title"
                                id="ember82730" class="bookshelf-journal ember-view">
                                <div id="ember82731" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2059-1632.png"
                                            alt="Cover of Journal of Chinese History"
                                            title="Journal of Chinese History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Chinese History" class="bookshelf-journal-title">Journal of
                                    Chinese History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82733" class="ember-view"><a href="/libraries/603/journals/37403?sort=title"
                                id="ember82734" class="bookshelf-journal ember-view">
                                <div id="ember82735" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2212-7445.png"
                                            alt="Cover of Journal of Chinese Military History"
                                            title="Journal of Chinese Military History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Chinese Military History" class="bookshelf-journal-title">Journal
                                    of Chinese Military History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82737" class="ember-view"><a href="/libraries/603/journals/32154?sort=title"
                                id="ember82738" class="bookshelf-journal ember-view">
                                <div id="ember82739" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1520-3972.png"
                                            alt="Cover of Journal of Cold War Studies"
                                            title="Journal of Cold War Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Cold War Studies" class="bookshelf-journal-title">Journal of Cold
                                    War Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82741" class="ember-view"><a href="/libraries/603/journals/10694?sort=title"
                                id="ember82742" class="bookshelf-journal ember-view">
                                <div id="ember82743" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1532-5768.png"
                                            alt="Cover of Journal of Colonialism and Colonial History"
                                            title="Journal of Colonialism and Colonial History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Colonialism and Colonial History"
                                    class="bookshelf-journal-title">Journal of Colonialism and Colonial History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82745" class="ember-view"><a href="/libraries/603/journals/313694?sort=title"
                                id="ember82746" class="bookshelf-journal ember-view">
                                <div id="ember82747" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/25739646.png"
                                            alt="Cover of Journal of Contemporary Central and Eastern Europe"
                                            title="Journal of Contemporary Central and Eastern Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Contemporary Central and Eastern Europe"
                                    class="bookshelf-journal-title">Journal of Contemporary Central and Eastern Europe
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82749" class="ember-view"><a href="/libraries/603/journals/1754?sort=title"
                                id="ember82750" class="bookshelf-journal ember-view">
                                <div id="ember82751" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-0094.png"
                                            alt="Cover of Journal of Contemporary History"
                                            title="Journal of Contemporary History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Contemporary History" class="bookshelf-journal-title">Journal of
                                    Contemporary History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82753" class="ember-view"><a href="/libraries/603/journals/39667?sort=title"
                                id="ember82754" class="bookshelf-journal ember-view">
                                <div id="ember82755" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2325-6737-b66aa5db-2b8e-4c9e-9809-fb8de52e8b62.png"
                                            alt="Cover of Journal of Cuneiform Studies"
                                            title="Journal of Cuneiform Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Cuneiform Studies" class="bookshelf-journal-title">Journal of
                                    Cuneiform Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82757" class="ember-view"><a href="/libraries/603/journals/9799?sort=title"
                                id="ember82758" class="bookshelf-journal ember-view">
                                <div id="ember82759" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1877-0223.png"
                                            alt="Cover of Journal of Early American History"
                                            title="Journal of Early American History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Early American History" class="bookshelf-journal-title">Journal
                                    of Early American History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82761" class="ember-view"><a href="/libraries/603/journals/153813?sort=title"
                                id="ember82762" class="bookshelf-journal ember-view">
                                <div id="ember82763" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2222-582X.png"
                                            alt="Cover of Journal of Early Christian History"
                                            title="Journal of Early Christian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Early Christian History" class="bookshelf-journal-title">Journal
                                    of Early Christian History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82765" class="ember-view"><a href="/libraries/603/journals/10801?sort=title"
                                id="ember82766" class="bookshelf-journal ember-view">
                                <div id="ember82767" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1067-6341.png"
                                            alt="Cover of Journal of Early Christian Studies"
                                            title="Journal of Early Christian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Early Christian Studies" class="bookshelf-journal-title">Journal
                                    of Early Christian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82769" class="ember-view"><a href="/libraries/603/journals/9900?sort=title"
                                id="ember82770" class="bookshelf-journal ember-view">
                                <div id="ember82771" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1385-3783.png"
                                            alt="Cover of Journal of Early Modern History"
                                            title="Journal of Early Modern History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Early Modern History" class="bookshelf-journal-title">Journal of
                                    Early Modern History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82773" class="ember-view"><a href="/libraries/603/journals/19036?sort=title"
                                id="ember82774" class="bookshelf-journal ember-view">
                                <div id="ember82775" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-0469.png"
                                            alt="Cover of The Journal of Ecclesiastical History"
                                            title="The Journal of Ecclesiastical History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Ecclesiastical History" class="bookshelf-journal-title">The
                                    Journal of Ecclesiastical History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82777" class="ember-view"><a href="/libraries/603/journals/18988?sort=title"
                                id="ember82778" class="bookshelf-journal ember-view">
                                <div id="ember82779" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-0507.png"
                                            alt="Cover of The Journal of Economic History"
                                            title="The Journal of Economic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Economic History" class="bookshelf-journal-title">The Journal
                                    of Economic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82781" class="ember-view"><a href="/libraries/603/journals/9784?sort=title"
                                id="ember82782" class="bookshelf-journal ember-view">
                                <div id="ember82783" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1874-1657.png"
                                            alt="Cover of Journal of Egyptian History"
                                            title="Journal of Egyptian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Egyptian History" class="bookshelf-journal-title">Journal of
                                    Egyptian History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82785" class="ember-view"><a href="/libraries/603/journals/33460?sort=title"
                                id="ember82786" class="bookshelf-journal ember-view">
                                <div id="ember82787" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0363-6941.png"
                                            alt="Cover of The Journal of English and Germanic Philology"
                                            title="The Journal of English and Germanic Philology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of English and Germanic Philology"
                                    class="bookshelf-journal-title">The Journal of English and Germanic Philology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82789" class="ember-view"><a href="/libraries/603/journals/407035?sort=title"
                                id="ember82790" class="bookshelf-journal ember-view">
                                <div id="ember82791" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/24521051.png"
                                            alt="Cover of Journal of European Landscapes"
                                            title="Journal of European Landscapes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of European Landscapes" class="bookshelf-journal-title">Journal of
                                    European Landscapes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82793" class="ember-view"><a href="/libraries/603/journals/262373?sort=title"
                                id="ember82794" class="bookshelf-journal ember-view">
                                <div id="ember82795" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2506-6587.png"
                                            alt="Cover of Journal of European Periodical Studies"
                                            title="Journal of European Periodical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of European Periodical Studies" class="bookshelf-journal-title">
                                    Journal of European Periodical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82797" class="ember-view"><a href="/libraries/603/journals/3148?sort=title"
                                id="ember82798" class="bookshelf-journal ember-view">
                                <div id="ember82799" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0047-2441.png"
                                            alt="Cover of Journal of European Studies"
                                            title="Journal of European Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of European Studies" class="bookshelf-journal-title">Journal of
                                    European Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82801" class="ember-view"><a href="/libraries/603/journals/7050?sort=title"
                                id="ember82802" class="bookshelf-journal ember-view">
                                <div id="ember82803" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0363-1990.png"
                                            alt="Cover of Journal of Family History" title="Journal of Family History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Family History" class="bookshelf-journal-title">Journal of Family
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82805" class="ember-view"><a href="/libraries/603/journals/33335?sort=title"
                                id="ember82806" class="bookshelf-journal ember-view">
                                <div id="ember82807" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0737-7037.png"
                                            alt="Cover of Journal of Folklore Research: An International Journal of Folklore and Ethnomusicology"
                                            title="Journal of Folklore Research: An International Journal of Folklore and Ethnomusicology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Folklore Research: An International Journal of Folklore and Ethnomusicology"
                                    class="bookshelf-journal-title">Journal of Folklore Research: An International
                                    Journal of Folklore and Ethnomusicology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82809" class="ember-view"><a href="/libraries/603/journals/19426?sort=title"
                                id="ember82810" class="bookshelf-journal ember-view">
                                <div id="ember82811" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1740-0228.png"
                                            alt="Cover of Journal of Global History" title="Journal of Global History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Global History" class="bookshelf-journal-title">Journal of Global
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82813" class="ember-view"><a href="/libraries/603/journals/102630?sort=title"
                                id="ember82814" class="bookshelf-journal ember-view">
                                <div id="ember82815" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2405-836X-d6e70e20-d50f-4ab0-ae6e-8f0a8c394ec0.png"
                                            alt="Cover of Journal of Global Slavery" title="Journal of Global Slavery">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Global Slavery" class="bookshelf-journal-title">Journal of Global
                                    Slavery</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82817" class="ember-view"><a href="/libraries/603/journals/369323?sort=title"
                                id="ember82818" class="bookshelf-journal ember-view">
                                <div id="ember82819" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/25785656.png"
                                            alt="Cover of Journal of Holocaust Research"
                                            title="Journal of Holocaust Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Holocaust Research" class="bookshelf-journal-title">Journal of
                                    Holocaust Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82821" class="ember-view"><a href="/libraries/603/journals/237592?sort=title"
                                id="ember82822" class="bookshelf-journal ember-view">
                                <div id="ember82823" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2054-1988.png"
                                            alt="Cover of Journal of Holy Land and Palestine Studies"
                                            title="Journal of Holy Land and Palestine Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Holy Land and Palestine Studies" class="bookshelf-journal-title">
                                    Journal of Holy Land and Palestine Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82825" class="ember-view"><a href="/libraries/603/journals/93262?sort=title"
                                id="ember82826" class="bookshelf-journal ember-view">
                                <div id="ember82827" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1348-5253.png"
                                            alt="Cover of Journal of Human Environmental Studies"
                                            title="Journal of Human Environmental Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Human Environmental Studies" class="bookshelf-journal-title">
                                    Journal of Human Environmental Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82829" class="ember-view"><a href="/libraries/603/journals/15617?sort=title"
                                id="ember82830" class="bookshelf-journal ember-view">
                                <div id="ember82831" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1326-0219.png"
                                            alt="Cover of Journal of Iberian and Latin American Research"
                                            title="Journal of Iberian and Latin American Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Iberian and Latin American Research"
                                    class="bookshelf-journal-title">Journal of Iberian and Latin American Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82833" class="ember-view"><a href="/libraries/603/journals/16991?sort=title"
                                id="ember82834" class="bookshelf-journal ember-view">
                                <div id="ember82835" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1470-1847.png"
                                            alt="Cover of Journal of Iberian and Latin American Studies"
                                            title="Journal of Iberian and Latin American Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Iberian and Latin American Studies"
                                    class="bookshelf-journal-title">Journal of Iberian and Latin American Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82837" class="ember-view"><a href="/libraries/603/journals/16564?sort=title"
                                id="ember82838" class="bookshelf-journal ember-view">
                                <div id="ember82839" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0308-6534.png"
                                            alt="Cover of The Journal of Imperial and Commonwealth History"
                                            title="The Journal of Imperial and Commonwealth History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Imperial and Commonwealth History"
                                    class="bookshelf-journal-title">The Journal of Imperial and Commonwealth History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82841" class="ember-view"><a href="/libraries/603/journals/40233?sort=title"
                                id="ember82842" class="bookshelf-journal ember-view">
                                <div id="ember82843" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1783-9025.png"
                                            alt="Cover of Journal of Inner Asian Art and Archaeology"
                                            title="Journal of Inner Asian Art and Archaeology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Inner Asian Art and Archaeology" class="bookshelf-journal-title">
                                    Journal of Inner Asian Art and Archaeology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82845" class="ember-view"><a href="/libraries/603/journals/67536?sort=title"
                                id="ember82846" class="bookshelf-journal ember-view">
                                <div id="ember82847" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1616-1262.png"
                                            alt="Cover of Journal of Intelligence History"
                                            title="Journal of Intelligence History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Intelligence History" class="bookshelf-journal-title">Journal of
                                    Intelligence History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82849" class="ember-view"><a href="/libraries/603/journals/32153?sort=title"
                                id="ember82850" class="bookshelf-journal ember-view">
                                <div id="ember82851" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-1953.png"
                                            alt="Cover of Journal of Interdisciplinary History"
                                            title="Journal of Interdisciplinary History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Interdisciplinary History" class="bookshelf-journal-title">
                                    Journal of Interdisciplinary History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82853" class="ember-view"><a href="/libraries/603/journals/16681?sort=title"
                                id="ember82854" class="bookshelf-journal ember-view">
                                <div id="ember82855" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1353-1042.png"
                                            alt="Cover of Journal of Israeli History"
                                            title="Journal of Israeli History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Israeli History" class="bookshelf-journal-title">Journal of
                                    Israeli History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82857" class="ember-view"><a href="/libraries/603/journals/10909?sort=title"
                                id="ember82858" class="bookshelf-journal ember-view">
                                <div id="ember82859" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1939-6716.png"
                                            alt="Cover of Journal of Late Antiquity" title="Journal of Late Antiquity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Late Antiquity" class="bookshelf-journal-title">Journal of Late
                                    Antiquity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82861" class="ember-view"><a href="/libraries/603/journals/18320?sort=title"
                                id="ember82862" class="bookshelf-journal ember-view">
                                <div id="ember82863" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0967-7720.png"
                                            alt="Cover of Journal of Medical Biography"
                                            title="Journal of Medical Biography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Medical Biography" class="bookshelf-journal-title">Journal of
                                    Medical Biography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82865" class="ember-view"><a href="/libraries/603/journals/18271?sort=title"
                                id="ember82866" class="bookshelf-journal ember-view">
                                <div id="ember82867" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1082-9636.png"
                                            alt="Cover of Journal of Medieval and Early Modern Studies"
                                            title="Journal of Medieval and Early Modern Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Medieval and Early Modern Studies"
                                    class="bookshelf-journal-title">Journal of Medieval and Early Modern Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82869" class="ember-view"><a href="/libraries/603/journals/16425?sort=title"
                                id="ember82870" class="bookshelf-journal ember-view">
                                <div id="ember82871" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0304-4181.png"
                                            alt="Cover of Journal of Medieval History"
                                            title="Journal of Medieval History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Medieval History" class="bookshelf-journal-title">Journal of
                                    Medieval History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82873" class="ember-view"><a href="/libraries/603/journals/17886?sort=title"
                                id="ember82874" class="bookshelf-journal ember-view">
                                <div id="ember82875" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1754-6559.png"
                                            alt="Cover of Journal of Medieval Iberian Studies"
                                            title="Journal of Medieval Iberian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Medieval Iberian Studies" class="bookshelf-journal-title">Journal
                                    of Medieval Iberian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82877" class="ember-view"><a href="/libraries/603/journals/33331?sort=title"
                                id="ember82878" class="bookshelf-journal ember-view">
                                <div id="ember82879" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1947-6566.png"
                                            alt="Cover of The Journal of Medieval Religious Cultures"
                                            title="The Journal of Medieval Religious Cultures">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Medieval Religious Cultures" class="bookshelf-journal-title">
                                    The Journal of Medieval Religious Cultures</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82881" class="ember-view"><a href="/libraries/603/journals/10726?sort=title"
                                id="ember82882" class="bookshelf-journal ember-view">
                                <div id="ember82883" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0899-3718.png"
                                            alt="Cover of The Journal of Military History"
                                            title="The Journal of Military History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Military History" class="bookshelf-journal-title">The Journal
                                    of Military History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82885" class="ember-view"><a href="/libraries/603/journals/17729?sort=title"
                                id="ember82886" class="bookshelf-journal ember-view">
                                <div id="ember82887" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1753-5654.png"
                                            alt="Cover of Journal of Modern Chinese History"
                                            title="Journal of Modern Chinese History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Modern Chinese History" class="bookshelf-journal-title">Journal
                                    of Modern Chinese History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82889" class="ember-view"><a href="/libraries/603/journals/67994?sort=title"
                                id="ember82890" class="bookshelf-journal ember-view">
                                <div id="ember82891" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1611-8944.png"
                                            alt="Cover of Journal of Modern European History"
                                            title="Journal of Modern European History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Modern European History" class="bookshelf-journal-title">Journal
                                    of Modern European History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82893" class="ember-view"><a href="/libraries/603/journals/33284?sort=title"
                                id="ember82894" class="bookshelf-journal ember-view">
                                <div id="ember82895" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-2801.png"
                                            alt="Cover of The Journal of Modern History"
                                            title="The Journal of Modern History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Modern History" class="bookshelf-journal-title">The Journal
                                    of Modern History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82897" class="ember-view"><a href="/libraries/603/journals/9794?sort=title"
                                id="ember82898" class="bookshelf-journal ember-view">
                                <div id="ember82899" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1947-9956.png"
                                            alt="Cover of Journal of Modern Russian History and Historiography"
                                            title="Journal of Modern Russian History and Historiography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Modern Russian History and Historiography"
                                    class="bookshelf-journal-title">Journal of Modern Russian History and Historiography
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82901" class="ember-view"><a href="/libraries/603/journals/33420?sort=title"
                                id="ember82902" class="bookshelf-journal ember-view">
                                <div id="ember82903" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1933-6632.png"
                                            alt="Cover of Journal of Moravian History"
                                            title="Journal of Moravian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Moravian History" class="bookshelf-journal-title">Journal of
                                    Moravian History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82905" class="ember-view"><a href="/libraries/603/journals/33299?sort=title"
                                id="ember82906" class="bookshelf-journal ember-view">
                                <div id="ember82907" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-2968.png"
                                            alt="Cover of Journal of Near Eastern Studies"
                                            title="Journal of Near Eastern Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Near Eastern Studies" class="bookshelf-journal-title">Journal of
                                    Near Eastern Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82909" class="ember-view"><a href="/libraries/603/journals/17190?sort=title"
                                id="ember82910" class="bookshelf-journal ember-view">
                                <div id="ember82911" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-3344.png"
                                            alt="Cover of The Journal of Pacific History"
                                            title="The Journal of Pacific History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Pacific History" class="bookshelf-journal-title">The Journal
                                    of Pacific History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82913" class="ember-view"><a href="/libraries/603/journals/9783?sort=title"
                                id="ember82914" class="bookshelf-journal ember-view">
                                <div id="ember82915" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1874-7094.png"
                                            alt="Cover of Journal of Persianate Studies"
                                            title="Journal of Persianate Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Persianate Studies" class="bookshelf-journal-title">Journal of
                                    Persianate Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82917" class="ember-view"><a href="/libraries/603/journals/5280?sort=title"
                                id="ember82918" class="bookshelf-journal ember-view">
                                <div id="ember82919" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-4227.png"
                                            alt="Cover of Journal of Religious History"
                                            title="Journal of Religious History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religious History" class="bookshelf-journal-title">Journal of
                                    Religious History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82921" class="ember-view"><a href="/libraries/603/journals/93320?sort=title"
                                id="ember82922" class="bookshelf-journal ember-view">
                                <div id="ember82923" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0912-9731.png"
                                            alt="Cover of Journal of Rural Planning Association"
                                            title="Journal of Rural Planning Association">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Rural Planning Association" class="bookshelf-journal-title">
                                    Journal of Rural Planning Association</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82926" class="ember-view"><a href="/libraries/603/journals/365199?sort=title"
                                id="ember82927" class="bookshelf-journal ember-view">
                                <div id="ember82928" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1882-4560.png"
                                            alt="Cover of Journal of Rural Studies" title="Journal of Rural Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Rural Studies" class="bookshelf-journal-title">Journal of Rural
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82930" class="ember-view"><a href="/libraries/603/journals/38808?sort=title"
                                id="ember82931" class="bookshelf-journal ember-view">
                                <div id="ember82932" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1748-538x.png"
                                            alt="Cover of Journal of Scottish Historical Studies"
                                            title="Journal of Scottish Historical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Scottish Historical Studies" class="bookshelf-journal-title">
                                    Journal of Scottish Historical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82934" class="ember-view"><a href="/libraries/603/journals/10424?sort=title"
                                id="ember82935" class="bookshelf-journal ember-view">
                                <div id="ember82936" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-4529.png"
                                            alt="Cover of Journal of Social History" title="Journal of Social History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Social History" class="bookshelf-journal-title">Journal of Social
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82938" class="ember-view"><a href="/libraries/603/journals/10679?sort=title"
                                id="ember82939" class="bookshelf-journal ember-view">
                                <div id="ember82940" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1059-3152.png"
                                            alt="Cover of Journal of Song-Yuan Studies"
                                            title="Journal of Song-Yuan Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Song-Yuan Studies" class="bookshelf-journal-title">Journal of
                                    Song-Yuan Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82942" class="ember-view"><a href="/libraries/603/journals/327200?sort=title"
                                id="ember82943" class="bookshelf-journal ember-view">
                                <div id="ember82944" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2542-5544-6693086f-8c39-4ba5-9e99-30941c8711df.webp"
                                            alt="Cover of Journal of South Asian Intellectual History"
                                            title="Journal of South Asian Intellectual History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of South Asian Intellectual History"
                                    class="bookshelf-journal-title">Journal of South Asian Intellectual History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82946" class="ember-view"><a href="/libraries/603/journals/68606?sort=title"
                                id="ember82947" class="bookshelf-journal ember-view">
                                <div id="ember82948" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/00941700.png"
                                            alt="Cover of Journal of Sport History" title="Journal of Sport History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Sport History" class="bookshelf-journal-title">Journal of Sport
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82950" class="ember-view"><a href="/libraries/603/journals/5387?sort=title"
                                id="ember82951" class="bookshelf-journal ember-view">
                                <div id="ember82952" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1059-4329.png"
                                            alt="Cover of Journal of Supreme Court History"
                                            title="Journal of Supreme Court History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Supreme Court History" class="bookshelf-journal-title">Journal of
                                    Supreme Court History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82954" class="ember-view"><a href="/libraries/603/journals/391469?sort=title"
                                id="ember82955" class="bookshelf-journal ember-view">
                                <div id="ember82956" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2688-4747-f6f076d6-866c-43eb-97ce-45649879c51d.png"
                                            alt="Cover of Journal of the Canadian Society for Syriac Studies"
                                            title="Journal of the Canadian Society for Syriac Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Canadian Society for Syriac Studies"
                                    class="bookshelf-journal-title">Journal of the Canadian Society for Syriac Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82958" class="ember-view"><a href="/libraries/603/journals/10670?sort=title"
                                id="ember82959" class="bookshelf-journal ember-view">
                                <div id="ember82960" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2154-4727.png"
                                            alt="Cover of The Journal of the Civil War Era"
                                            title="The Journal of the Civil War Era">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of the Civil War Era" class="bookshelf-journal-title">The
                                    Journal of the Civil War Era</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82962" class="ember-view"><a href="/libraries/603/journals/10776?sort=title"
                                id="ember82963" class="bookshelf-journal ember-view">
                                <div id="ember82964" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0275-1275.png"
                                            alt="Cover of Journal of the Early Republic"
                                            title="Journal of the Early Republic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Early Republic" class="bookshelf-journal-title">Journal of
                                    the Early Republic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82966" class="ember-view"><a href="/libraries/603/journals/9893?sort=title"
                                id="ember82967" class="bookshelf-journal ember-view">
                                <div id="ember82968" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-4995.png"
                                            alt="Cover of Journal of the Economic and Social History of the Orient"
                                            title="Journal of the Economic and Social History of the Orient">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Economic and Social History of the Orient"
                                    class="bookshelf-journal-title">Journal of the Economic and Social History of the
                                    Orient</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82970" class="ember-view"><a href="/libraries/603/journals/20826?sort=title"
                                id="ember82971" class="bookshelf-journal ember-view">
                                <div id="ember82972" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1537-7814.png"
                                            alt="Cover of The Journal of the Gilded Age and Progressive Era"
                                            title="The Journal of the Gilded Age and Progressive Era">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of the Gilded Age and Progressive Era"
                                    class="bookshelf-journal-title">The Journal of the Gilded Age and Progressive Era
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82974" class="ember-view"><a href="/libraries/603/journals/3953?sort=title"
                                id="ember82975" class="bookshelf-journal ember-view">
                                <div id="ember82976" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-5010.png"
                                            alt="Cover of Journal of the History of Biology"
                                            title="Journal of the History of Biology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Biology" class="bookshelf-journal-title">Journal
                                    of the History of Biology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82978" class="ember-view"><a href="/libraries/603/journals/10903?sort=title"
                                id="ember82979" class="bookshelf-journal ember-view">
                                <div id="ember82980" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1939-6724.png"
                                            alt="Cover of The Journal of the History of Childhood and Youth"
                                            title="The Journal of the History of Childhood and Youth">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of the History of Childhood and Youth"
                                    class="bookshelf-journal-title">The Journal of the History of Childhood and Youth
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82982" class="ember-view"><a href="/libraries/603/journals/10365?sort=title"
                                id="ember82983" class="bookshelf-journal ember-view">
                                <div id="ember82984" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0954-6650.png"
                                            alt="Cover of Journal of the History of Collections"
                                            title="Journal of the History of Collections">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Collections" class="bookshelf-journal-title">
                                    Journal of the History of Collections</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82986" class="ember-view"><a href="/libraries/603/journals/10806?sort=title"
                                id="ember82987" class="bookshelf-journal ember-view">
                                <div id="ember82988" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-5037.png"
                                            alt="Cover of Journal of the History of Ideas"
                                            title="Journal of the History of Ideas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Ideas" class="bookshelf-journal-title">Journal of
                                    the History of Ideas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82990" class="ember-view"><a href="/libraries/603/journals/10400?sort=title"
                                id="ember82991" class="bookshelf-journal ember-view">
                                <div id="ember82992" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-5045.png"
                                            alt="Cover of Journal of the History of Medicine and Allied Sciences"
                                            title="Journal of the History of Medicine and Allied Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Medicine and Allied Sciences"
                                    class="bookshelf-journal-title">Journal of the History of Medicine and Allied
                                    Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82994" class="ember-view"><a href="/libraries/603/journals/10835?sort=title"
                                id="ember82995" class="bookshelf-journal ember-view">
                                <div id="ember82996" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1535-3605.png"
                                            alt="Cover of Journal of the History of Sexuality"
                                            title="Journal of the History of Sexuality">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Sexuality" class="bookshelf-journal-title">Journal
                                    of the History of Sexuality</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember82998" class="ember-view"><a href="/libraries/603/journals/12537?sort=title"
                                id="ember82999" class="bookshelf-journal ember-view">
                                <div id="ember83000" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0022-5061.png"
                                            alt="Cover of Journal of the History of the Behavioral Sciences"
                                            title="Journal of the History of the Behavioral Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of the Behavioral Sciences"
                                    class="bookshelf-journal-title">Journal of the History of the Behavioral Sciences
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83002" class="ember-view"><a href="/libraries/603/journals/15683?sort=title"
                                id="ember83003" class="bookshelf-journal ember-view">
                                <div id="ember83004" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0964-704X.png"
                                            alt="Cover of Journal of the History of the Neurosciences"
                                            title="Journal of the History of the Neurosciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of the Neurosciences"
                                    class="bookshelf-journal-title">Journal of the History of the Neurosciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83006" class="ember-view"><a href="/libraries/603/journals/33470?sort=title"
                                id="ember83007" class="bookshelf-journal ember-view">
                                <div id="ember83008" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1522-1067.png"
                                            alt="Cover of Journal of the Illinois State Historical Society (1998-)"
                                            title="Journal of the Illinois State Historical Society (1998-)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Illinois State Historical Society (1998-)"
                                    class="bookshelf-journal-title">Journal of the Illinois State Historical Society
                                    (1998-)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83010" class="ember-view"><a href="/libraries/603/journals/10680?sort=title"
                                id="ember83011" class="bookshelf-journal ember-view">
                                <div id="ember83012" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0128-5483.png"
                                            alt="Cover of Journal of the Malaysian Branch of the Royal Asiatic Society"
                                            title="Journal of the Malaysian Branch of the Royal Asiatic Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Malaysian Branch of the Royal Asiatic Society"
                                    class="bookshelf-journal-title">Journal of the Malaysian Branch of the Royal Asiatic
                                    Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83014" class="ember-view"><a href="/libraries/603/journals/69095?sort=title"
                                id="ember83015" class="bookshelf-journal ember-view">
                                <div id="ember83016" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2376-0699-90ba5d08-3d7b-48ba-adb4-20ac6e25b372.png"
                                            alt="Cover of Journal of the Ottoman and Turkish Studies Association"
                                            title="Journal of the Ottoman and Turkish Studies Association">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Ottoman and Turkish Studies Association"
                                    class="bookshelf-journal-title">Journal of the Ottoman and Turkish Studies
                                    Association</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83018" class="ember-view"><a href="/libraries/603/journals/9762?sort=title"
                                id="ember83019" class="bookshelf-journal ember-view">
                                <div id="ember83020" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1872-261X.png"
                                            alt="Cover of Journal of the Philosophy of History"
                                            title="Journal of the Philosophy of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Philosophy of History" class="bookshelf-journal-title">
                                    Journal of the Philosophy of History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83022" class="ember-view"><a href="/libraries/603/journals/69199?sort=title"
                                id="ember83023" class="bookshelf-journal ember-view">
                                <div id="ember83024" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2044-0014-6b107947-b95a-4b38-8fb6-40824b4f7eac.png"
                                            alt="Cover of Journal of the Warburg and Courtauld Institutes"
                                            title="Journal of the Warburg and Courtauld Institutes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Warburg and Courtauld Institutes"
                                    class="bookshelf-journal-title">Journal of the Warburg and Courtauld Institutes
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83026" class="ember-view"><a href="/libraries/603/journals/17890?sort=title"
                                id="ember83027" class="bookshelf-journal ember-view">
                                <div id="ember83028" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1755-182X.png"
                                            alt="Cover of Journal of Tourism History"
                                            title="Journal of Tourism History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Tourism History" class="bookshelf-journal-title">Journal of
                                    Tourism History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83030" class="ember-view"><a href="/libraries/603/journals/920?sort=title"
                                id="ember83031" class="bookshelf-journal ember-view">
                                <div id="ember83032" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0096-1442.png"
                                            alt="Cover of Journal of Urban History" title="Journal of Urban History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Urban History" class="bookshelf-journal-title">Journal of Urban
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83034" class="ember-view"><a href="/libraries/603/journals/135542?sort=title"
                                id="ember83035" class="bookshelf-journal ember-view">
                                <div id="ember83036" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2470-4768.png"
                                            alt="Cover of Journal of Veterans Studies"
                                            title="Journal of Veterans Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Veterans Studies" class="bookshelf-journal-title">Journal of
                                    Veterans Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83038" class="ember-view"><a href="/libraries/603/journals/17431?sort=title"
                                id="ember83039" class="bookshelf-journal ember-view">
                                <div id="ember83040" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1355-5502.png"
                                            alt="Cover of Journal of Victorian Culture"
                                            title="Journal of Victorian Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Victorian Culture" class="bookshelf-journal-title">Journal of
                                    Victorian Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83042" class="ember-view"><a href="/libraries/603/journals/36413?sort=title"
                                id="ember83043" class="bookshelf-journal ember-view">
                                <div id="ember83044" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1752-6272.png"
                                            alt="Cover of Journal of War &amp; Culture Studies"
                                            title="Journal of War &amp; Culture Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of War &amp; Culture Studies" class="bookshelf-journal-title">
                                    Journal of War &amp; Culture Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83046" class="ember-view"><a href="/libraries/603/journals/136805?sort=title"
                                id="ember83047" class="bookshelf-journal ember-view">
                                <div id="ember83048" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2327-1868.png"
                                            alt="Cover of Journal of West African History"
                                            title="Journal of West African History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of West African History" class="bookshelf-journal-title">Journal of
                                    West African History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83050" class="ember-view"><a href="/libraries/603/journals/10804?sort=title"
                                id="ember83051" class="bookshelf-journal ember-view">
                                <div id="ember83052" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1042-7961.png"
                                            alt="Cover of Journal of Women's History"
                                            title="Journal of Women's History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Women's History" class="bookshelf-journal-title">Journal of
                                    Women's History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83054" class="ember-view"><a href="/libraries/603/journals/10749?sort=title"
                                id="ember83055" class="bookshelf-journal ember-view">
                                <div id="ember83056" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1045-6007.png"
                                            alt="Cover of Journal of World History" title="Journal of World History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of World History" class="bookshelf-journal-title">Journal of World
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83058" class="ember-view"><a href="/libraries/603/journals/6553?sort=title"
                                id="ember83059" class="bookshelf-journal ember-view">
                                <div id="ember83060" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0892-7537.png"
                                            alt="Cover of Journal of World Prehistory"
                                            title="Journal of World Prehistory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of World Prehistory" class="bookshelf-journal-title">Journal of
                                    World Prehistory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83062" class="ember-view"><a href="/libraries/603/journals/69343?sort=title"
                                id="ember83063" class="bookshelf-journal ember-view">
                                <div id="ember83064" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1076-156X.png"
                                            alt="Cover of Journal of World-Systems Research"
                                            title="Journal of World-Systems Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of World-Systems Research" class="bookshelf-journal-title">Journal
                                    of World-Systems Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83066" class="ember-view"><a href="/libraries/603/journals/373525?sort=title"
                                id="ember83067" class="bookshelf-journal ember-view">
                                <div id="ember83068" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/26412071.png"
                                            alt="Cover of Journalism History" title="Journalism History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journalism History" class="bookshelf-journal-title">Journalism History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83070" class="ember-view"><a href="/libraries/603/journals/40236?sort=title"
                                id="ember83071" class="bookshelf-journal ember-view">
                                <div id="ember83072" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2294-9321.png"
                                            alt="Cover of Judaïsme Ancien - Ancient Judaism"
                                            title="Judaïsme Ancien - Ancient Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Judaïsme Ancien - Ancient Judaism" class="bookshelf-journal-title">Judaïsme
                                    Ancien - Ancient Judaism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83074" class="ember-view"><a href="/libraries/603/journals/69640?sort=title"
                                id="ember83075" class="bookshelf-journal ember-view">
                                <div id="ember83076" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2340-1869-71019d8f-4f02-452d-985f-7d9c38e073f5.png"
                                            alt="Cover of Kamchatka : Revista de Análisis Cultural"
                                            title="Kamchatka : Revista de Análisis Cultural">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kamchatka : Revista de Análisis Cultural" class="bookshelf-journal-title">
                                    Kamchatka : Revista de Análisis Cultural</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83078" class="ember-view"><a href="/libraries/603/journals/387241?sort=title"
                                id="ember83079" class="bookshelf-journal ember-view">
                                <div id="ember83080" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2604-6199-2c5a3465-5da6-40c6-9495-5a6a426c1bae.png"
                                            alt="Cover of Karanos : Bulletin of Ancient Macedonian Studies"
                                            title="Karanos : Bulletin of Ancient Macedonian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Karanos : Bulletin of Ancient Macedonian Studies"
                                    class="bookshelf-journal-title">Karanos : Bulletin of Ancient Macedonian Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83082" class="ember-view"><a href="/libraries/603/journals/69697?sort=title"
                                id="ember83083" class="bookshelf-journal ember-view">
                                <div id="ember83084" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1797-2299.png"
                                            alt="Cover of Kasvatus &amp; Aika" title="Kasvatus &amp; Aika">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kasvatus &amp; Aika" class="bookshelf-journal-title">Kasvatus &amp; Aika
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83086" class="ember-view"><a href="/libraries/603/journals/263145?sort=title"
                                id="ember83087" class="bookshelf-journal ember-view">
                                <div id="ember83088" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1580-0261.png"
                                            alt="Cover of Keria Ljubljana" title="Keria Ljubljana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Keria Ljubljana" class="bookshelf-journal-title">Keria Ljubljana</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83090" class="ember-view"><a href="/libraries/603/journals/15778?sort=title"
                                id="ember83091" class="bookshelf-journal ember-view">
                                <div id="ember83092" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0023-2084.png"
                                            alt="Cover of Kleio" title="Kleio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kleio" class="bookshelf-journal-title">Kleio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83094" class="ember-view"><a href="/libraries/603/journals/175391?sort=title"
                                id="ember83095" class="bookshelf-journal ember-view">
                                <div id="ember83096" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1643-8191-e575b17c-ba4f-4af2-aba4-b903cdada64f.png"
                                            alt="Cover of Klio : Czasopismo Poświęcone Dziejom Polski i Powszechnym"
                                            title="Klio : Czasopismo Poświęcone Dziejom Polski i Powszechnym">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Klio : Czasopismo Poświęcone Dziejom Polski i Powszechnym"
                                    class="bookshelf-journal-title">Klio : Czasopismo Poświęcone Dziejom Polski i
                                    Powszechnym</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83098" class="ember-view"><a href="/libraries/603/journals/69878?sort=title"
                                id="ember83099" class="bookshelf-journal ember-view">
                                <div id="ember83100" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2192-7669.png"
                                            alt="Cover of Klio (Leipzig, Germany : 1901)"
                                            title="Klio (Leipzig, Germany : 1901)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Klio (Leipzig, Germany : 1901)" class="bookshelf-journal-title">Klio
                                    (Leipzig, Germany : 1901)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83102" class="ember-view"><a href="/libraries/603/journals/444084?sort=title"
                                id="ember83103" class="bookshelf-journal ember-view">
                                <div id="ember83104" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2673-9585-54f82eb0-bdaf-42c1-877f-883e4aaa8657.png"
                                            alt="Cover of Knowledge" title="Knowledge">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Knowledge" class="bookshelf-journal-title">Knowledge</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83106" class="ember-view"><a href="/libraries/603/journals/400415?sort=title"
                                id="ember83107" class="bookshelf-journal ember-view">
                                <div id="ember83108" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2543-9421-77a4dca2-bd20-481e-a261-409248a24911.png"
                                            alt="Cover of Konwersatorium Wiedzy o Mieście"
                                            title="Konwersatorium Wiedzy o Mieście">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Konwersatorium Wiedzy o Mieście" class="bookshelf-journal-title">
                                    Konwersatorium Wiedzy o Mieście</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83110" class="ember-view"><a href="/libraries/603/journals/54242?sort=title"
                                id="ember83111" class="bookshelf-journal ember-view">
                                <div id="ember83112" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1225-505X.png"
                                            alt="Cover of Korean Journal of Medical History / Uisahak "
                                            title="Korean Journal of Medical History / Uisahak ">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Korean Journal of Medical History / Uisahak "
                                    class="bookshelf-journal-title">Korean Journal of Medical History / Uisahak </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83114" class="ember-view"><a href="/libraries/603/journals/10741?sort=title"
                                id="ember83115" class="bookshelf-journal ember-view">
                                <div id="ember83116" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1531-023X.png"
                                            alt="Cover of Kritika: Explorations in Russian and Eurasian History"
                                            title="Kritika: Explorations in Russian and Eurasian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kritika: Explorations in Russian and Eurasian History"
                                    class="bookshelf-journal-title">Kritika: Explorations in Russian and Eurasian
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83118" class="ember-view"><a href="/libraries/603/journals/17119?sort=title"
                                id="ember83119" class="bookshelf-journal ember-view">
                                <div id="ember83120" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0023-656X.png"
                                            alt="Cover of Labor History" title="Labor History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labor History" class="bookshelf-journal-title">Labor History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83122" class="ember-view"><a href="/libraries/603/journals/18272?sort=title"
                                id="ember83123" class="bookshelf-journal ember-view">
                                <div id="ember83124" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1547-6715.png"
                                            alt="Cover of Labor Studies in Working-Class History of the Americas"
                                            title="Labor Studies in Working-Class History of the Americas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labor Studies in Working-Class History of the Americas"
                                    class="bookshelf-journal-title">Labor Studies in Working-Class History of the
                                    Americas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83126" class="ember-view"><a href="/libraries/603/journals/10728?sort=title"
                                id="ember83127" class="bookshelf-journal ember-view">
                                <div id="ember83128" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1538-9758.png"
                                            alt="Cover of Labor Studies Journal" title="Labor Studies Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labor Studies Journal" class="bookshelf-journal-title">Labor Studies Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83130" class="ember-view"><a href="/libraries/603/journals/70181?sort=title"
                                id="ember83131" class="bookshelf-journal ember-view">
                                <div id="ember83132" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1646-5237.png"
                                            alt="Cover of Laboreal" title="Laboreal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Laboreal" class="bookshelf-journal-title">Laboreal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83134" class="ember-view"><a href="/libraries/603/journals/70180?sort=title"
                                id="ember83135" class="bookshelf-journal ember-view">
                                <div id="ember83136" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0700-3862.png"
                                            alt="Cover of Labour (Halifax)" title="Labour (Halifax)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labour (Halifax)" class="bookshelf-journal-title">Labour (Halifax)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83138" class="ember-view"><a href="/libraries/603/journals/70191?sort=title"
                                id="ember83139" class="bookshelf-journal ember-view">
                                <div id="ember83140" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0023-6942-e62bd8de-d626-481d-9755-22ae321fc9e5.png"
                                            alt="Cover of Labour History" title="Labour History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labour History" class="bookshelf-journal-title">Labour History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83142" class="ember-view"><a href="/libraries/603/journals/38769?sort=title"
                                id="ember83143" class="bookshelf-journal ember-view">
                                <div id="ember83144" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0961-5652.png"
                                            alt="Cover of Labour History Review" title="Labour History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Labour History Review" class="bookshelf-journal-title">Labour History Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83146" class="ember-view"><a href="/libraries/603/journals/70264?sort=title"
                                id="ember83147" class="bookshelf-journal ember-view">
                                <div id="ember83148" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0143-3768.png"
                                            alt="Cover of Landscape History" title="Landscape History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Landscape History" class="bookshelf-journal-title">Landscape History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83150" class="ember-view"><a href="/libraries/603/journals/10700?sort=title"
                                id="ember83151" class="bookshelf-journal ember-view">
                                <div id="ember83152" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0884-3236.png"
                                            alt="Cover of Late Imperial China" title="Late Imperial China">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Late Imperial China" class="bookshelf-journal-title">Late Imperial China
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83154" class="ember-view"><a href="/libraries/603/journals/70356?sort=title"
                                id="ember83155" class="bookshelf-journal ember-view">
                                <div id="ember83156" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1045-6635.png"
                                            alt="Cover of Latin American Antiquity" title="Latin American Antiquity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Latin American Antiquity" class="bookshelf-journal-title">Latin American
                                    Antiquity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83158" class="ember-view"><a href="/libraries/603/journals/10531?sort=title"
                                id="ember83159" class="bookshelf-journal ember-view">
                                <div id="ember83160" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0075-8744.png"
                                            alt="Cover of The Leo Baeck Institute Yearbook"
                                            title="The Leo Baeck Institute Yearbook">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Leo Baeck Institute Yearbook" class="bookshelf-journal-title">The Leo
                                    Baeck Institute Yearbook</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83162" class="ember-view"><a href="/libraries/603/journals/110996?sort=title"
                                id="ember83163" class="bookshelf-journal ember-view">
                                <div id="ember83164" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1965-0523.png"
                                            alt="Cover of Les Cahiers de la Shoah" title="Les Cahiers de la Shoah">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Les Cahiers de la Shoah" class="bookshelf-journal-title">Les Cahiers de la
                                    Shoah</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83167" class="ember-view"><a href="/libraries/603/journals/36228?sort=title"
                                id="ember83168" class="bookshelf-journal ember-view">
                                <div id="ember83169" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1962-1086.png"
                                            alt="Cover of Les Cahiers du Centre Georges Canguilhem"
                                            title="Les Cahiers du Centre Georges Canguilhem">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Les Cahiers du Centre Georges Canguilhem" class="bookshelf-journal-title">
                                    Les Cahiers du Centre Georges Canguilhem</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83171" class="ember-view"><a href="/libraries/603/journals/36416?sort=title"
                                id="ember83172" class="bookshelf-journal ember-view">
                                <div id="ember83173" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0075-8914.png"
                                            alt="Cover of Levant" title="Levant">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Levant" class="bookshelf-journal-title">Levant</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83175" class="ember-view"><a href="/libraries/603/journals/70831?sort=title"
                                id="ember83176" class="bookshelf-journal ember-view">
                                <div id="ember83177" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1392-0448-da7ce627-9375-4a23-8b12-0c7963fe826a.png"
                                            alt="Cover of Lietuvos Istorijos Studijos"
                                            title="Lietuvos Istorijos Studijos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Lietuvos Istorijos Studijos" class="bookshelf-journal-title">Lietuvos
                                    Istorijos Studijos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83179" class="ember-view"><a href="/libraries/603/journals/36397?sort=title"
                                id="ember83180" class="bookshelf-journal ember-view">
                                <div id="ember83181" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0305-8034.png"
                                            alt="Cover of The London Journal" title="The London Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The London Journal" class="bookshelf-journal-title">The London Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83183" class="ember-view"><a href="/libraries/603/journals/71234?sort=title"
                                id="ember83184" class="bookshelf-journal ember-view">
                                <div id="ember83185" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0102-6445.png"
                                            alt="Cover of Lua Nova: Revista de Cultura e Política"
                                            title="Lua Nova: Revista de Cultura e Política">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Lua Nova: Revista de Cultura e Política" class="bookshelf-journal-title">Lua
                                    Nova: Revista de Cultura e Política</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83187" class="ember-view"><a href="/libraries/603/journals/71292?sort=title"
                                id="ember83188" class="bookshelf-journal ember-view">
                                <div id="ember83189" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2051-1817.png"
                                            alt="Cover of Luxury" title="Luxury">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Luxury" class="bookshelf-journal-title">Luxury</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83191" class="ember-view"><a href="/libraries/603/journals/71386?sort=title"
                                id="ember83192" class="bookshelf-journal ember-view">
                                <div id="ember83193" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0718-2244-03707d66-82b8-4dbc-96e5-cddee4778f42.png"
                                            alt="Cover of Magallania" title="Magallania">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Magallania" class="bookshelf-journal-title">Magallania</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83195" class="ember-view"><a href="/libraries/603/journals/4926?sort=title"
                                id="ember83196" class="bookshelf-journal ember-view">
                                <div id="ember83197" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1744-9359.png"
                                            alt="Cover of Management &amp; Organizational History"
                                            title="Management &amp; Organizational History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Management &amp; Organizational History" class="bookshelf-journal-title">
                                    Management &amp; Organizational History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83199" class="ember-view"><a href="/libraries/603/journals/71728?sort=title"
                                id="ember83200" class="bookshelf-journal ember-view">
                                <div id="ember83201" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0025-3359.png"
                                            alt="Cover of Mariner's Mirror" title="Mariner's Mirror">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mariner's Mirror" class="bookshelf-journal-title">Mariner's Mirror</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83203" class="ember-view"><a href="/libraries/603/journals/40097?sort=title"
                                id="ember83204" class="bookshelf-journal ember-view">
                                <div id="ember83205" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1526-3894.png"
                                            alt="Cover of Massachusetts Historical Review"
                                            title="Massachusetts Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Massachusetts Historical Review" class="bookshelf-journal-title">
                                    Massachusetts Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83207" class="ember-view"><a href="/libraries/603/journals/300882?sort=title"
                                id="ember83208" class="bookshelf-journal ember-view">
                                <div id="ember83209" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2086-7050.png"
                                            alt="Cover of Masyarakat, Kebudayaan dan Politik"
                                            title="Masyarakat, Kebudayaan dan Politik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Masyarakat, Kebudayaan dan Politik" class="bookshelf-journal-title">
                                    Masyarakat, Kebudayaan dan Politik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83211" class="ember-view"><a href="/libraries/603/journals/71943?sort=title"
                                id="ember83212" class="bookshelf-journal ember-view">
                                <div id="ember83213" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1952-4226.png"
                                            alt="Cover of Matériaux pour l’Histoire de Notre Temps"
                                            title="Matériaux pour l’Histoire de Notre Temps">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Matériaux pour l’Histoire de Notre Temps" class="bookshelf-journal-title">
                                    Matériaux pour l’Histoire de Notre Temps</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83215" class="ember-view"><a href="/libraries/603/journals/72051?sort=title"
                                id="ember83216" class="bookshelf-journal ember-view">
                                <div id="ember83217" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0025-6285-11164183-e98a-4d15-9c32-ef3cd15f6f0f.png"
                                            alt="Cover of Meander" title="Meander">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Meander" class="bookshelf-journal-title">Meander</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83219" class="ember-view"><a href="/libraries/603/journals/10689?sort=title"
                                id="ember83220" class="bookshelf-journal ember-view">
                                <div id="ember83221" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1934-2489.png"
                                            alt="Cover of Mechademia" title="Mechademia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mechademia" class="bookshelf-journal-title">Mechademia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83223" class="ember-view"><a href="/libraries/603/journals/40261?sort=title"
                                id="ember83224" class="bookshelf-journal ember-view">
                                <div id="ember83225" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2033-5385.png"
                                            alt="Cover of The Mediaeval Journal" title="The Mediaeval Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Mediaeval Journal" class="bookshelf-journal-title">The Mediaeval Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83227" class="ember-view"><a href="/libraries/603/journals/103386?sort=title"
                                id="ember83228" class="bookshelf-journal ember-view">
                                <div id="ember83229" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0934-7453.png"
                                            alt="Cover of Mediaevistik" title="Mediaevistik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mediaevistik" class="bookshelf-journal-title">Mediaevistik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83231" class="ember-view"><a href="/libraries/603/journals/20862?sort=title"
                                id="ember83232" class="bookshelf-journal ember-view">
                                <div id="ember83233" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0025-7273.png"
                                            alt="Cover of Medical History" title="Medical History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medical History" class="bookshelf-journal-title">Medical History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83235" class="ember-view"><a href="/libraries/603/journals/108504?sort=title"
                                id="ember83236" class="bookshelf-journal ember-view">
                                <div id="ember83237" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2405-691X.png"
                                            alt="Cover of Medicine Anthropology Theory"
                                            title="Medicine Anthropology Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medicine Anthropology Theory" class="bookshelf-journal-title">Medicine
                                    Anthropology Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83239" class="ember-view"><a href="/libraries/603/journals/36364?sort=title"
                                id="ember83240" class="bookshelf-journal ember-view">
                                <div id="ember83241" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0076-6097.png"
                                            alt="Cover of Medieval Archaeology" title="Medieval Archaeology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medieval Archaeology" class="bookshelf-journal-title">Medieval Archaeology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83243" class="ember-view"><a href="/libraries/603/journals/9916?sort=title"
                                id="ember83244" class="bookshelf-journal ember-view">
                                <div id="ember83245" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1380-7854.png"
                                            alt="Cover of Medieval Encounters" title="Medieval Encounters">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medieval Encounters" class="bookshelf-journal-title">Medieval Encounters
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83247" class="ember-view"><a href="/libraries/603/journals/4120?sort=title"
                                id="ember83248" class="bookshelf-journal ember-view">
                                <div id="ember83249" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0971-9458.png"
                                            alt="Cover of The Medieval History Journal"
                                            title="The Medieval History Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Medieval History Journal" class="bookshelf-journal-title">The Medieval
                                    History Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83251" class="ember-view"><a href="/libraries/603/journals/40262?sort=title"
                                id="ember83252" class="bookshelf-journal ember-view">
                                <div id="ember83253" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/default-journal-cover.png"
                                            alt="Cover of The Medieval Low Countries"
                                            title="The Medieval Low Countries">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Medieval Low Countries" class="bookshelf-journal-title">The Medieval Low
                                    Countries</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83255" class="ember-view"><a href="/libraries/603/journals/36456?sort=title"
                                id="ember83256" class="bookshelf-journal ember-view">
                                <div id="ember83257" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2046-5726.png"
                                            alt="Cover of Medieval Mystical Theology"
                                            title="Medieval Mystical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medieval Mystical Theology" class="bookshelf-journal-title">Medieval
                                    Mystical Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83259" class="ember-view"><a href="/libraries/603/journals/36399?sort=title"
                                id="ember83260" class="bookshelf-journal ember-view">
                                <div id="ember83261" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1366-0691.png"
                                            alt="Cover of Medieval Sermon Studies" title="Medieval Sermon Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medieval Sermon Studies" class="bookshelf-journal-title">Medieval Sermon
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83263" class="ember-view"><a href="/libraries/603/journals/72255?sort=title"
                                id="ember83264" class="bookshelf-journal ember-view">
                                <div id="ember83265" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0751-2708.png"
                                            alt="Cover of Médiévales" title="Médiévales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Médiévales" class="bookshelf-journal-title">Médiévales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83267" class="ember-view"><a href="/libraries/603/journals/123903?sort=title"
                                id="ember83268" class="bookshelf-journal ember-view">
                                <div id="ember83269" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0211-3473-40db99e8-31b1-4c25-8aa9-f220706e2ade.png"
                                            alt="Cover of Medievalia : Revista d'Estudis Medievals"
                                            title="Medievalia : Revista d'Estudis Medievals">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medievalia : Revista d'Estudis Medievals" class="bookshelf-journal-title">
                                    Medievalia : Revista d'Estudis Medievals</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83271" class="ember-view"><a href="/libraries/603/journals/72261?sort=title"
                                id="ember83272" class="bookshelf-journal ember-view">
                                <div id="ember83273" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1646-740X-2c2a3411-4f5f-43bb-8048-9ba85e0b028b.png"
                                            alt="Cover of Medievalista" title="Medievalista">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medievalista" class="bookshelf-journal-title">Medievalista</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83275" class="ember-view"><a href="/libraries/603/journals/16626?sort=title"
                                id="ember83276" class="bookshelf-journal ember-view">
                                <div id="ember83277" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0951-8967.png"
                                            alt="Cover of Mediterranean Historical Review"
                                            title="Mediterranean Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mediterranean Historical Review" class="bookshelf-journal-title">
                                    Mediterranean Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83279" class="ember-view"><a href="/libraries/603/journals/33421?sort=title"
                                id="ember83280" class="bookshelf-journal ember-view">
                                <div id="ember83281" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1074-164X.png"
                                            alt="Cover of Mediterranean Studies" title="Mediterranean Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mediterranean Studies" class="bookshelf-journal-title">Mediterranean Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83283" class="ember-view"><a href="/libraries/603/journals/103408?sort=title"
                                id="ember83284" class="bookshelf-journal ember-view">
                                <div id="ember83285" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0025-8431.png"
                                            alt="Cover of Medizinhistorisches Journal"
                                            title="Medizinhistorisches Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medizinhistorisches Journal" class="bookshelf-journal-title">
                                    Medizinhistorisches Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83287" class="ember-view"><a href="/libraries/603/journals/72513?sort=title"
                                id="ember83288" class="bookshelf-journal ember-view">
                                <div id="ember83289" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0327-5752.png"
                                            alt="Cover of Memoria Americana : Cuadernos de Etnohistoria"
                                            title="Memoria Americana : Cuadernos de Etnohistoria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Memoria Americana : Cuadernos de Etnohistoria"
                                    class="bookshelf-journal-title">Memoria Americana : Cuadernos de Etnohistoria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83291" class="ember-view"><a href="/libraries/603/journals/72540?sort=title"
                                id="ember83292" class="bookshelf-journal ember-view">
                                <div id="ember83293" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1794-8886.png"
                                            alt="Cover of Memorias" title="Memorias">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Memorias" class="bookshelf-journal-title">Memorias</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83295" class="ember-view"><a href="/libraries/603/journals/72770?sort=title"
                                id="ember83296" class="bookshelf-journal ember-view">
                                <div id="ember83297" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2167-8634.png"
                                            alt="Cover of Michigan Academician" title="Michigan Academician">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Michigan Academician" class="bookshelf-journal-title">Michigan Academician
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83299" class="ember-view"><a href="/libraries/603/journals/72796?sort=title"
                                id="ember83300" class="bookshelf-journal ember-view">
                                <div id="ember83301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2327-9672.png"
                                            alt="Cover of Michigan Historical Review"
                                            title="Michigan Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Michigan Historical Review" class="bookshelf-journal-title">Michigan
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83303" class="ember-view"><a href="/libraries/603/journals/36420?sort=title"
                                id="ember83304" class="bookshelf-journal ember-view">
                                <div id="ember83305" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0047-729X.png"
                                            alt="Cover of Midland History" title="Midland History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Midland History" class="bookshelf-journal-title">Midland History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83307" class="ember-view"><a href="/libraries/603/journals/72958?sort=title"
                                id="ember83308" class="bookshelf-journal ember-view">
                                <div id="ember83309" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1960-6648.png"
                                            alt="Cover of Mil Neuf Cent : Revue d'Histoire Intellectuelle"
                                            title="Mil Neuf Cent : Revue d'Histoire Intellectuelle">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mil Neuf Cent : Revue d'Histoire Intellectuelle"
                                    class="bookshelf-journal-title">Mil Neuf Cent : Revue d'Histoire Intellectuelle
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83311" class="ember-view"><a href="/libraries/603/journals/72969?sort=title"
                                id="ember83312" class="bookshelf-journal ember-view">
                                <div id="ember83313" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2193-2336.png"
                                            alt="Cover of Militärgeschichtliche Zeitschrift"
                                            title="Militärgeschichtliche Zeitschrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Militärgeschichtliche Zeitschrift" class="bookshelf-journal-title">
                                    Militärgeschichtliche Zeitschrift</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83315" class="ember-view"><a href="/libraries/603/journals/72999?sort=title"
                                id="ember83316" class="bookshelf-journal ember-view">
                                <div id="ember83317" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1867-030X.png"
                                            alt="Cover of Millennium" title="Millennium">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Millennium" class="bookshelf-journal-title">Millennium</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83319" class="ember-view"><a href="/libraries/603/journals/36430?sort=title"
                                id="ember83320" class="bookshelf-journal ember-view">
                                <div id="ember83321" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0147-037X.png"
                                            alt="Cover of Ming Studies" title="Ming Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ming Studies" class="bookshelf-journal-title">Ming Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83323" class="ember-view"><a href="/libraries/603/journals/40749?sort=title"
                                id="ember83324" class="bookshelf-journal ember-view">
                                <div id="ember83325" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2307-2903.png"
                                            alt="Cover of Mitteilungen des Instituts für Österreichische Geschichtsforschung"
                                            title="Mitteilungen des Instituts für Österreichische Geschichtsforschung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mitteilungen des Instituts für Österreichische Geschichtsforschung"
                                    class="bookshelf-journal-title">Mitteilungen des Instituts für Österreichische
                                    Geschichtsforschung</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83327" class="ember-view"><a href="/libraries/603/journals/128945?sort=title"
                                id="ember83328" class="bookshelf-journal ember-view">
                                <div id="ember83329" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0949-0345-a8b1ae24-0530-4fb4-86d6-cd853469dd70.png"
                                            alt="Cover of Das Mittelalter : Perspektiven Mediävistischer Forschung"
                                            title="Das Mittelalter : Perspektiven Mediävistischer Forschung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Das Mittelalter : Perspektiven Mediävistischer Forschung"
                                    class="bookshelf-journal-title">Das Mittelalter : Perspektiven Mediävistischer
                                    Forschung</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83331" class="ember-view"><a href="/libraries/603/journals/39899?sort=title"
                                id="ember83332" class="bookshelf-journal ember-view">
                                <div id="ember83333" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2296-0503.png"
                                            alt="Cover of Mobility in History" title="Mobility in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mobility in History" class="bookshelf-journal-title">Mobility in History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83335" class="ember-view"><a href="/libraries/603/journals/19168?sort=title"
                                id="ember83336" class="bookshelf-journal ember-view">
                                <div id="ember83337" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1479-2443.png"
                                            alt="Cover of Modern Intellectual History"
                                            title="Modern Intellectual History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modern Intellectual History" class="bookshelf-journal-title">Modern
                                    Intellectual History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83339" class="ember-view"><a href="/libraries/603/journals/10777?sort=title"
                                id="ember83340" class="bookshelf-journal ember-view">
                                <div id="ember83341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1071-6068.png"
                                            alt="Cover of Modernism/modernity" title="Modernism/modernity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modernism/modernity" class="bookshelf-journal-title">Modernism/modernity
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83343" class="ember-view"><a href="/libraries/603/journals/38824?sort=title"
                                id="ember83344" class="bookshelf-journal ember-view">
                                <div id="ember83345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2041-1022.png"
                                            alt="Cover of Modernist Cultures" title="Modernist Cultures">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modernist Cultures" class="bookshelf-journal-title">Modernist Cultures</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83347" class="ember-view"><a href="/libraries/603/journals/73380?sort=title"
                                id="ember83348" class="bookshelf-journal ember-view">
                                <div id="ember83349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2260-7927.png"
                                            alt="Cover of Monde(s) : Histoire, Espaces, Relations"
                                            title="Monde(s) : Histoire, Espaces, Relations">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monde(s) : Histoire, Espaces, Relations" class="bookshelf-journal-title">
                                    Monde(s) : Histoire, Espaces, Relations</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83351" class="ember-view"><a href="/libraries/603/journals/10781?sort=title"
                                id="ember83352" class="bookshelf-journal ember-view">
                                <div id="ember83353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0027-0741.png"
                                            alt="Cover of Monumenta Nipponica" title="Monumenta Nipponica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monumenta Nipponica" class="bookshelf-journal-title">Monumenta Nipponica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83355" class="ember-view"><a href="/libraries/603/journals/73515?sort=title"
                                id="ember83356" class="bookshelf-journal ember-view">
                                <div id="ember83357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0254-9948.png"
                                            alt="Cover of Monumenta Serica" title="Monumenta Serica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monumenta Serica" class="bookshelf-journal-title">Monumenta Serica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83359" class="ember-view"><a href="/libraries/603/journals/36051?sort=title"
                                id="ember83360" class="bookshelf-journal ember-view">
                                <div id="ember83361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1782-1436.png"
                                            alt="Cover of Le Moyen Age" title="Le Moyen Age">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Le Moyen Age" class="bookshelf-journal-title">Le Moyen Age</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83363" class="ember-view"><a href="/libraries/603/journals/36187?sort=title"
                                id="ember83364" class="bookshelf-journal ember-view">
                                <div id="ember83365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2100-0123.png"
                                            alt="Cover of Napoleonica. La Revue" title="Napoleonica. La Revue">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Napoleonica. La Revue" class="bookshelf-journal-title">Napoleonica. La Revue
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83367" class="ember-view"><a href="/libraries/603/journals/10661?sort=title"
                                id="ember83368" class="bookshelf-journal ember-view">
                                <div id="ember83369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1943-2569.png"
                                            alt="Cover of Native South" title="Native South">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Native South" class="bookshelf-journal-title">Native South</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83371" class="ember-view"><a href="/libraries/603/journals/37435?sort=title"
                                id="ember83372" class="bookshelf-journal ember-view">
                                <div id="ember83373" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0169-6726.png"
                                            alt="Cover of Netherlands Yearbook for History of Art / Nederlands Kunsthistorisch Jaarboek"
                                            title="Netherlands Yearbook for History of Art / Nederlands Kunsthistorisch Jaarboek">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Netherlands Yearbook for History of Art / Nederlands Kunsthistorisch Jaarboek"
                                    class="bookshelf-journal-title">Netherlands Yearbook for History of Art / Nederlands
                                    Kunsthistorisch Jaarboek</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83375" class="ember-view"><a href="/libraries/603/journals/164900?sort=title"
                                id="ember83376" class="bookshelf-journal ember-view">
                                <div id="ember83377" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0028-3320.png"
                                            alt="Cover of Neue Politische Literatur" title="Neue Politische Literatur">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Neue Politische Literatur" class="bookshelf-journal-title">Neue Politische
                                    Literatur</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83379" class="ember-view"><a href="/libraries/603/journals/32166?sort=title"
                                id="ember83380" class="bookshelf-journal ember-view">
                                <div id="ember83381" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0028-4866.png"
                                            alt="Cover of The New England Quarterly" title="The New England Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The New England Quarterly" class="bookshelf-journal-title">The New England
                                    Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83383" class="ember-view"><a href="/libraries/603/journals/74673?sort=title"
                                id="ember83384" class="bookshelf-journal ember-view">
                                <div id="ember83385" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0146-437X-9b092dc3-411b-42c3-a461-17e115350d20.png"
                                            alt="Cover of New York History" title="New York History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="New York History" class="bookshelf-journal-title">New York History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83387" class="ember-view"><a href="/libraries/603/journals/74767?sort=title"
                                id="ember83388" class="bookshelf-journal ember-view">
                                <div id="ember83389" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1719-1726.png"
                                            alt="Cover of Newfoundland and Labrador Studies"
                                            title="Newfoundland and Labrador Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Newfoundland and Labrador Studies" class="bookshelf-journal-title">
                                    Newfoundland and Labrador Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83391" class="ember-view"><a href="/libraries/603/journals/10729?sort=title"
                                id="ember83392" class="bookshelf-journal ember-view">
                                <div id="ember83393" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1188-9330-0b779f4b-e9cf-43e1-b680-5d52917ee03e.png"
                                            alt="Cover of NINE: A Journal of Baseball History and Culture"
                                            title="NINE: A Journal of Baseball History and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="NINE: A Journal of Baseball History and Culture"
                                    class="bookshelf-journal-title">NINE: A Journal of Baseball History and Culture
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83395" class="ember-view"><a href="/libraries/603/journals/17452?sort=title"
                                id="ember83396" class="bookshelf-journal ember-view">
                                <div id="ember83397" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0890-5495.png"
                                            alt="Cover of Nineteenth-Century Contexts"
                                            title="Nineteenth-Century Contexts">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nineteenth-Century Contexts" class="bookshelf-journal-title">
                                    Nineteenth-Century Contexts</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83399" class="ember-view"><a href="/libraries/603/journals/75169?sort=title"
                                id="ember83400" class="bookshelf-journal ember-view">
                                <div id="ember83401" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2001-7766.png"
                                            alt="Cover of Nordic Journal of Educational History"
                                            title="Nordic Journal of Educational History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nordic Journal of Educational History" class="bookshelf-journal-title">
                                    Nordic Journal of Educational History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83403" class="ember-view"><a href="/libraries/603/journals/314275?sort=title"
                                id="ember83404" class="bookshelf-journal ember-view">
                                <div id="ember83405" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2472-7490-ca0a2b5f-fc4e-497b-b780-2621420d33c6.png"
                                            alt="Cover of North American Journal of Celtic Studies"
                                            title="North American Journal of Celtic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="North American Journal of Celtic Studies" class="bookshelf-journal-title">
                                    North American Journal of Celtic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83408" class="ember-view"><a href="/libraries/603/journals/36372?sort=title"
                                id="ember83409" class="bookshelf-journal ember-view">
                                <div id="ember83410" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0078-172X.png"
                                            alt="Cover of Northern History" title="Northern History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Northern History" class="bookshelf-journal-title">Northern History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83412" class="ember-view"><a href="/libraries/603/journals/18046?sort=title"
                                id="ember83413" class="bookshelf-journal ember-view">
                                <div id="ember83414" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-9149.png"
                                            alt="Cover of Notes and Records of the Royal Society"
                                            title="Notes and Records of the Royal Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Notes and Records of the Royal Society" class="bookshelf-journal-title">
                                    Notes and Records of the Royal Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83416" class="ember-view"><a href="/libraries/603/journals/40245?sort=title"
                                id="ember83417" class="bookshelf-journal ember-view">
                                <div id="ember83418" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0078-2122.png"
                                            alt="Cover of Nottingham Medieval Studies"
                                            title="Nottingham Medieval Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nottingham Medieval Studies" class="bookshelf-journal-title">Nottingham
                                    Medieval Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83420" class="ember-view"><a href="/libraries/603/journals/9495?sort=title"
                                id="ember83421" class="bookshelf-journal ember-view">
                                <div id="ember83422" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0036-6978.png"
                                            alt="Cover of NTM Zeitschrift für Geschichte der Wissenschaften, Technik und Medizin"
                                            title="NTM Zeitschrift für Geschichte der Wissenschaften, Technik und Medizin">
                                        <!---->
                                    </div>
                                </div>
                                <div title="NTM Zeitschrift für Geschichte der Wissenschaften, Technik und Medizin"
                                    class="bookshelf-journal-title">NTM Zeitschrift für Geschichte der Wissenschaften,
                                    Technik und Medizin</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83424" class="ember-view"><a href="/libraries/603/journals/296275?sort=title"
                                id="ember83425" class="bookshelf-journal ember-view">
                                <div id="ember83426" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2462-7291-90bc6b60-5dee-4f2c-8702-22e05af531f3.png"
                                            alt="Cover of Nuevas de Indias : Anuario del CEAC"
                                            title="Nuevas de Indias : Anuario del CEAC">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nuevas de Indias : Anuario del CEAC" class="bookshelf-journal-title">Nuevas
                                    de Indias : Anuario del CEAC</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83428" class="ember-view"><a href="/libraries/603/journals/9888?sort=title"
                                id="ember83429" class="bookshelf-journal ember-view">
                                <div id="ember83430" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0029-5973.png"
                                            alt="Cover of Numen" title="Numen">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Numen" class="bookshelf-journal-title">Numen</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83432" class="ember-view"><a href="/libraries/603/journals/9805?sort=title"
                                id="ember83433" class="bookshelf-journal ember-view">
                                <div id="ember83434" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0394-7394.png"
                                            alt="Cover of Nuncius" title="Nuncius">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nuncius" class="bookshelf-journal-title">Nuncius</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83436" class="ember-view"><a href="/libraries/603/journals/31341?sort=title"
                                id="ember83437" class="bookshelf-journal ember-view">
                                <div id="ember83438" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0882-228X.png"
                                            alt="Cover of OAH Magazine of History" title="OAH Magazine of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="OAH Magazine of History" class="bookshelf-journal-title">OAH Magazine of
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83440" class="ember-view"><a href="/libraries/603/journals/75723?sort=title"
                                id="ember83441" class="bookshelf-journal ember-view">
                                <div id="ember83442" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1214-6463.png"
                                            alt="Cover of Obrana a Strategie / Defence &amp; Strategy"
                                            title="Obrana a Strategie / Defence &amp; Strategy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Obrana a Strategie / Defence &amp; Strategy"
                                    class="bookshelf-journal-title">Obrana a Strategie / Defence &amp; Strategy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83444" class="ember-view"><a href="/libraries/603/journals/10659?sort=title"
                                id="ember83445" class="bookshelf-journal ember-view">
                                <div id="ember83446" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0030-0934.png"
                                            alt="Cover of Ohio History" title="Ohio History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ohio History" class="bookshelf-journal-title">Ohio History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83448" class="ember-view"><a href="/libraries/603/journals/435858?sort=title"
                                id="ember83449" class="bookshelf-journal ember-view">
                                <div id="ember83450" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2667-0755-ff269cab-8662-45ca-913f-5b2d0901a5f7.png"
                                            alt="Cover of Old World : Journal of Ancient Africa and Eurasia"
                                            title="Old World : Journal of Ancient Africa and Eurasia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Old World : Journal of Ancient Africa and Eurasia"
                                    class="bookshelf-journal-title">Old World : Journal of Ancient Africa and Eurasia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83452" class="ember-view"><a href="/libraries/603/journals/76327?sort=title"
                                id="ember83453" class="bookshelf-journal ember-view">
                                <div id="ember83454" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0030-2953.png"
                                            alt="Cover of Ontario History" title="Ontario History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ontario History" class="bookshelf-journal-title">Ontario History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83456" class="ember-view"><a href="/libraries/603/journals/10331?sort=title"
                                id="ember83457" class="bookshelf-journal ember-view">
                                <div id="ember83458" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0094-0798.png"
                                            alt="Cover of Oral History Review" title="Oral History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Oral History Review" class="bookshelf-journal-title">Oral History Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83460" class="ember-view"><a href="/libraries/603/journals/33389?sort=title"
                                id="ember83461" class="bookshelf-journal ember-view">
                                <div id="ember83462" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0030-4727.png"
                                            alt="Cover of Oregon Historical Quarterly"
                                            title="Oregon Historical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Oregon Historical Quarterly" class="bookshelf-journal-title">Oregon
                                    Historical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83464" class="ember-view"><a href="/libraries/603/journals/33304?sort=title"
                                id="ember83465" class="bookshelf-journal ember-view">
                                <div id="ember83466" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0369-7827.png"
                                            alt="Cover of Osiris" title="Osiris">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Osiris" class="bookshelf-journal-title">Osiris</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83468" class="ember-view"><a href="/libraries/603/journals/33260?sort=title"
                                id="ember83469" class="bookshelf-journal ember-view">
                                <div id="ember83470" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0030-8684.png"
                                            alt="Cover of Pacific Historical Review" title="Pacific Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pacific Historical Review" class="bookshelf-journal-title">Pacific
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83472" class="ember-view"><a href="/libraries/603/journals/238377?sort=title"
                                id="ember83473" class="bookshelf-journal ember-view">
                                <div id="ember83474" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1851-992X.png"
                                            alt="Cover of Páginas : Revista Digital de la Escuela de Historia"
                                            title="Páginas : Revista Digital de la Escuela de Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Páginas : Revista Digital de la Escuela de Historia"
                                    class="bookshelf-journal-title">Páginas : Revista Digital de la Escuela de Historia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83476" class="ember-view"><a href="/libraries/603/journals/216088?sort=title"
                                id="ember83477" class="bookshelf-journal ember-view">
                                <div id="ember83478" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2412-611X-97e4489c-128a-4c8b-9068-7618f9718c9c.png"
                                            alt="Cover of Pakistan Journal of Historical Studies"
                                            title="Pakistan Journal of Historical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pakistan Journal of Historical Studies" class="bookshelf-journal-title">
                                    Pakistan Journal of Historical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83480" class="ember-view"><a href="/libraries/603/journals/36356?sort=title"
                                id="ember83481" class="bookshelf-journal ember-view">
                                <div id="ember83482" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0031-0328.png"
                                            alt="Cover of Palestine Exploration Quarterly"
                                            title="Palestine Exploration Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Palestine Exploration Quarterly" class="bookshelf-journal-title">Palestine
                                    Exploration Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83484" class="ember-view"><a href="/libraries/603/journals/77052?sort=title"
                                id="ember83485" class="bookshelf-journal ember-view">
                                <div id="ember83486" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0006-128X.png"
                                            alt="Cover of The Papers of the Bibliographical Society of America"
                                            title="The Papers of the Bibliographical Society of America">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Papers of the Bibliographical Society of America"
                                    class="bookshelf-journal-title">The Papers of the Bibliographical Society of America
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83488" class="ember-view"><a href="/libraries/603/journals/36163?sort=title"
                                id="ember83489" class="bookshelf-journal ember-view">
                                <div id="ember83490" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1768-6520.png"
                                            alt="Cover of Parlement[s] : Revue d'Histoire Politique"
                                            title="Parlement[s] : Revue d'Histoire Politique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Parlement[s] : Revue d'Histoire Politique" class="bookshelf-journal-title">
                                    Parlement[s] : Revue d'Histoire Politique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83492" class="ember-view"><a href="/libraries/603/journals/6949?sort=title"
                                id="ember83493" class="bookshelf-journal ember-view">
                                <div id="ember83494" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0264-2824.png"
                                            alt="Cover of Parliamentary History" title="Parliamentary History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Parliamentary History" class="bookshelf-journal-title">Parliamentary History
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83496" class="ember-view"><a href="/libraries/603/journals/15614?sort=title"
                                id="ember83497" class="bookshelf-journal ember-view">
                                <div id="ember83498" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0260-6755.png"
                                            alt="Cover of Parliaments, Estates and Representation"
                                            title="Parliaments, Estates and Representation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Parliaments, Estates and Representation" class="bookshelf-journal-title">
                                    Parliaments, Estates and Representation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83500" class="ember-view"><a href="/libraries/603/journals/10889?sort=title"
                                id="ember83501" class="bookshelf-journal ember-view">
                                <div id="ember83502" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1936-9247.png"
                                            alt="Cover of Partial Answers: Journal of Literature and the History of Ideas"
                                            title="Partial Answers: Journal of Literature and the History of Ideas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Partial Answers: Journal of Literature and the History of Ideas"
                                    class="bookshelf-journal-title">Partial Answers: Journal of Literature and the
                                    History of Ideas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83504" class="ember-view"><a href="/libraries/603/journals/111746?sort=title"
                                id="ember83505" class="bookshelf-journal ember-view">
                                <div id="ember83506" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1579-3311.png"
                                            alt="Cover of Pasado y Memoria" title="Pasado y Memoria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pasado y Memoria" class="bookshelf-journal-title">Pasado y Memoria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83508" class="ember-view"><a href="/libraries/603/journals/77183?sort=title"
                                id="ember83509" class="bookshelf-journal ember-view">
                                <div id="ember83510" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1695-7121.png"
                                            alt="Cover of Pasos : Revista de Turismo y Patrimonio Cultural / Pasos : Journal of Tourism and Cultural Heritage"
                                            title="Pasos : Revista de Turismo y Patrimonio Cultural / Pasos : Journal of Tourism and Cultural Heritage">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pasos : Revista de Turismo y Patrimonio Cultural / Pasos : Journal of Tourism and Cultural Heritage"
                                    class="bookshelf-journal-title">Pasos : Revista de Turismo y Patrimonio Cultural /
                                    Pasos : Journal of Tourism and Cultural Heritage</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83512" class="ember-view"><a href="/libraries/603/journals/10346?sort=title"
                                id="ember83513" class="bookshelf-journal ember-view">
                                <div id="ember83514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0031-2746.png"
                                            alt="Cover of Past &amp; Present" title="Past &amp; Present">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Past &amp; Present" class="bookshelf-journal-title">Past &amp; Present</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83516" class="ember-view"><a href="/libraries/603/journals/40246?sort=title"
                                id="ember83517" class="bookshelf-journal ember-view">
                                <div id="ember83518" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1761-4961.png"
                                            alt="Cover of Pecia" title="Pecia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pecia" class="bookshelf-journal-title">Pecia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83520" class="ember-view"><a href="/libraries/603/journals/33329?sort=title"
                                id="ember83521" class="bookshelf-journal ember-view">
                                <div id="ember83522" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0031-4528.png"
                                            alt="Cover of Pennsylvania History: A Journal of Mid-Atlantic Studies"
                                            title="Pennsylvania History: A Journal of Mid-Atlantic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pennsylvania History: A Journal of Mid-Atlantic Studies"
                                    class="bookshelf-journal-title">Pennsylvania History: A Journal of Mid-Atlantic
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83524" class="ember-view"><a href="/libraries/603/journals/33381?sort=title"
                                id="ember83525" class="bookshelf-journal ember-view">
                                <div id="ember83526" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1544-6360-67ae6836-6d48-416f-8f3b-c7d05ca30374.png"
                                            alt="Cover of Pennsylvania Legacies" title="Pennsylvania Legacies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pennsylvania Legacies" class="bookshelf-journal-title">Pennsylvania Legacies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83528" class="ember-view"><a href="/libraries/603/journals/40247?sort=title"
                                id="ember83529" class="bookshelf-journal ember-view">
                                <div id="ember83530" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0332-1592.png"
                                            alt="Cover of Peritia" title="Peritia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Peritia" class="bookshelf-journal-title">Peritia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83532" class="ember-view"><a href="/libraries/603/journals/10693?sort=title"
                                id="ember83533" class="bookshelf-journal ember-view">
                                <div id="ember83534" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2244-1093.png"
                                            alt="Cover of Philippine Studies : Historical and Ethnographic Viewpoints"
                                            title="Philippine Studies : Historical and Ethnographic Viewpoints">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philippine Studies : Historical and Ethnographic Viewpoints"
                                    class="bookshelf-journal-title">Philippine Studies : Historical and Ethnographic
                                    Viewpoints</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83536" class="ember-view"><a href="/libraries/603/journals/77862?sort=title"
                                id="ember83537" class="bookshelf-journal ember-view">
                                <div id="ember83538" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2196-7008.png"
                                            alt="Cover of Philologus" title="Philologus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philologus" class="bookshelf-journal-title">Philologus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83540" class="ember-view"><a href="/libraries/603/journals/33295?sort=title"
                                id="ember83541" class="bookshelf-journal ember-view">
                                <div id="ember83542" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0031-8248-29b58211-0d8c-479a-ab14-99e0de5f5fb1.png"
                                            alt="Cover of Philosophy of Science" title="Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy of Science" class="bookshelf-journal-title">Philosophy of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83544" class="ember-view"><a href="/libraries/603/journals/126961?sort=title"
                                id="ember83545" class="bookshelf-journal ember-view">
                                <div id="ember83546" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2527-225X-d7d635c2-9f1b-4919-b634-1a72c6110557.png"
                                            alt="Cover of Phoînix" title="Phoînix">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Phoînix" class="bookshelf-journal-title">Phoînix</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83548" class="ember-view"><a href="/libraries/603/journals/284464?sort=title"
                                id="ember83549" class="bookshelf-journal ember-view">
                                <div id="ember83550" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2345-1262.png"
                                            alt="Cover of Plural: History, Culture, Society"
                                            title="Plural: History, Culture, Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Plural: History, Culture, Society" class="bookshelf-journal-title">Plural:
                                    History, Culture, Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83552" class="ember-view"><a href="/libraries/603/journals/33472?sort=title"
                                id="ember83553" class="bookshelf-journal ember-view">
                                <div id="ember83554" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0032-2806.png"
                                            alt="Cover of Polish American Studies" title="Polish American Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Polish American Studies" class="bookshelf-journal-title">Polish American
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83556" class="ember-view"><a href="/libraries/603/journals/33474?sort=title"
                                id="ember83557" class="bookshelf-journal ember-view">
                                <div id="ember83558" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0032-2970.png"
                                            alt="Cover of The Polish Review" title="The Polish Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Polish Review" class="bookshelf-journal-title">The Polish Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83560" class="ember-view"><a href="/libraries/603/journals/36491?sort=title"
                                id="ember83561" class="bookshelf-journal ember-view">
                                <div id="ember83562" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0079-4236.png"
                                            alt="Cover of Post-Medieval Archaeology" title="Post-Medieval Archaeology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Post-Medieval Archaeology" class="bookshelf-journal-title">Post-Medieval
                                    Archaeology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83564" class="ember-view"><a href="/libraries/603/journals/91121?sort=title"
                                id="ember83565" class="bookshelf-journal ember-view">
                                <div id="ember83566" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0083-4351-aa995bf7-2a24-47ba-a45e-5c1c02b1d0e5.png"
                                            alt="Cover of Prace Historyczne" title="Prace Historyczne">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Prace Historyczne" class="bookshelf-journal-title">Prace Historyczne</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83568" class="ember-view"><a href="/libraries/603/journals/32565?sort=title"
                                id="ember83569" class="bookshelf-journal ember-view">
                                <div id="ember83570" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1613-0804.png"
                                            alt="Cover of Praehistorische Zeitschrift"
                                            title="Praehistorische Zeitschrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Praehistorische Zeitschrift" class="bookshelf-journal-title">Praehistorische
                                    Zeitschrift</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83572" class="ember-view"><a href="/libraries/603/journals/78625?sort=title"
                                id="ember83573" class="bookshelf-journal ember-view">
                                <div id="ember83574" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2081-8130.png"
                                            alt="Cover of Praktyka Teoretyczna : Theoretical Practice"
                                            title="Praktyka Teoretyczna : Theoretical Practice">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Praktyka Teoretyczna : Theoretical Practice"
                                    class="bookshelf-journal-title">Praktyka Teoretyczna : Theoretical Practice</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83576" class="ember-view"><a href="/libraries/603/journals/11296?sort=title"
                                id="ember83577" class="bookshelf-journal ember-view">
                                <div id="ember83578" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0360-4918.png"
                                            alt="Cover of Presidential Studies Quarterly"
                                            title="Presidential Studies Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Presidential Studies Quarterly" class="bookshelf-journal-title">Presidential
                                    Studies Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83580" class="ember-view"><a href="/libraries/603/journals/223548?sort=title"
                                id="ember83581" class="bookshelf-journal ember-view">
                                <div id="ember83582" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1852-0499-f8cd0585-6845-4df3-a7d7-e2c95246b4c2.png"
                                            alt="Cover of Prismas" title="Prismas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Prismas" class="bookshelf-journal-title">Prismas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83584" class="ember-view"><a href="/libraries/603/journals/16811?sort=title"
                                id="ember83585" class="bookshelf-journal ember-view">
                                <div id="ember83586" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0810-9028.png"
                                            alt="Cover of Prometheus" title="Prometheus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Prometheus" class="bookshelf-journal-title">Prometheus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83588" class="ember-view"><a href="/libraries/603/journals/188079?sort=title"
                                id="ember83589" class="bookshelf-journal ember-view">
                                <div id="ember83590" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1644-857X-e2dac1de-da17-456e-afbf-806fa289c288.png"
                                            alt="Cover of Przegląd Nauk Historycznych / Review of Historical Sciences"
                                            title="Przegląd Nauk Historycznych / Review of Historical Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Przegląd Nauk Historycznych / Review of Historical Sciences"
                                    class="bookshelf-journal-title">Przegląd Nauk Historycznych / Review of Historical
                                    Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83592" class="ember-view"><a href="/libraries/603/journals/38816?sort=title"
                                id="ember83593" class="bookshelf-journal ember-view">
                                <div id="ember83594" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1460-8235.png"
                                            alt="Cover of Psychoanalysis and History"
                                            title="Psychoanalysis and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Psychoanalysis and History" class="bookshelf-journal-title">Psychoanalysis
                                    and History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83596" class="ember-view"><a href="/libraries/603/journals/33265?sort=title"
                                id="ember83597" class="bookshelf-journal ember-view">
                                <div id="ember83598" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0272-3433.png"
                                            alt="Cover of The Public Historian" title="The Public Historian">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Public Historian" class="bookshelf-journal-title">The Public Historian
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83600" class="ember-view"><a href="/libraries/603/journals/79742?sort=title"
                                id="ember83601" class="bookshelf-journal ember-view">
                                <div id="ember83602" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1833-4989.png"
                                            alt="Cover of Public History Review" title="Public History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Public History Review" class="bookshelf-journal-title">Public History Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83604" class="ember-view"><a href="/libraries/603/journals/9925?sort=title"
                                id="ember83605" class="bookshelf-journal ember-view">
                                <div id="ember83606" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0014-9527.png"
                                            alt="Cover of Quaerendo" title="Quaerendo">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quaerendo" class="bookshelf-journal-title">Quaerendo</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83608" class="ember-view"><a href="/libraries/603/journals/10913?sort=title"
                                id="ember83609" class="bookshelf-journal ember-view">
                                <div id="ember83610" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0033-5053.png"
                                            alt="Cover of Quaker History" title="Quaker History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quaker History" class="bookshelf-journal-title">Quaker History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83612" class="ember-view"><a href="/libraries/603/journals/80213?sort=title"
                                id="ember83613" class="bookshelf-journal ember-view">
                                <div id="ember83614" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0329-2665.png"
                                            alt="Cover of Quinto Sol" title="Quinto Sol">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quinto Sol" class="bookshelf-journal-title">Quinto Sol</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83616" class="ember-view"><a href="/libraries/603/journals/18279?sort=title"
                                id="ember83617" class="bookshelf-journal ember-view">
                                <div id="ember83618" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0163-6545.png"
                                            alt="Cover of Radical History Review" title="Radical History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Radical History Review" class="bookshelf-journal-title">Radical History
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83620" class="ember-view"><a href="/libraries/603/journals/80617?sort=title"
                                id="ember83621" class="bookshelf-journal ember-view">
                                <div id="ember83622" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1955-2416.png"
                                            alt="Cover of Recherches sur Diderot et sur l’Encyclopédie"
                                            title="Recherches sur Diderot et sur l’Encyclopédie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Recherches sur Diderot et sur l’Encyclopédie"
                                    class="bookshelf-journal-title">Recherches sur Diderot et sur l’Encyclopédie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83624" class="ember-view"><a href="/libraries/603/journals/36406?sort=title"
                                id="ember83625" class="bookshelf-journal ember-view">
                                <div id="ember83626" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1357-4175.png"
                                            alt="Cover of Reformation" title="Reformation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Reformation" class="bookshelf-journal-title">Reformation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83628" class="ember-view"><a href="/libraries/603/journals/36361?sort=title"
                                id="ember83629" class="bookshelf-journal ember-view">
                                <div id="ember83630" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1462-2459.png"
                                            alt="Cover of Reformation and Renaissance Review"
                                            title="Reformation and Renaissance Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Reformation and Renaissance Review" class="bookshelf-journal-title">
                                    Reformation and Renaissance Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83632" class="ember-view"><a href="/libraries/603/journals/83109?sort=title"
                                id="ember83633" class="bookshelf-journal ember-view">
                                <div id="ember83634" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1969-654X.png"
                                            alt="Cover of Réforme, Humanisme, Renaissance"
                                            title="Réforme, Humanisme, Renaissance">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Réforme, Humanisme, Renaissance" class="bookshelf-journal-title">Réforme,
                                    Humanisme, Renaissance</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83636" class="ember-view"><a href="/libraries/603/journals/10677?sort=title"
                                id="ember83637" class="bookshelf-journal ember-view">
                                <div id="ember83638" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0023-0243.png"
                                            alt="Cover of Register of the Kentucky Historical Society"
                                            title="Register of the Kentucky Historical Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Register of the Kentucky Historical Society"
                                    class="bookshelf-journal-title">Register of the Kentucky Historical Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83640" class="ember-view"><a href="/libraries/603/journals/80906?sort=title"
                                id="ember83641" class="bookshelf-journal ember-view">
                                <div id="ember83642" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0034-429X.png"
                                            alt="Cover of Renaissance and Reformation / Renaissance et Réforme"
                                            title="Renaissance and Reformation / Renaissance et Réforme">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Renaissance and Reformation / Renaissance et Réforme"
                                    class="bookshelf-journal-title">Renaissance and Reformation / Renaissance et Réforme
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83644" class="ember-view"><a href="/libraries/603/journals/33321?sort=title"
                                id="ember83645" class="bookshelf-journal ember-view">
                                <div id="ember83646" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0034-4338.png"
                                            alt="Cover of Renaissance Quarterly" title="Renaissance Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Renaissance Quarterly" class="bookshelf-journal-title">Renaissance Quarterly
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83649" class="ember-view"><a href="/libraries/603/journals/6748?sort=title"
                                id="ember83650" class="bookshelf-journal ember-view">
                                <div id="ember83651" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0269-1213.png"
                                            alt="Cover of Renaissance Studies" title="Renaissance Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Renaissance Studies" class="bookshelf-journal-title">Renaissance Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83653" class="ember-view"><a href="/libraries/603/journals/10914?sort=title"
                                id="ember83654" class="bookshelf-journal ember-view">
                                <div id="ember83655" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1941-952X.png"
                                            alt="Cover of Restoration: Studies in English Literary Culture, 1660-1700"
                                            title="Restoration: Studies in English Literary Culture, 1660-1700">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Restoration: Studies in English Literary Culture, 1660-1700"
                                    class="bookshelf-journal-title">Restoration: Studies in English Literary Culture,
                                    1660-1700</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83657" class="ember-view"><a href="/libraries/603/journals/16992?sort=title"
                                id="ember83658" class="bookshelf-journal ember-view">
                                <div id="ember83659" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1364-2529.png"
                                            alt="Cover of Rethinking History" title="Rethinking History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rethinking History" class="bookshelf-journal-title">Rethinking History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83661" class="ember-view"><a href="/libraries/603/journals/10808?sort=title"
                                id="ember83662" class="bookshelf-journal ember-view">
                                <div id="ember83663" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0048-7511.png"
                                            alt="Cover of Reviews in American History"
                                            title="Reviews in American History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Reviews in American History" class="bookshelf-journal-title">Reviews in
                                    American History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83665" class="ember-view"><a href="/libraries/603/journals/81496?sort=title"
                                id="ember83666" class="bookshelf-journal ember-view">
                                <div id="ember83667" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0102-0188.png"
                                            alt="Cover of Revista Brasileira de História"
                                            title="Revista Brasileira de História">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Brasileira de História" class="bookshelf-journal-title">Revista
                                    Brasileira de História</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83669" class="ember-view"><a href="/libraries/603/journals/81500?sort=title"
                                id="ember83670" class="bookshelf-journal ember-view">
                                <div id="ember83671" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2175-3423.png"
                                            alt="Cover of Revista Brasileira de História &amp; Ciências Sociais / Brazilian Journal of History &amp; Social Sciences"
                                            title="Revista Brasileira de História &amp; Ciências Sociais / Brazilian Journal of History &amp; Social Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Brasileira de História &amp; Ciências Sociais / Brazilian Journal of History &amp; Social Sciences"
                                    class="bookshelf-journal-title">Revista Brasileira de História &amp; Ciências
                                    Sociais / Brazilian Journal of History &amp; Social Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83673" class="ember-view"><a href="/libraries/603/journals/81495?sort=title"
                                id="ember83674" class="bookshelf-journal ember-view">
                                <div id="ember83675" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1519-5902-f882172d-c3ba-484b-a67c-45f9fc1d62be.png"
                                            alt="Cover of Revista Brasileira de História da Educação"
                                            title="Revista Brasileira de História da Educação">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Brasileira de História da Educação" class="bookshelf-journal-title">
                                    Revista Brasileira de História da Educação</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83677" class="ember-view"><a href="/libraries/603/journals/391363?sort=title"
                                id="ember83678" class="bookshelf-journal ember-view">
                                <div id="ember83679" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0719-689X-fdcb94d3-7e58-4717-b3cd-8413b7f58323.png"
                                            alt="Cover of Revista Chilena de Estudios Medievales"
                                            title="Revista Chilena de Estudios Medievales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Chilena de Estudios Medievales" class="bookshelf-journal-title">
                                    Revista Chilena de Estudios Medievales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83681" class="ember-view"><a href="/libraries/603/journals/197294?sort=title"
                                id="ember83682" class="bookshelf-journal ember-view">
                                <div id="ember83683" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2469-0783.png"
                                            alt="Cover of Revista Científica Arbitrada de la Fundación MenteClara"
                                            title="Revista Científica Arbitrada de la Fundación MenteClara">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Científica Arbitrada de la Fundación MenteClara"
                                    class="bookshelf-journal-title">Revista Científica Arbitrada de la Fundación
                                    MenteClara</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83685" class="ember-view"><a href="/libraries/603/journals/388756?sort=title"
                                id="ember83686" class="bookshelf-journal ember-view">
                                <div id="ember83687" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2500-7645-642c175a-e1f8-4dd1-a3aa-97d885f7fd75.png"
                                            alt="Cover of Revista Científica General José María Córdova"
                                            title="Revista Científica General José María Córdova">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Científica General José María Córdova"
                                    class="bookshelf-journal-title">Revista Científica General José María Córdova</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83689" class="ember-view"><a href="/libraries/603/journals/81630?sort=title"
                                id="ember83690" class="bookshelf-journal ember-view">
                                <div id="ember83691" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1132-8312-9b51759b-31b9-49d3-b5ad-26d3987c6aa4.png"
                                            alt="Cover of Revista Complutense de Historia de América"
                                            title="Revista Complutense de Historia de América">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Complutense de Historia de América" class="bookshelf-journal-title">
                                    Revista Complutense de Historia de América</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83693" class="ember-view"><a href="/libraries/603/journals/81701?sort=title"
                                id="ember83694" class="bookshelf-journal ember-view">
                                <div id="ember83695" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0871-164X.png"
                                            alt="Cover of Revista da Faculdade de Letras História"
                                            title="Revista da Faculdade de Letras História">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista da Faculdade de Letras História" class="bookshelf-journal-title">
                                    Revista da Faculdade de Letras História</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83697" class="ember-view"><a href="/libraries/603/journals/81866?sort=title"
                                id="ember83698" class="bookshelf-journal ember-view">
                                <div id="ember83699" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2316-9141-61feb575-1cb9-4381-9315-8e3b44950fe3.png"
                                            alt="Cover of Revista de História" title="Revista de História">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de História" class="bookshelf-journal-title">Revista de História
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83701" class="ember-view"><a href="/libraries/603/journals/486533?sort=title"
                                id="ember83702" class="bookshelf-journal ember-view">
                                <div id="ember83703" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2215-4744-f0470ae5-bdfc-4567-afb6-91f1951e2c8a.png"
                                            alt="Cover of Revista de Historia" title="Revista de Historia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Historia" class="bookshelf-journal-title">Revista de Historia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83705" class="ember-view"><a href="/libraries/603/journals/81867?sort=title"
                                id="ember83706" class="bookshelf-journal ember-view">
                                <div id="ember83707" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2314-1549-6ab85720-8175-4729-987a-849a25eeb7de.png"
                                            alt="Cover of Revista de Historia Americana y Argentina"
                                            title="Revista de Historia Americana y Argentina">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Historia Americana y Argentina" class="bookshelf-journal-title">
                                    Revista de Historia Americana y Argentina</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83709" class="ember-view"><a href="/libraries/603/journals/431705?sort=title"
                                id="ember83710" class="bookshelf-journal ember-view">
                                <div id="ember83711" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2663-371X-e263ebea-6a87-4256-8b0d-25f2b3acfe49.png"
                                            alt="Cover of Revista de Historia de América"
                                            title="Revista de Historia de América">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Historia de América" class="bookshelf-journal-title">Revista de
                                    Historia de América</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83713" class="ember-view"><a href="/libraries/603/journals/20690?sort=title"
                                id="ember83714" class="bookshelf-journal ember-view">
                                <div id="ember83715" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0212-6109.png"
                                            alt="Cover of Revista de Historia Económica / Journal of Iberian and Latin American Economic History"
                                            title="Revista de Historia Económica / Journal of Iberian and Latin American Economic History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Historia Económica / Journal of Iberian and Latin American Economic History"
                                    class="bookshelf-journal-title">Revista de Historia Económica / Journal of Iberian
                                    and Latin American Economic History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83717" class="ember-view"><a href="/libraries/603/journals/37460?sort=title"
                                id="ember83718" class="bookshelf-journal ember-view">
                                <div id="ember83719" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0034-8341.png"
                                            alt="Cover of Revista de Indias" title="Revista de Indias">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Indias" class="bookshelf-journal-title">Revista de Indias</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83721" class="ember-view"><a href="/libraries/603/journals/309285?sort=title"
                                id="ember83722" class="bookshelf-journal ember-view">
                                <div id="ember83723" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2519-1470-b6a67a34-33a0-4b6b-8738-ad5bb5f3f7e5.png"
                                            alt="Cover of Revista del Instituto Riva-Agüero"
                                            title="Revista del Instituto Riva-Agüero">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista del Instituto Riva-Agüero" class="bookshelf-journal-title">Revista
                                    del Instituto Riva-Agüero</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83725" class="ember-view"><a href="/libraries/603/journals/57494?sort=title"
                                id="ember83726" class="bookshelf-journal ember-view">
                                <div id="ember83727" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0104-026X.png"
                                            alt="Cover of Revista Estudos Feministas"
                                            title="Revista Estudos Feministas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Estudos Feministas" class="bookshelf-journal-title">Revista Estudos
                                    Feministas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83729" class="ember-view"><a href="/libraries/603/journals/176093?sort=title"
                                id="ember83730" class="bookshelf-journal ember-view">
                                <div id="ember83731" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1676-2584-9158f037-0b3f-4085-b766-4f8102151fb9.png"
                                            alt="Cover of Revista HISTEDBR On-Line" title="Revista HISTEDBR On-Line">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista HISTEDBR On-Line" class="bookshelf-journal-title">Revista HISTEDBR
                                    On-Line</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83733" class="ember-view"><a href="/libraries/603/journals/82175?sort=title"
                                id="ember83734" class="bookshelf-journal ember-view">
                                <div id="ember83735" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0122-7238.png"
                                            alt="Cover of Revista Historia de la Educación Latinoamericana"
                                            title="Revista Historia de la Educación Latinoamericana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Historia de la Educación Latinoamericana"
                                    class="bookshelf-journal-title">Revista Historia de la Educación Latinoamericana
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83737" class="ember-view"><a href="/libraries/603/journals/61710?sort=title"
                                id="ember83738" class="bookshelf-journal ember-view">
                                <div id="ember83739" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0101-9074-d0fce229-a211-4a04-97c9-15506efd9dd3.png"
                                            alt="Cover of Revista História Sao Paulo"
                                            title="Revista História Sao Paulo">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista História Sao Paulo" class="bookshelf-journal-title">Revista História
                                    Sao Paulo</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83741" class="ember-view"><a href="/libraries/603/journals/300913?sort=title"
                                id="ember83742" class="bookshelf-journal ember-view">
                                <div id="ember83743" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2422-2704.png"
                                            alt="Cover of Revista Tiempo &amp; Economía"
                                            title="Revista Tiempo &amp; Economía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Tiempo &amp; Economía" class="bookshelf-journal-title">Revista
                                    Tiempo &amp; Economía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83745" class="ember-view"><a href="/libraries/603/journals/82461?sort=title"
                                id="ember83746" class="bookshelf-journal ember-view">
                                <div id="ember83747" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1517-3275.png"
                                            alt="Cover of Revista UniVap" title="Revista UniVap">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista UniVap" class="bookshelf-journal-title">Revista UniVap</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83749" class="ember-view"><a href="/libraries/603/journals/16690?sort=title"
                                id="ember83750" class="bookshelf-journal ember-view">
                                <div id="ember83751" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0954-6545.png"
                                            alt="Cover of Revolutionary Russia" title="Revolutionary Russia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revolutionary Russia" class="bookshelf-journal-title">Revolutionary Russia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83753" class="ember-view"><a href="/libraries/603/journals/82658?sort=title"
                                id="ember83754" class="bookshelf-journal ember-view">
                                <div id="ember83755" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2105-2573.png"
                                            alt="Cover of Revue de l'Histoire des Religions"
                                            title="Revue de l'Histoire des Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue de l'Histoire des Religions" class="bookshelf-journal-title">Revue de
                                    l'Histoire des Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83757" class="ember-view"><a href="/libraries/603/journals/270046?sort=title"
                                id="ember83758" class="bookshelf-journal ember-view">
                                <div id="ember83759" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-1652.png"
                                            alt="Cover of Revue de Philologie, de Littérature et d'Histoire Anciennes"
                                            title="Revue de Philologie, de Littérature et d'Histoire Anciennes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue de Philologie, de Littérature et d'Histoire Anciennes"
                                    class="bookshelf-journal-title">Revue de Philologie, de Littérature et d'Histoire
                                    Anciennes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83761" class="ember-view"><a href="/libraries/603/journals/5615?sort=title"
                                id="ember83762" class="bookshelf-journal ember-view">
                                <div id="ember83763" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-1776.png"
                                            alt="Cover of Revue de Synthèse" title="Revue de Synthèse">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue de Synthèse" class="bookshelf-journal-title">Revue de Synthèse</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83765" class="ember-view"><a href="/libraries/603/journals/40252?sort=title"
                                id="ember83766" class="bookshelf-journal ember-view">
                                <div id="ember83767" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1768-9260.png"
                                            alt="Cover of Revue d'Etudes Augustiniennes et Patristiques"
                                            title="Revue d'Etudes Augustiniennes et Patristiques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'Etudes Augustiniennes et Patristiques"
                                    class="bookshelf-journal-title">Revue d'Etudes Augustiniennes et Patristiques</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83769" class="ember-view"><a href="/libraries/603/journals/315156?sort=title"
                                id="ember83770" class="bookshelf-journal ember-view">
                                <div id="ember83771" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2553-6141.png"
                                            alt="Cover of Revue d’Histoire de la Shoah"
                                            title="Revue d’Histoire de la Shoah">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d’Histoire de la Shoah" class="bookshelf-journal-title">Revue
                                    d’Histoire de la Shoah</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83773" class="ember-view"><a href="/libraries/603/journals/307538?sort=title"
                                id="ember83774" class="bookshelf-journal ember-view">
                                <div id="ember83775" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-2357.png"
                                            alt="Cover of Revue d’Histoire de l’Amérique Française"
                                            title="Revue d’Histoire de l’Amérique Française">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d’Histoire de l’Amérique Française" class="bookshelf-journal-title">
                                    Revue d’Histoire de l’Amérique Française</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83777" class="ember-view"><a href="/libraries/603/journals/40253?sort=title"
                                id="ember83778" class="bookshelf-journal ember-view">
                                <div id="ember83779" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0048-7988.png"
                                            alt="Cover of Revue d'Histoire de l'Eglise de France"
                                            title="Revue d'Histoire de l'Eglise de France">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'Histoire de l'Eglise de France" class="bookshelf-journal-title">
                                    Revue d'Histoire de l'Eglise de France</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83781" class="ember-view"><a href="/libraries/603/journals/36035?sort=title"
                                id="ember83782" class="bookshelf-journal ember-view">
                                <div id="ember83783" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0151-4105.png"
                                            alt="Cover of Revue d'histoire des sciences"
                                            title="Revue d'histoire des sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'histoire des sciences" class="bookshelf-journal-title">Revue
                                    d'histoire des sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83785" class="ember-view"><a href="/libraries/603/journals/36135?sort=title"
                                id="ember83786" class="bookshelf-journal ember-view">
                                <div id="ember83787" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1963-1022.png"
                                            alt="Cover of Revue d'Histoire des Sciences Humaines"
                                            title="Revue d'Histoire des Sciences Humaines">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'Histoire des Sciences Humaines" class="bookshelf-journal-title">
                                    Revue d'Histoire des Sciences Humaines</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83789" class="ember-view"><a href="/libraries/603/journals/82805?sort=title"
                                id="ember83790" class="bookshelf-journal ember-view">
                                <div id="ember83791" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1777-5329.png"
                                            alt="Cover of Revue d’Histoire du XIXe Siècle"
                                            title="Revue d’Histoire du XIXe Siècle">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d’Histoire du XIXe Siècle" class="bookshelf-journal-title">Revue
                                    d’Histoire du XIXe Siècle</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83793" class="ember-view"><a href="/libraries/603/journals/40254?sort=title"
                                id="ember83794" class="bookshelf-journal ember-view">
                                <div id="ember83795" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-2381.png"
                                            alt="Cover of Revue d'Histoire Ecclésiastique"
                                            title="Revue d'Histoire Ecclésiastique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'Histoire Ecclésiastique" class="bookshelf-journal-title">Revue
                                    d'Histoire Ecclésiastique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83797" class="ember-view"><a href="/libraries/603/journals/36138?sort=title"
                                id="ember83798" class="bookshelf-journal ember-view">
                                <div id="ember83799" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1776-3045.png"
                                            alt="Cover of Revue d’histoire moderne et contemporaine"
                                            title="Revue d’histoire moderne et contemporaine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d’histoire moderne et contemporaine" class="bookshelf-journal-title">
                                    Revue d’histoire moderne et contemporaine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83801" class="ember-view"><a href="/libraries/603/journals/36210?sort=title"
                                id="ember83802" class="bookshelf-journal ember-view">
                                <div id="ember83803" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2119-3851.png"
                                            alt="Cover of Revue Française d'Histoire des Idées Politiques"
                                            title="Revue Française d'Histoire des Idées Politiques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue Française d'Histoire des Idées Politiques"
                                    class="bookshelf-journal-title">Revue Française d'Histoire des Idées Politiques
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83805" class="ember-view"><a href="/libraries/603/journals/36108?sort=title"
                                id="ember83806" class="bookshelf-journal ember-view">
                                <div id="ember83807" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2104-3825.png"
                                            alt="Cover of Revue historique" title="Revue historique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue historique" class="bookshelf-journal-title">Revue historique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83809" class="ember-view"><a href="/libraries/603/journals/40255?sort=title"
                                id="ember83810" class="bookshelf-journal ember-view">
                                <div id="ember83811" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0035-3620.png"
                                            alt="Cover of Revue Mabillon" title="Revue Mabillon">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue Mabillon" class="bookshelf-journal-title">Revue Mabillon</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83813" class="ember-view"><a href="/libraries/603/journals/83009?sort=title"
                                id="ember83814" class="bookshelf-journal ember-view">
                                <div id="ember83815" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1918-9354.png"
                                            alt="Cover of Revue Multidisciplinaire sur l'Emploi, le Syndicalisme et le Travail"
                                            title="Revue Multidisciplinaire sur l'Emploi, le Syndicalisme et le Travail">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue Multidisciplinaire sur l'Emploi, le Syndicalisme et le Travail"
                                    class="bookshelf-journal-title">Revue Multidisciplinaire sur l'Emploi, le
                                    Syndicalisme et le Travail</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83817" class="ember-view"><a href="/libraries/603/journals/33263?sort=title"
                                id="ember83818" class="bookshelf-journal ember-view">
                                <div id="ember83819" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0734-8584.png"
                                            alt="Cover of Rhetorica" title="Rhetorica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rhetorica" class="bookshelf-journal-title">Rhetorica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83821" class="ember-view"><a href="/libraries/603/journals/38801?sort=title"
                                id="ember83822" class="bookshelf-journal ember-view">
                                <div id="ember83823" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1354-991x.png"
                                            alt="Cover of Romanticism" title="Romanticism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Romanticism" class="bookshelf-journal-title">Romanticism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83825" class="ember-view"><a href="/libraries/603/journals/272353?sort=title"
                                id="ember83826" class="bookshelf-journal ember-view">
                                <div id="ember83827" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2245-599X.png"
                                            alt="Cover of Romantik : Journal for the Study of Romanticisms"
                                            title="Romantik : Journal for the Study of Romanticisms">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Romantik : Journal for the Study of Romanticisms"
                                    class="bookshelf-journal-title">Romantik : Journal for the Study of Romanticisms
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83829" class="ember-view"><a href="/libraries/603/journals/121202?sort=title"
                                id="ember83830" class="bookshelf-journal ember-view">
                                <div id="ember83831" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2057-6730-92957896-72e2-4406-a459-a17b0c223d27.png"
                                            alt="Cover of Royal Studies Journal" title="Royal Studies Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Royal Studies Journal" class="bookshelf-journal-title">Royal Studies Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83833" class="ember-view"><a href="/libraries/603/journals/83437?sort=title"
                                id="ember83834" class="bookshelf-journal ember-view">
                                <div id="ember83835" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2014-5748-1cbff102-3e4b-47fa-b9e8-2c17dcfb9326.png"
                                            alt="Cover of Rúbrica Contemporánea" title="Rúbrica Contemporánea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rúbrica Contemporánea" class="bookshelf-journal-title">Rúbrica Contemporánea
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83837" class="ember-view"><a href="/libraries/603/journals/19065?sort=title"
                                id="ember83838" class="bookshelf-journal ember-view">
                                <div id="ember83839" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0956-7933.png"
                                            alt="Cover of Rural History" title="Rural History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rural History" class="bookshelf-journal-title">Rural History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83841" class="ember-view"><a href="/libraries/603/journals/83473?sort=title"
                                id="ember83842" class="bookshelf-journal ember-view">
                                <div id="ember83843" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2002-0104.png"
                                            alt="Cover of Rural Landscapes : Society Environment History"
                                            title="Rural Landscapes : Society Environment History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rural Landscapes : Society Environment History"
                                    class="bookshelf-journal-title">Rural Landscapes : Society Environment History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83845" class="ember-view"><a href="/libraries/603/journals/365544?sort=title"
                                id="ember83846" class="bookshelf-journal ember-view">
                                <div id="ember83847" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1348-6497.png"
                                            alt="Cover of Russian and East European Studies"
                                            title="Russian and East European Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Russian and East European Studies" class="bookshelf-journal-title">Russian
                                    and East European Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83849" class="ember-view"><a href="/libraries/603/journals/9777?sort=title"
                                id="ember83850" class="bookshelf-journal ember-view">
                                <div id="ember83851" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0094-288X.png"
                                            alt="Cover of Russian History" title="Russian History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Russian History" class="bookshelf-journal-title">Russian History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83853" class="ember-view"><a href="/libraries/603/journals/104759?sort=title"
                                id="ember83854" class="bookshelf-journal ember-view">
                                <div id="ember83855" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2451-8921-cd99f3d5-3fa8-4b55-a7e5-309b21d31ce3.png"
                                            alt="Cover of Russian Politics" title="Russian Politics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Russian Politics" class="bookshelf-journal-title">Russian Politics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83857" class="ember-view"><a href="/libraries/603/journals/83516?sort=title"
                                id="ember83858" class="bookshelf-journal ember-view">
                                <div id="ember83859" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1061-1983.png"
                                            alt="Cover of Russian Studies in History"
                                            title="Russian Studies in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Russian Studies in History" class="bookshelf-journal-title">Russian Studies
                                    in History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83861" class="ember-view"><a href="/libraries/603/journals/17656?sort=title"
                                id="ember83862" class="bookshelf-journal ember-view">
                                <div id="ember83863" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0358-5522.png"
                                            alt="Cover of Scandinavian Economic History Review"
                                            title="Scandinavian Economic History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scandinavian Economic History Review" class="bookshelf-journal-title">
                                    Scandinavian Economic History Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83865" class="ember-view"><a href="/libraries/603/journals/16993?sort=title"
                                id="ember83866" class="bookshelf-journal ember-view">
                                <div id="ember83867" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0346-8755.png"
                                            alt="Cover of Scandinavian Journal of History"
                                            title="Scandinavian Journal of History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scandinavian Journal of History" class="bookshelf-journal-title">
                                    Scandinavian Journal of History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83869" class="ember-view"><a href="/libraries/603/journals/84021?sort=title"
                                id="ember83870" class="bookshelf-journal ember-view">
                                <div id="ember83871" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2243-4690.png"
                                            alt="Cover of Science &amp; Technology Studies"
                                            title="Science &amp; Technology Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Science &amp; Technology Studies" class="bookshelf-journal-title">Science
                                    &amp; Technology Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83873" class="ember-view"><a href="/libraries/603/journals/19083?sort=title"
                                id="ember83874" class="bookshelf-journal ember-view">
                                <div id="ember83875" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0269-8897.png"
                                            alt="Cover of Science in Context" title="Science in Context">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Science in Context" class="bookshelf-journal-title">Science in Context</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83877" class="ember-view"><a href="/libraries/603/journals/272463?sort=title"
                                id="ember83878" class="bookshelf-journal ember-view">
                                <div id="ember83879" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2313-6286.png"
                                            alt="Cover of ScienceRise" title="ScienceRise">
                                        <!---->
                                    </div>
                                </div>
                                <div title="ScienceRise" class="bookshelf-journal-title">ScienceRise</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83881" class="ember-view"><a href="/libraries/603/journals/84084?sort=title"
                                id="ember83882" class="bookshelf-journal ember-view">
                                <div id="ember83883" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1775-3783.png"
                                            alt="Cover of Sciences Eaux &amp; Territoires"
                                            title="Sciences Eaux &amp; Territoires">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sciences Eaux &amp; Territoires" class="bookshelf-journal-title">Sciences
                                    Eaux &amp; Territoires</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83885" class="ember-view"><a href="/libraries/603/journals/111128?sort=title"
                                id="ember83886" class="bookshelf-journal ember-view">
                                <div id="ember83887" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1022-8136.png"
                                            alt="Cover of Scientia Militaria : South African Journal of Military Studies"
                                            title="Scientia Militaria : South African Journal of Military Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scientia Militaria : South African Journal of Military Studies"
                                    class="bookshelf-journal-title">Scientia Militaria : South African Journal of
                                    Military Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83890" class="ember-view"><a href="/libraries/603/journals/129385?sort=title"
                                id="ember83891" class="bookshelf-journal ember-view">
                                <div id="ember83892" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1868-9418.png"
                                            alt="Cover of Scientia Poetica" title="Scientia Poetica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scientia Poetica" class="bookshelf-journal-title">Scientia Poetica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83894" class="ember-view"><a href="/libraries/603/journals/38800?sort=title"
                                id="ember83895" class="bookshelf-journal ember-view">
                                <div id="ember83896" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0036-9241.png"
                                            alt="Cover of The Scottish Historical Review"
                                            title="The Scottish Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Scottish Historical Review" class="bookshelf-journal-title">The Scottish
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83898" class="ember-view"><a href="/libraries/603/journals/84197?sort=title"
                                id="ember83899" class="bookshelf-journal ember-view">
                                <div id="ember83900" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2340-4841.png"
                                            alt="Cover of Scripta : Revista Internacional de Literatura i Cultura Medieval i Moderna"
                                            title="Scripta : Revista Internacional de Literatura i Cultura Medieval i Moderna">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scripta : Revista Internacional de Literatura i Cultura Medieval i Moderna"
                                    class="bookshelf-journal-title">Scripta : Revista Internacional de Literatura i
                                    Cultura Medieval i Moderna</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83902" class="ember-view"><a href="/libraries/603/journals/84283?sort=title"
                                id="ember83903" class="bookshelf-journal ember-view">
                                <div id="ember83904" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0186-0348-f366c059-85e4-44b3-9502-6a770d6d28b7.png"
                                            alt="Cover of Secuencia : Revista de Historia y Ciencias Sociales"
                                            title="Secuencia : Revista de Historia y Ciencias Sociales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Secuencia : Revista de Historia y Ciencias Sociales"
                                    class="bookshelf-journal-title">Secuencia : Revista de Historia y Ciencias Sociales
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83906" class="ember-view"><a href="/libraries/603/journals/379979?sort=title"
                                id="ember83907" class="bookshelf-journal ember-view">
                                <div id="ember83908" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1979-9993-74d4a75c-75bf-4c36-9b84-a5b2ac4f9464.png"
                                            alt="Cover of Sejarah dan Budaya : Jurnal Sejarah, Budaya, dan Pengajarannya"
                                            title="Sejarah dan Budaya : Jurnal Sejarah, Budaya, dan Pengajarannya">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sejarah dan Budaya : Jurnal Sejarah, Budaya, dan Pengajarannya"
                                    class="bookshelf-journal-title">Sejarah dan Budaya : Jurnal Sejarah, Budaya, dan
                                    Pengajarannya</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83910" class="ember-view"><a href="/libraries/603/journals/40258?sort=title"
                                id="ember83911" class="bookshelf-journal ember-view">
                                <div id="ember83912" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2031-5937.png"
                                            alt="Cover of Semitica et Classica" title="Semitica et Classica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Semitica et Classica" class="bookshelf-journal-title">Semitica et Classica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83914" class="ember-view"><a href="/libraries/603/journals/433351?sort=title"
                                id="ember83915" class="bookshelf-journal ember-view">
                                <div id="ember83916" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2496-9087.png"
                                            alt="Cover of Sensibilités : Histoire, Critique &amp; Sciences Sociales"
                                            title="Sensibilités : Histoire, Critique &amp; Sciences Sociales">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sensibilités : Histoire, Critique &amp; Sciences Sociales"
                                    class="bookshelf-journal-title">Sensibilités : Histoire, Critique &amp; Sciences
                                    Sociales</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83918" class="ember-view"><a href="/libraries/603/journals/84557?sort=title"
                                id="ember83919" class="bookshelf-journal ember-view">
                                <div id="ember83920" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0268-117X.png"
                                            alt="Cover of Seventeenth Century" title="Seventeenth Century">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Seventeenth Century" class="bookshelf-journal-title">Seventeenth Century
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83922" class="ember-view"><a href="/libraries/603/journals/36405?sort=title"
                                id="ember83923" class="bookshelf-journal ember-view">
                                <div id="ember83924" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0265-1068.png"
                                            alt="Cover of Seventeenth-Century French Studies"
                                            title="Seventeenth-Century French Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Seventeenth-Century French Studies" class="bookshelf-journal-title">
                                    Seventeenth-Century French Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83926" class="ember-view"><a href="/libraries/603/journals/39693?sort=title"
                                id="ember83927" class="bookshelf-journal ember-view">
                                <div id="ember83928" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2169-0820-7ddbbf97-1b73-4be6-b21c-400abec1e5d5.png"
                                            alt="Cover of Shashi : the Journal of Japanese Business and Company History"
                                            title="Shashi : the Journal of Japanese Business and Company History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Shashi : the Journal of Japanese Business and Company History"
                                    class="bookshelf-journal-title">Shashi : the Journal of Japanese Business and
                                    Company History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83930" class="ember-view"><a href="/libraries/603/journals/17833?sort=title"
                                id="ember83931" class="bookshelf-journal ember-view">
                                <div id="ember83932" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1754-1328.png"
                                            alt="Cover of The Sixties" title="The Sixties">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Sixties" class="bookshelf-journal-title">The Sixties</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83934" class="ember-view"><a href="/libraries/603/journals/16667?sort=title"
                                id="ember83935" class="bookshelf-journal ember-view">
                                <div id="ember83936" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0144-039X.png"
                                            alt="Cover of Slavery &amp; Abolition" title="Slavery &amp; Abolition">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Slavery &amp; Abolition" class="bookshelf-journal-title">Slavery &amp;
                                    Abolition</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83938" class="ember-view"><a href="/libraries/603/journals/33402?sort=title"
                                id="ember83939" class="bookshelf-journal ember-view">
                                <div id="ember83940" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0037-6795.png"
                                            alt="Cover of The Slavonic and East European Review"
                                            title="The Slavonic and East European Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Slavonic and East European Review" class="bookshelf-journal-title">The
                                    Slavonic and East European Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83942" class="ember-view"><a href="/libraries/603/journals/17051?sort=title"
                                id="ember83943" class="bookshelf-journal ember-view">
                                <div id="ember83944" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0307-1022.png"
                                            alt="Cover of Social History" title="Social History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social History" class="bookshelf-journal-title">Social History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83946" class="ember-view"><a href="/libraries/603/journals/10395?sort=title"
                                id="ember83947" class="bookshelf-journal ember-view">
                                <div id="ember83948" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0951-631X.png"
                                            alt="Cover of Social History of Medicine"
                                            title="Social History of Medicine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social History of Medicine" class="bookshelf-journal-title">Social History
                                    of Medicine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83950" class="ember-view"><a href="/libraries/603/journals/18281?sort=title"
                                id="ember83951" class="bookshelf-journal ember-view">
                                <div id="ember83952" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0145-5532.png"
                                            alt="Cover of Social Science History" title="Social Science History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Science History" class="bookshelf-journal-title">Social Science
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83954" class="ember-view"><a href="/libraries/603/journals/17898?sort=title"
                                id="ember83955" class="bookshelf-journal ember-view">
                                <div id="ember83956" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1726-1686-cac87859-f29d-46bc-902d-bf3c31519ec5.png"
                                            alt="Cover of South African Historical Journal"
                                            title="South African Historical Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South African Historical Journal" class="bookshelf-journal-title">South
                                    African Historical Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83958" class="ember-view"><a href="/libraries/603/journals/15601?sort=title"
                                id="ember83959" class="bookshelf-journal ember-view">
                                <div id="ember83960" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1947-2498.png"
                                            alt="Cover of South Asian History and Culture"
                                            title="South Asian History and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South Asian History and Culture" class="bookshelf-journal-title">South Asian
                                    History and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83962" class="ember-view"><a href="/libraries/603/journals/366678?sort=title"
                                id="ember83963" class="bookshelf-journal ember-view">
                                <div id="ember83964" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/25739476.png"
                                            alt="Cover of South Asian Review" title="South Asian Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South Asian Review" class="bookshelf-journal-title">South Asian Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83966" class="ember-view"><a href="/libraries/603/journals/40596?sort=title"
                                id="ember83967" class="bookshelf-journal ember-view">
                                <div id="ember83968" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0967-828X.png"
                                            alt="Cover of South East Asia Research" title="South East Asia Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South East Asia Research" class="bookshelf-journal-title">South East Asia
                                    Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83970" class="ember-view"><a href="/libraries/603/journals/33435?sort=title"
                                id="ember83971" class="bookshelf-journal ember-view">
                                <div id="ember83972" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0038-3929.png"
                                            alt="Cover of Southern California Quarterly"
                                            title="Southern California Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Southern California Quarterly" class="bookshelf-journal-title">Southern
                                    California Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83974" class="ember-view"><a href="/libraries/603/journals/10865?sort=title"
                                id="ember83975" class="bookshelf-journal ember-view">
                                <div id="ember83976" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0038-478X.png"
                                            alt="Cover of Southwestern Historical Quarterly"
                                            title="Southwestern Historical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Southwestern Historical Quarterly" class="bookshelf-journal-title">
                                    Southwestern Historical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83978" class="ember-view"><a href="/libraries/603/journals/19433?sort=title"
                                id="ember83979" class="bookshelf-journal ember-view">
                                <div id="ember83980" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0038-7134.png"
                                            alt="Cover of Speculum" title="Speculum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Speculum" class="bookshelf-journal-title">Speculum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83982" class="ember-view"><a href="/libraries/603/journals/17353?sort=title"
                                id="ember83983" class="bookshelf-journal ember-view">
                                <div id="ember83984" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1746-0263.png"
                                            alt="Cover of Sport in History" title="Sport in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sport in History" class="bookshelf-journal-title">Sport in History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83986" class="ember-view"><a href="/libraries/603/journals/196777?sort=title"
                                id="ember83987" class="bookshelf-journal ember-view">
                                <div id="ember83988" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1826-7505-5168b98a-fac3-4a92-b4a5-162596545f90.png"
                                            alt="Cover of Storia delle Donne" title="Storia delle Donne">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Storia delle Donne" class="bookshelf-journal-title">Storia delle Donne</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83990" class="ember-view"><a href="/libraries/603/journals/120142?sort=title"
                                id="ember83991" class="bookshelf-journal ember-view">
                                <div id="ember83992" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1795-097X-9036339b-2897-42c4-bb26-e06962cd2f17.png"
                                            alt="Cover of Studia Celtica Fennica" title="Studia Celtica Fennica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Celtica Fennica" class="bookshelf-journal-title">Studia Celtica
                                    Fennica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83994" class="ember-view"><a href="/libraries/603/journals/86259?sort=title"
                                id="ember83995" class="bookshelf-journal ember-view">
                                <div id="ember83996" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2084-140X-ffd0a527-9d47-4d09-bd88-fde17a37d98a.png"
                                            alt="Cover of Studia Ceranea : Journal of the Waldemar Ceran Research Centre for the History and Culture of the Mediterranean Area and South-East Europe"
                                            title="Studia Ceranea : Journal of the Waldemar Ceran Research Centre for the History and Culture of the Mediterranean Area and South-East Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Ceranea : Journal of the Waldemar Ceran Research Centre for the History and Culture of the Mediterranean Area and South-East Europe"
                                    class="bookshelf-journal-title">Studia Ceranea : Journal of the Waldemar Ceran
                                    Research Centre for the History and Culture of the Mediterranean Area and South-East
                                    Europe</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember83998" class="ember-view"><a href="/libraries/603/journals/125391?sort=title"
                                id="ember83999" class="bookshelf-journal ember-view">
                                <div id="ember84000" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0081-6477.png"
                                            alt="Cover of Studia Hibernica" title="Studia Hibernica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Hibernica" class="bookshelf-journal-title">Studia Hibernica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84002" class="ember-view"><a href="/libraries/603/journals/152017?sort=title"
                                id="ember84003" class="bookshelf-journal ember-view">
                                <div id="ember84004" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1017-0499-ec9d13d6-7f6f-48ca-bf54-21d4e401c602.png"
                                            alt="Cover of Studia Historiae Ecclesiasticae"
                                            title="Studia Historiae Ecclesiasticae">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Historiae Ecclesiasticae" class="bookshelf-journal-title">Studia
                                    Historiae Ecclesiasticae</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84006" class="ember-view"><a href="/libraries/603/journals/270600?sort=title"
                                id="ember84007" class="bookshelf-journal ember-view">
                                <div id="ember84008" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2451-3202.png"
                                            alt="Cover of Studia Historiae Scientiarum"
                                            title="Studia Historiae Scientiarum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Historiae Scientiarum" class="bookshelf-journal-title">Studia
                                    Historiae Scientiarum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84010" class="ember-view"><a href="/libraries/603/journals/86278?sort=title"
                                id="ember84011" class="bookshelf-journal ember-view">
                                <div id="ember84012" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0213-2079.png"
                                            alt="Cover of Studia Historica : Historia Moderna"
                                            title="Studia Historica : Historia Moderna">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Historica : Historia Moderna" class="bookshelf-journal-title">Studia
                                    Historica : Historia Moderna</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84014" class="ember-view"><a href="/libraries/603/journals/86287?sort=title"
                                id="ember84015" class="bookshelf-journal ember-view">
                                <div id="ember84016" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0039-3185.png"
                                            alt="Cover of Studia Leibnitiana" title="Studia Leibnitiana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Leibnitiana" class="bookshelf-journal-title">Studia Leibnitiana</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84018" class="ember-view"><a href="/libraries/603/journals/10828?sort=title"
                                id="ember84019" class="bookshelf-journal ember-view">
                                <div id="ember84020" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0081-7600.png"
                                            alt="Cover of Studies in Bibliography" title="Studies in Bibliography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Bibliography" class="bookshelf-journal-title">Studies in
                                    Bibliography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84022" class="ember-view"><a href="/libraries/603/journals/10897?sort=title"
                                id="ember84023" class="bookshelf-journal ember-view">
                                <div id="ember84024" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0360-2370.png"
                                            alt="Cover of Studies in Eighteenth Century Culture"
                                            title="Studies in Eighteenth Century Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Eighteenth Century Culture" class="bookshelf-journal-title">
                                    Studies in Eighteenth Century Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84026" class="ember-view"><a href="/libraries/603/journals/4171?sort=title"
                                id="ember84027" class="bookshelf-journal ember-view">
                                <div id="ember84028" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0257-6430.png"
                                            alt="Cover of Studies in History" title="Studies in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in History" class="bookshelf-journal-title">Studies in History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84030" class="ember-view"><a href="/libraries/603/journals/5079?sort=title"
                                id="ember84031" class="bookshelf-journal ember-view">
                                <div id="ember84032" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0039-3681.png"
                                            alt="Cover of Studies in History and Philosophy of Science Part A"
                                            title="Studies in History and Philosophy of Science Part A">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in History and Philosophy of Science Part A"
                                    class="bookshelf-journal-title">Studies in History and Philosophy of Science Part A
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84034" class="ember-view"><a href="/libraries/603/journals/5099?sort=title"
                                id="ember84035" class="bookshelf-journal ember-view">
                                <div id="ember84036" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1355-2198.png"
                                            alt="Cover of Studies in History and Philosophy of Science Part B: Studies in History and Philosophy of Modern Physics"
                                            title="Studies in History and Philosophy of Science Part B: Studies in History and Philosophy of Modern Physics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in History and Philosophy of Science Part B: Studies in History and Philosophy of Modern Physics"
                                    class="bookshelf-journal-title">Studies in History and Philosophy of Science Part B:
                                    Studies in History and Philosophy of Modern Physics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84038" class="ember-view"><a href="/libraries/603/journals/7468?sort=title"
                                id="ember84039" class="bookshelf-journal ember-view">
                                <div id="ember84040" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1369-8486.png"
                                            alt="Cover of Studies in History and Philosophy of Science Part C: Studies in History and Philosophy of Biological and Biomedical Sciences"
                                            title="Studies in History and Philosophy of Science Part C: Studies in History and Philosophy of Biological and Biomedical Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in History and Philosophy of Science Part C: Studies in History and Philosophy of Biological and Biomedical Sciences"
                                    class="bookshelf-journal-title">Studies in History and Philosophy of Science Part C:
                                    Studies in History and Philosophy of Biological and Biomedical Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84042" class="ember-view"><a href="/libraries/603/journals/431497?sort=title"
                                id="ember84043" class="bookshelf-journal ember-view">
                                <div id="ember84044" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2189-8480.png"
                                            alt="Cover of Studies in Inner Asian History and Culture"
                                            title="Studies in Inner Asian History and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Inner Asian History and Culture" class="bookshelf-journal-title">
                                    Studies in Inner Asian History and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84046" class="ember-view"><a href="/libraries/603/journals/86411?sort=title"
                                id="ember84047" class="bookshelf-journal ember-view">
                                <div id="ember84048" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2348-4489.png"
                                            alt="Cover of Studies in People's History"
                                            title="Studies in People's History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in People's History" class="bookshelf-journal-title">Studies in
                                    People's History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84050" class="ember-view"><a href="/libraries/603/journals/86429?sort=title"
                                id="ember84051" class="bookshelf-journal ember-view">
                                <div id="ember84052" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/default-journal-cover.png"
                                            alt="Cover of Studies in the Maternal" title="Studies in the Maternal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in the Maternal" class="bookshelf-journal-title">Studies in the
                                    Maternal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84054" class="ember-view"><a href="/libraries/603/journals/86482?sort=title"
                                id="ember84055" class="bookshelf-journal ember-view">
                                <div id="ember84056" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2197-2567.png"
                                            alt="Cover of Sub\urban : Zeitschrift für Kritische Stadtforschung"
                                            title="Sub\urban : Zeitschrift für Kritische Stadtforschung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sub\urban : Zeitschrift für Kritische Stadtforschung"
                                    class="bookshelf-journal-title">Sub\urban : Zeitschrift für Kritische Stadtforschung
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84058" class="ember-view"><a href="/libraries/603/journals/308843?sort=title"
                                id="ember84059" class="bookshelf-journal ember-view">
                                <div id="ember84060" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0039-4564.png"
                                            alt="Cover of Sudhoffs Archiv" title="Sudhoffs Archiv">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sudhoffs Archiv" class="bookshelf-journal-title">Sudhoffs Archiv</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84062" class="ember-view"><a href="/libraries/603/journals/33482?sort=title"
                                id="ember84063" class="bookshelf-journal ember-view">
                                <div id="ember84064" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1069-0697.png"
                                            alt="Cover of symplokē" title="symplokē">
                                        <!---->
                                    </div>
                                </div>
                                <div title="symplokē" class="bookshelf-journal-title">symplokē</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84066" class="ember-view"><a href="/libraries/603/journals/36423?sort=title"
                                id="ember84067" class="bookshelf-journal ember-view">
                                <div id="ember84068" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0737-5034.png"
                                            alt="Cover of T'ang Studies" title="T'ang Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="T'ang Studies" class="bookshelf-journal-title">T'ang Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84070" class="ember-view"><a href="/libraries/603/journals/87018?sort=title"
                                id="ember84071" class="bookshelf-journal ember-view">
                                <div id="ember84072" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2147-0626.png"
                                            alt="Cover of Tarih Kültür ve Sanat Araştırmaları Dergisi / Journal of History Culture and Art Research"
                                            title="Tarih Kültür ve Sanat Araştırmaları Dergisi / Journal of History Culture and Art Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tarih Kültür ve Sanat Araştırmaları Dergisi / Journal of History Culture and Art Research"
                                    class="bookshelf-journal-title">Tarih Kültür ve Sanat Araştırmaları Dergisi /
                                    Journal of History Culture and Art Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84074" class="ember-view"><a href="/libraries/603/journals/87081?sort=title"
                                id="ember84075" class="bookshelf-journal ember-view">
                                <div id="ember84076" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0730-1383-d41e8f82-667b-469f-903a-d015800f5dd3.png"
                                            alt="Cover of Teaching History" title="Teaching History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teaching History" class="bookshelf-journal-title">Teaching History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84078" class="ember-view"><a href="/libraries/603/journals/87136?sort=title"
                                id="ember84079" class="bookshelf-journal ember-view">
                                <div id="ember84080" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1952-420X.png"
                                            alt="Cover of Techniques &amp; Culture" title="Techniques &amp; Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Techniques &amp; Culture" class="bookshelf-journal-title">Techniques &amp;
                                    Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84082" class="ember-view"><a href="/libraries/603/journals/10807?sort=title"
                                id="ember84083" class="bookshelf-journal ember-view">
                                <div id="ember84084" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0040-165X.png"
                                            alt="Cover of Technology and Culture" title="Technology and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Technology and Culture" class="bookshelf-journal-title">Technology and
                                    Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84086" class="ember-view"><a href="/libraries/603/journals/87213?sort=title"
                                id="ember84087" class="bookshelf-journal ember-view">
                                <div id="ember84088" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1106-661X.png"
                                            alt="Cover of Tekmēria" title="Tekmēria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tekmēria" class="bookshelf-journal-title">Tekmēria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84090" class="ember-view"><a href="/libraries/603/journals/87314?sort=title"
                                id="ember84091" class="bookshelf-journal ember-view">
                                <div id="ember84092" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1988-7868-dba4c6c7-0705-430e-8355-48729b5d2c6b.png"
                                            alt="Cover of Temas Americanistas" title="Temas Americanistas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Temas Americanistas" class="bookshelf-journal-title">Temas Americanistas
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84094" class="ember-view"><a href="/libraries/603/journals/87330?sort=title"
                                id="ember84095" class="bookshelf-journal ember-view">
                                <div id="ember84096" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1413-7704.png"
                                            alt="Cover of Tempo" title="Tempo">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tempo" class="bookshelf-journal-title">Tempo</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84098" class="ember-view"><a href="/libraries/603/journals/36442?sort=title"
                                id="ember84099" class="bookshelf-journal ember-view">
                                <div id="ember84100" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0082-2884.png"
                                            alt="Cover of Terrae Incognitae" title="Terrae Incognitae">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Terrae Incognitae" class="bookshelf-journal-title">Terrae Incognitae</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84102" class="ember-view"><a href="/libraries/603/journals/36348?sort=title"
                                id="ember84103" class="bookshelf-journal ember-view">
                                <div id="ember84104" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0040-4969.png"
                                            alt="Cover of Textile History" title="Textile History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Textile History" class="bookshelf-journal-title">Textile History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84106" class="ember-view"><a href="/libraries/603/journals/442016?sort=title"
                                id="ember84107" class="bookshelf-journal ember-view">
                                <div id="ember84108" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2075-2458-f72c90bb-6f16-406f-8ef4-91cb2f24a187.png"
                                            alt="Cover of The Thinker" title="The Thinker">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Thinker" class="bookshelf-journal-title">The Thinker</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84110" class="ember-view"><a href="/libraries/603/journals/307193?sort=title"
                                id="ember84111" class="bookshelf-journal ember-view">
                                <div id="ember84112" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0719-5699-523991f6-c91f-460c-ba8a-80407a9a599d.png"
                                            alt="Cover of Tiempo Histórico" title="Tiempo Histórico">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tiempo Histórico" class="bookshelf-journal-title">Tiempo Histórico</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84114" class="ember-view"><a href="/libraries/603/journals/40324?sort=title"
                                id="ember84115" class="bookshelf-journal ember-view">
                                <div id="ember84116" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0040-7518.png"
                                            alt="Cover of Tijdschrift voor Geschiedenis"
                                            title="Tijdschrift voor Geschiedenis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tijdschrift voor Geschiedenis" class="bookshelf-journal-title">Tijdschrift
                                    voor Geschiedenis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84118" class="ember-view"><a href="/libraries/603/journals/120175?sort=title"
                                id="ember84119" class="bookshelf-journal ember-view">
                                <div id="ember84120" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2213-7653-cf0ab3f9-e05a-4579-a8f3-7e83b6133fb0.png"
                                            alt="Cover of TMG : Journal for Media History"
                                            title="TMG : Journal for Media History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="TMG : Journal for Media History" class="bookshelf-journal-title">TMG :
                                    Journal for Media History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84122" class="ember-view"><a href="/libraries/603/journals/87827?sort=title"
                                id="ember84123" class="bookshelf-journal ember-view">
                                <div id="ember84124" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2237-101X-30374fbf-d63a-4e84-9a17-fb153cad6a0d.png"
                                            alt="Cover of Topoi : Revista de História"
                                            title="Topoi : Revista de História">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Topoi : Revista de História" class="bookshelf-journal-title">Topoi : Revista
                                    de História</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84126" class="ember-view"><a href="/libraries/603/journals/37461?sort=title"
                                id="ember84127" class="bookshelf-journal ember-view">
                                <div id="ember84128" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0082-5638.png"
                                            alt="Cover of Trabajos de Prehistoria" title="Trabajos de Prehistoria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Trabajos de Prehistoria" class="bookshelf-journal-title">Trabajos de
                                    Prehistoria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84131" class="ember-view"><a href="/libraries/603/journals/123864?sort=title"
                                id="ember84132" class="bookshelf-journal ember-view">
                                <div id="ember84133" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2346-8971-e0fef61c-720c-4f3b-96af-0f0a45a73ff0.png"
                                            alt="Cover of Trabajos y Comunicaciones" title="Trabajos y Comunicaciones">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Trabajos y Comunicaciones" class="bookshelf-journal-title">Trabajos y
                                    Comunicaciones</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84135" class="ember-view"><a href="/libraries/603/journals/32231?sort=title"
                                id="ember84136" class="bookshelf-journal ember-view">
                                <div id="ember84137" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0362-1529.png"
                                            alt="Cover of Traditio" title="Traditio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Traditio" class="bookshelf-journal-title">Traditio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84139" class="ember-view"><a href="/libraries/603/journals/87938?sort=title"
                                id="ember84140" class="bookshelf-journal ember-view">
                                <div id="ember84141" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2413-9009.png"
                                            alt="Cover of Traektoriâ Nauki / Path of Science"
                                            title="Traektoriâ Nauki / Path of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Traektoriâ Nauki / Path of Science" class="bookshelf-journal-title">
                                    Traektoriâ Nauki / Path of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84143" class="ember-view"><a href="/libraries/603/journals/87975?sort=title"
                                id="ember84144" class="bookshelf-journal ember-view">
                                <div id="ember84145" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2768-6876-9f3d3925-d868-4508-a0c1-7296356a415d.png"
                                            alt="Cover of Trans Asia Photography" title="Trans Asia Photography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Trans Asia Photography" class="bookshelf-journal-title">Trans Asia
                                    Photography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84147" class="ember-view"><a href="/libraries/603/journals/19183?sort=title"
                                id="ember84148" class="bookshelf-journal ember-view">
                                <div id="ember84149" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0080-4401.png"
                                            alt="Cover of Transactions of the Royal Historical Society"
                                            title="Transactions of the Royal Historical Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Transactions of the Royal Historical Society"
                                    class="bookshelf-journal-title">Transactions of the Royal Historical Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84151" class="ember-view"><a href="/libraries/603/journals/39896?sort=title"
                                id="ember84152" class="bookshelf-journal ember-view">
                                <div id="ember84153" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2045-4813.png"
                                            alt="Cover of Transfers" title="Transfers">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Transfers" class="bookshelf-journal-title">Transfers</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84155" class="ember-view"><a href="/libraries/603/journals/154074?sort=title"
                                id="ember84156" class="bookshelf-journal ember-view">
                                <div id="ember84157" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2452-2007.png"
                                            alt="Cover of Translocal Chinese: East Asian Perspectives"
                                            title="Translocal Chinese: East Asian Perspectives">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Translocal Chinese: East Asian Perspectives"
                                    class="bookshelf-journal-title">Translocal Chinese: East Asian Perspectives</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84159" class="ember-view"><a href="/libraries/603/journals/348167?sort=title"
                                id="ember84160" class="bookshelf-journal ember-view">
                                <div id="ember84161" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1578-5777-23e641c8-f2a6-46c0-9a20-75da9106d5da.png"
                                            alt="Cover of TST : Transportes, Servicios y Telecomunicaciones"
                                            title="TST : Transportes, Servicios y Telecomunicaciones">
                                        <!---->
                                    </div>
                                </div>
                                <div title="TST : Transportes, Servicios y Telecomunicaciones"
                                    class="bookshelf-journal-title">TST : Transportes, Servicios y Telecomunicaciones
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84163" class="ember-view"><a href="/libraries/603/journals/105449?sort=title"
                                id="ember84164" class="bookshelf-journal ember-view">
                                <div id="ember84165" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1306-8253.png"
                                            alt="Cover of Türk Kültürü ve Hacı Bektaş Velî Araştırma Dergisi  / Turkish Culture and Hacı Bektas Veli Research Quarterly"
                                            title="Türk Kültürü ve Hacı Bektaş Velî Araştırma Dergisi  / Turkish Culture and Hacı Bektas Veli Research Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Türk Kültürü ve Hacı Bektaş Velî Araştırma Dergisi  / Turkish Culture and Hacı Bektas Veli Research Quarterly"
                                    class="bookshelf-journal-title">Türk Kültürü ve Hacı Bektaş Velî Araştırma Dergisi /
                                    Turkish Culture and Hacı Bektas Veli Research Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84167" class="ember-view"><a href="/libraries/603/journals/9768?sort=title"
                                id="ember84168" class="bookshelf-journal ember-view">
                                <div id="ember84169" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1877-5454.png"
                                            alt="Cover of Turkish Historical Review" title="Turkish Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Turkish Historical Review" class="bookshelf-journal-title">Turkish
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84171" class="ember-view"><a href="/libraries/603/journals/88518?sort=title"
                                id="ember84172" class="bookshelf-journal ember-view">
                                <div id="ember84173" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2147-4516.png"
                                            alt="Cover of Turkish History Education Journal"
                                            title="Turkish History Education Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Turkish History Education Journal" class="bookshelf-journal-title">Turkish
                                    History Education Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84175" class="ember-view"><a href="/libraries/603/journals/10361?sort=title"
                                id="ember84176" class="bookshelf-journal ember-view">
                                <div id="ember84177" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0955-2359.png"
                                            alt="Cover of Twentieth Century British History"
                                            title="Twentieth Century British History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Twentieth Century British History" class="bookshelf-journal-title">Twentieth
                                    Century British History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84179" class="ember-view"><a href="/libraries/603/journals/88562?sort=title"
                                id="ember84180" class="bookshelf-journal ember-view">
                                <div id="ember84181" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1758-6437.png"
                                            alt="Cover of Twentieth Century Communism"
                                            title="Twentieth Century Communism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Twentieth Century Communism" class="bookshelf-journal-title">Twentieth
                                    Century Communism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84183" class="ember-view"><a href="/libraries/603/journals/36414?sort=title"
                                id="ember84184" class="bookshelf-journal ember-view">
                                <div id="ember84185" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1521-5385.png"
                                            alt="Cover of Twentieth-Century China" title="Twentieth-Century China">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Twentieth-Century China" class="bookshelf-journal-title">Twentieth-Century
                                    China</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84187" class="ember-view"><a href="/libraries/603/journals/316695?sort=title"
                                id="ember84188" class="bookshelf-journal ember-view">
                                <div id="ember84189" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0788-091X-be450999-4327-40b9-b912-c3cc50d359f0.png"
                                            alt="Cover of Työelämän Tutkimus" title="Työelämän Tutkimus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Työelämän Tutkimus" class="bookshelf-journal-title">Työelämän Tutkimus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84191" class="ember-view"><a href="/libraries/603/journals/127865?sort=title"
                                id="ember84192" class="bookshelf-journal ember-view">
                                <div id="ember84193" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1659-4266-0b0c28f3-1f0b-45d0-9be0-8b37a5f24aef.png"
                                            alt="Cover of UNED Research Journal / Cuadernos de Investigación UNED"
                                            title="UNED Research Journal / Cuadernos de Investigación UNED">
                                        <!---->
                                    </div>
                                </div>
                                <div title="UNED Research Journal / Cuadernos de Investigación UNED"
                                    class="bookshelf-journal-title">UNED Research Journal / Cuadernos de Investigación
                                    UNED</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84195" class="ember-view"><a href="/libraries/603/journals/19053?sort=title"
                                id="ember84196" class="bookshelf-journal ember-view">
                                <div id="ember84197" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0963-9268.png"
                                            alt="Cover of Urban History" title="Urban History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Urban History" class="bookshelf-journal-title">Urban History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84199" class="ember-view"><a href="/libraries/603/journals/88997?sort=title"
                                id="ember84200" class="bookshelf-journal ember-view">
                                <div id="ember84201" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0703-0428.png"
                                            alt="Cover of Urban History Review / Revue d'histoire urbaine"
                                            title="Urban History Review / Revue d'histoire urbaine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Urban History Review / Revue d'histoire urbaine"
                                    class="bookshelf-journal-title">Urban History Review / Revue d'histoire urbaine
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84203" class="ember-view"><a href="/libraries/603/journals/89002?sort=title"
                                id="ember84204" class="bookshelf-journal ember-view">
                                <div id="ember84205" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1341-8157.png"
                                            alt="Cover of Urban Housing Sciences" title="Urban Housing Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Urban Housing Sciences" class="bookshelf-journal-title">Urban Housing
                                    Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84207" class="ember-view"><a href="/libraries/603/journals/175306?sort=title"
                                id="ember84208" class="bookshelf-journal ember-view">
                                <div id="ember84209" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/24563714.png"
                                            alt="Cover of Urbanisation" title="Urbanisation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Urbanisation" class="bookshelf-journal-title">Urbanisation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84211" class="ember-view"><a href="/libraries/603/journals/89157?sort=title"
                                id="ember84212" class="bookshelf-journal ember-view">
                                <div id="ember84213" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0104-8775.png"
                                            alt="Cover of Varia História" title="Varia História">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Varia História" class="bookshelf-journal-title">Varia História</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84215" class="ember-view"><a href="/libraries/603/journals/477601?sort=title"
                                id="ember84216" class="bookshelf-journal ember-view">
                                <div id="ember84217" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2772-8633-d3ce5a23-aae3-4e08-b5e1-efe25c9fb206.webp"
                                            alt="Cover of Vatican Library Review" title="Vatican Library Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vatican Library Review" class="bookshelf-journal-title">Vatican Library
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84219" class="ember-view"><a href="/libraries/603/journals/296501?sort=title"
                                id="ember84220" class="bookshelf-journal ember-view">
                                <div id="ember84221" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1991-6434.png"
                                            alt="Cover of Vestnik Pravoslavnogo Svâto-Tihonovskogo Gumanitarnogo Universiteta : Seriâ II. Istoriâ, Istoriâ Russkoj Pravoslavnoj Cerkvi / St. Tikhon’s University Review. History. Series II. Russian Church History"
                                            title="Vestnik Pravoslavnogo Svâto-Tihonovskogo Gumanitarnogo Universiteta : Seriâ II. Istoriâ, Istoriâ Russkoj Pravoslavnoj Cerkvi / St. Tikhon’s University Review. History. Series II. Russian Church History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vestnik Pravoslavnogo Svâto-Tihonovskogo Gumanitarnogo Universiteta : Seriâ II. Istoriâ, Istoriâ Russkoj Pravoslavnoj Cerkvi / St. Tikhon’s University Review. History. Series II. Russian Church History"
                                    class="bookshelf-journal-title">Vestnik Pravoslavnogo Svâto-Tihonovskogo
                                    Gumanitarnogo Universiteta : Seriâ II. Istoriâ, Istoriâ Russkoj Pravoslavnoj Cerkvi
                                    / St. Tikhon’s University Review. History. Series II. Russian Church History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84223" class="ember-view"><a href="/libraries/603/journals/89287?sort=title"
                                id="ember84224" class="bookshelf-journal ember-view">
                                <div id="ember84225" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1991-640X.png"
                                            alt="Cover of Vestnik Pravoslavnogo Sviato-Tikhonovskogo Gumanitarnogo Universiteta. Seriia I : Bogoslovie. Filosofiia. Religiovedenie / St Tikhon’s University Review. Series I: Theology. Philosophy. Religious Studies"
                                            title="Vestnik Pravoslavnogo Sviato-Tikhonovskogo Gumanitarnogo Universiteta. Seriia I : Bogoslovie. Filosofiia. Religiovedenie / St Tikhon’s University Review. Series I: Theology. Philosophy. Religious Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vestnik Pravoslavnogo Sviato-Tikhonovskogo Gumanitarnogo Universiteta. Seriia I : Bogoslovie. Filosofiia. Religiovedenie / St Tikhon’s University Review. Series I: Theology. Philosophy. Religious Studies"
                                    class="bookshelf-journal-title">Vestnik Pravoslavnogo Sviato-Tikhonovskogo
                                    Gumanitarnogo Universiteta. Seriia I : Bogoslovie. Filosofiia. Religiovedenie / St
                                    Tikhon’s University Review. Series I: Theology. Philosophy. Religious Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84227" class="ember-view"><a href="/libraries/603/journals/40265?sort=title"
                                id="ember84228" class="bookshelf-journal ember-view">
                                <div id="ember84229" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0083-5897.png"
                                            alt="Cover of Viator" title="Viator">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Viator" class="bookshelf-journal-title">Viator</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84231" class="ember-view"><a href="/libraries/603/journals/19064?sort=title"
                                id="ember84232" class="bookshelf-journal ember-view">
                                <div id="ember84233" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1470-1553-edee4ce6-a879-4fe7-9779-9118becdb1cd.png"
                                            alt="Cover of Victorian Literature and Culture"
                                            title="Victorian Literature and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Victorian Literature and Culture" class="bookshelf-journal-title">Victorian
                                    Literature and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84235" class="ember-view"><a href="/libraries/603/journals/32232?sort=title"
                                id="ember84236" class="bookshelf-journal ember-view">
                                <div id="ember84237" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0848-1512.png"
                                            alt="Cover of Victorian Review" title="Victorian Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Victorian Review" class="bookshelf-journal-title">Victorian Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84239" class="ember-view"><a href="/libraries/603/journals/33334?sort=title"
                                id="ember84240" class="bookshelf-journal ember-view">
                                <div id="ember84241" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0042-5222.png"
                                            alt="Cover of Victorian Studies" title="Victorian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Victorian Studies" class="bookshelf-journal-title">Victorian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84243" class="ember-view"><a href="/libraries/603/journals/89406?sort=title"
                                id="ember84244" class="bookshelf-journal ember-view">
                                <div id="ember84245" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0340-8728.png"
                                            alt="Cover of Vierteljahrschrift für Sozial- und Wirtschaftsgeschichte"
                                            title="Vierteljahrschrift für Sozial- und Wirtschaftsgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vierteljahrschrift für Sozial- und Wirtschaftsgeschichte"
                                    class="bookshelf-journal-title">Vierteljahrschrift für Sozial- und
                                    Wirtschaftsgeschichte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84247" class="ember-view"><a href="/libraries/603/journals/40267?sort=title"
                                id="ember84248" class="bookshelf-journal ember-view">
                                <div id="ember84249" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1782-7183.png"
                                            alt="Cover of Viking and Medieval Scandinavia"
                                            title="Viking and Medieval Scandinavia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Viking and Medieval Scandinavia" class="bookshelf-journal-title">Viking and
                                    Medieval Scandinavia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84251" class="ember-view"><a href="/libraries/603/journals/36021?sort=title"
                                id="ember84252" class="bookshelf-journal ember-view">
                                <div id="ember84253" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0294-1759.png"
                                            alt="Cover of Vingtième Siècle. Revue d'histoire"
                                            title="Vingtième Siècle. Revue d'histoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vingtième Siècle. Revue d'histoire" class="bookshelf-journal-title">
                                    Vingtième Siècle. Revue d'histoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84255" class="ember-view"><a href="/libraries/603/journals/9895?sort=title"
                                id="ember84256" class="bookshelf-journal ember-view">
                                <div id="ember84257" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0042-7543.png"
                                            alt="Cover of Vivarium" title="Vivarium">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vivarium" class="bookshelf-journal-title">Vivarium</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84259" class="ember-view"><a href="/libraries/603/journals/37428?sort=title"
                                id="ember84260" class="bookshelf-journal ember-view">
                                <div id="ember84261" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2213-459X.png"
                                            alt="Cover of Vulcan" title="Vulcan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vulcan" class="bookshelf-journal-title">Vulcan</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84263" class="ember-view"><a href="/libraries/603/journals/36451?sort=title"
                                id="ember84264" class="bookshelf-journal ember-view">
                                <div id="ember84265" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0729-2473.png"
                                            alt="Cover of War and Society" title="War and Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="War and Society" class="bookshelf-journal-title">War and Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84267" class="ember-view"><a href="/libraries/603/journals/5573?sort=title"
                                id="ember84268" class="bookshelf-journal ember-view">
                                <div id="ember84269" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0968-3445.png"
                                            alt="Cover of War in History" title="War in History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="War in History" class="bookshelf-journal-title">War in History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84271" class="ember-view"><a href="/libraries/603/journals/195001?sort=title"
                                id="ember84272" class="bookshelf-journal ember-view">
                                <div id="ember84273" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0083-792X-533b22bf-26cd-43c3-9ff3-793d47ff667c.png"
                                            alt="Cover of Welsh History Review / Cylchgrawn Hanes Cymru"
                                            title="Welsh History Review / Cylchgrawn Hanes Cymru">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Welsh History Review / Cylchgrawn Hanes Cymru"
                                    class="bookshelf-journal-title">Welsh History Review / Cylchgrawn Hanes Cymru</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84275" class="ember-view"><a href="/libraries/603/journals/10907?sort=title"
                                id="ember84276" class="bookshelf-journal ember-view">
                                <div id="ember84277" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0043-325X.png"
                                            alt="Cover of West Virginia History: A Journal of Regional Studies"
                                            title="West Virginia History: A Journal of Regional Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="West Virginia History: A Journal of Regional Studies"
                                    class="bookshelf-journal-title">West Virginia History: A Journal of Regional Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84279" class="ember-view"><a href="/libraries/603/journals/35771?sort=title"
                                id="ember84280" class="bookshelf-journal ember-view">
                                <div id="ember84281" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0043-5597.png"
                                            alt="Cover of The William and Mary Quarterly"
                                            title="The William and Mary Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The William and Mary Quarterly" class="bookshelf-journal-title">The William
                                    and Mary Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84283" class="ember-view"><a href="/libraries/603/journals/17114?sort=title"
                                id="ember84284" class="bookshelf-journal ember-view">
                                <div id="ember84285" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0957-4042.png"
                                            alt="Cover of Women: A Cultural Review" title="Women: A Cultural Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Women: A Cultural Review" class="bookshelf-journal-title">Women: A Cultural
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84287" class="ember-view"><a href="/libraries/603/journals/17363?sort=title"
                                id="ember84288" class="bookshelf-journal ember-view">
                                <div id="ember84289" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0961-2025.png"
                                            alt="Cover of Women's History Review" title="Women's History Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Women's History Review" class="bookshelf-journal-title">Women's History
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84291" class="ember-view"><a href="/libraries/603/journals/469135?sort=title"
                                id="ember84292" class="bookshelf-journal ember-view">
                                <div id="ember84293" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2673-4060-59498aec-536a-4293-8253-a0bc451df44b.png"
                                            alt="Cover of World" title="World">
                                        <!---->
                                    </div>
                                </div>
                                <div title="World" class="bookshelf-journal-title">World</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84295" class="ember-view"><a href="/libraries/603/journals/261538?sort=title"
                                id="ember84296" class="bookshelf-journal ember-view">
                                <div id="ember84297" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2405-450X-058f8a37-b0bf-400a-ad21-b92562e0c8f4.webp"
                                            alt="Cover of Yearbook of Ancient Greek Epic Online"
                                            title="Yearbook of Ancient Greek Epic Online">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Yearbook of Ancient Greek Epic Online" class="bookshelf-journal-title">
                                    Yearbook of Ancient Greek Epic Online</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84299" class="ember-view"><a href="/libraries/603/journals/90885?sort=title"
                                id="ember84300" class="bookshelf-journal ember-view">
                                <div id="ember84301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2223-0386-e03559fb-a7cc-443e-a652-a481eb9d852f.png"
                                            alt="Cover of Yesterday and Today" title="Yesterday and Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Yesterday and Today" class="bookshelf-journal-title">Yesterday and Today
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84303" class="ember-view"><a href="/libraries/603/journals/321467?sort=title"
                                id="ember84304" class="bookshelf-journal ember-view">
                                <div id="ember84305" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2541-6960.png"
                                            alt="Cover of Yupa: Historical Studies Journal"
                                            title="Yupa: Historical Studies Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Yupa: Historical Studies Journal" class="bookshelf-journal-title">Yupa:
                                    Historical Studies Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84307" class="ember-view"><a href="/libraries/603/journals/131031?sort=title"
                                id="ember84308" class="bookshelf-journal ember-view">
                                <div id="ember84309" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0256-5250-9a474773-3cfd-4e87-a538-189a84a173a7.png"
                                            alt="Cover of Zeitgeschichte" title="Zeitgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitgeschichte" class="bookshelf-journal-title">Zeitgeschichte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84311" class="ember-view"><a href="/libraries/603/journals/90992?sort=title"
                                id="ember84312" class="bookshelf-journal ember-view">
                                <div id="ember84313" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2196-713X.png"
                                            alt="Cover of Zeitschrift für ägyptische sprache und altertumskunde"
                                            title="Zeitschrift für ägyptische sprache und altertumskunde">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für ägyptische sprache und altertumskunde"
                                    class="bookshelf-journal-title">Zeitschrift für ägyptische sprache und
                                    altertumskunde</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84315" class="ember-view"><a href="/libraries/603/journals/32572?sort=title"
                                id="ember84316" class="bookshelf-journal ember-view">
                                <div id="ember84317" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1613-1150.png"
                                            alt="Cover of Zeitschrift für Assyriologie und Vorderasiatische Archäologie"
                                            title="Zeitschrift für Assyriologie und Vorderasiatische Archäologie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Assyriologie und Vorderasiatische Archäologie"
                                    class="bookshelf-journal-title">Zeitschrift für Assyriologie und Vorderasiatische
                                    Archäologie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84319" class="ember-view"><a href="/libraries/603/journals/91018?sort=title"
                                id="ember84320" class="bookshelf-journal ember-view">
                                <div id="ember84321" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0340-0174.png"
                                            alt="Cover of Zeitschrift für Historische Forschung"
                                            title="Zeitschrift für Historische Forschung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Historische Forschung" class="bookshelf-journal-title">
                                    Zeitschrift für Historische Forschung</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84323" class="ember-view"><a href="/libraries/603/journals/9915?sort=title"
                                id="ember84324" class="bookshelf-journal ember-view">
                                <div id="ember84325" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0044-3441.png"
                                            alt="Cover of Zeitschrift für Religions- und Geistesgeschichte"
                                            title="Zeitschrift für Religions- und Geistesgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Religions- und Geistesgeschichte"
                                    class="bookshelf-journal-title">Zeitschrift für Religions- und Geistesgeschichte
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84327" class="ember-view"><a href="/libraries/603/journals/32738?sort=title"
                                id="ember84328" class="bookshelf-journal ember-view">
                                <div id="ember84329" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2194-508X.png"
                                            alt="Cover of Zeitschrift für Religionswissenschaft"
                                            title="Zeitschrift für Religionswissenschaft">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Religionswissenschaft" class="bookshelf-journal-title">
                                    Zeitschrift für Religionswissenschaft</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84331" class="ember-view"><a href="/libraries/603/journals/91064?sort=title"
                                id="ember84332" class="bookshelf-journal ember-view">
                                <div id="ember84333" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0342-2852.png"
                                            alt="Cover of Zeitschrift für Unternehmensgeschichte"
                                            title="Zeitschrift für Unternehmensgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Unternehmensgeschichte" class="bookshelf-journal-title">
                                    Zeitschrift für Unternehmensgeschichte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84335" class="ember-view"><a href="/libraries/603/journals/145921?sort=title"
                                id="ember84336" class="bookshelf-journal ember-view">
                                <div id="ember84337" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1506-6541-148503b8-3b4e-4e2c-b6b6-95dc2ea934e9.png"
                                            alt="Cover of Zeszyty Wiejskie" title="Zeszyty Wiejskie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeszyty Wiejskie" class="bookshelf-journal-title">Zeszyty Wiejskie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84339" class="ember-view"><a href="/libraries/603/journals/296900?sort=title"
                                id="ember84340" class="bookshelf-journal ember-view">
                                <div id="ember84341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2308-152X.png"
                                            alt="Cover of Zolotoordynskoe Obozrenie / Golden Horde Review"
                                            title="Zolotoordynskoe Obozrenie / Golden Horde Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zolotoordynskoe Obozrenie / Golden Horde Review"
                                    class="bookshelf-journal-title">Zolotoordynskoe Obozrenie / Golden Horde Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84343" class="ember-view"><a href="/libraries/603/journals/91189?sort=title"
                                id="ember84344" class="bookshelf-journal ember-view">
                                <div id="ember84345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2076-6297.png"
                                            alt="Cover of Žurnal Institucionalʹnyh Issledovanij (Journal of Institutional Studies)"
                                            title="Žurnal Institucionalʹnyh Issledovanij (Journal of Institutional Studies)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Žurnal Institucionalʹnyh Issledovanij (Journal of Institutional Studies)"
                                    class="bookshelf-journal-title">Žurnal Institucionalʹnyh Issledovanij (Journal of
                                    Institutional Studies)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84347" class="ember-view"><a href="/libraries/603/journals/89575?sort=title"
                                id="ember84348" class="bookshelf-journal ember-view">
                                <div id="ember84349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2333-1658.png"
                                            alt="Cover of ВИВЛIОθИКА : E-Journal of Eighteenth-Century Russian Studies"
                                            title="ВИВЛIОθИКА : E-Journal of Eighteenth-Century Russian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="ВИВЛIОθИКА : E-Journal of Eighteenth-Century Russian Studies"
                                    class="bookshelf-journal-title">ВИВЛIОθИКА : E-Journal of Eighteenth-Century Russian
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84351" class="ember-view"><a href="/libraries/603/journals/427354?sort=title"
                                id="ember84352" class="bookshelf-journal ember-view">
                                <div id="ember84353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2423-9461.png"
                                            alt="Cover of アジア・文化・歴史" title="アジア・文化・歴史">
                                        <!---->
                                    </div>
                                </div>
                                <div title="アジア・文化・歴史" class="bookshelf-journal-title">アジア・文化・歴史</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84355" class="ember-view"><a href="/libraries/603/journals/427355?sort=title"
                                id="ember84356" class="bookshelf-journal ember-view">
                                <div id="ember84357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0918-5607.png"
                                            alt="Cover of アジア教育史研究" title="アジア教育史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="アジア教育史研究" class="bookshelf-journal-title">アジア教育史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84359" class="ember-view"><a href="/libraries/603/journals/436857?sort=title"
                                id="ember84360" class="bookshelf-journal ember-view">
                                <div id="ember84361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2434-5814.png"
                                            alt="Cover of グローバル・コンサーン" title="グローバル・コンサーン">
                                        <!---->
                                    </div>
                                </div>
                                <div title="グローバル・コンサーン" class="bookshelf-journal-title">グローバル・コンサーン</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84363" class="ember-view"><a href="/libraries/603/journals/65773?sort=title"
                                id="ember84364" class="bookshelf-journal ember-view">
                                <div id="ember84365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1880-4357.png"
                                            alt="Cover of ジェンダー史学" title="ジェンダー史学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="ジェンダー史学" class="bookshelf-journal-title">ジェンダー史学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84367" class="ember-view"><a href="/libraries/603/journals/151187?sort=title"
                                id="ember84368" class="bookshelf-journal ember-view">
                                <div id="ember84369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0915-1273.png"
                                            alt="Cover of スポーツ史研究" title="スポーツ史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="スポーツ史研究" class="bookshelf-journal-title">スポーツ史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84372" class="ember-view"><a href="/libraries/603/journals/435869?sort=title"
                                id="ember84373" class="bookshelf-journal ember-view">
                                <div id="ember84374" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2423-9275.png"
                                            alt="Cover of 下仁田町自然史館研究報告" title="下仁田町自然史館研究報告">
                                        <!---->
                                    </div>
                                </div>
                                <div title="下仁田町自然史館研究報告" class="bookshelf-journal-title">下仁田町自然史館研究報告</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84376" class="ember-view"><a href="/libraries/603/journals/279155?sort=title"
                                id="ember84377" class="bookshelf-journal ember-view">
                                <div id="ember84378" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0578-2376.png"
                                            alt="Cover of 中世文学" title="中世文学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="中世文学" class="bookshelf-journal-title">中世文学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84380" class="ember-view"><a href="/libraries/603/journals/93277?sort=title"
                                id="ember84381" class="bookshelf-journal ember-view">
                                <div id="ember84382" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2185-8365.png"
                                            alt="Cover of 人間と環境" title="人間と環境">
                                        <!---->
                                    </div>
                                </div>
                                <div title="人間と環境" class="bookshelf-journal-title">人間と環境</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84384" class="ember-view"><a href="/libraries/603/journals/93281?sort=title"
                                id="ember84385" class="bookshelf-journal ember-view">
                                <div id="ember84386" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2185-8373.png"
                                            alt="Cover of 人間と環境 電子版" title="人間と環境 電子版">
                                        <!---->
                                    </div>
                                </div>
                                <div title="人間と環境 電子版" class="bookshelf-journal-title">人間と環境 電子版</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84388" class="ember-view"><a href="/libraries/603/journals/386376?sort=title"
                                id="ember84389" class="bookshelf-journal ember-view">
                                <div id="ember84390" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0914-4730.png"
                                            alt="Cover of 体育史研究" title="体育史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="体育史研究" class="bookshelf-journal-title">体育史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84392" class="ember-view"><a href="/libraries/603/journals/336038?sort=title"
                                id="ember84393" class="bookshelf-journal ember-view">
                                <div id="ember84394" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2433-1880.png"
                                            alt="Cover of 労務理論学会誌" title="労務理論学会誌">
                                        <!---->
                                    </div>
                                </div>
                                <div title="労務理論学会誌" class="bookshelf-journal-title">労務理論学会誌</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84396" class="ember-view"><a href="/libraries/603/journals/322500?sort=title"
                                id="ember84397" class="bookshelf-journal ember-view">
                                <div id="ember84398" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1880-2834.png"
                                            alt="Cover of 北ヨーロッパ研究" title="北ヨーロッパ研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="北ヨーロッパ研究" class="bookshelf-journal-title">北ヨーロッパ研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84400" class="ember-view"><a href="/libraries/603/journals/93716?sort=title"
                                id="ember84401" class="bookshelf-journal ember-view">
                                <div id="ember84402" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1340-5543.png"
                                            alt="Cover of 四日市大学論集" title="四日市大学論集">
                                        <!---->
                                    </div>
                                </div>
                                <div title="四日市大学論集" class="bookshelf-journal-title">四日市大学論集</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84404" class="ember-view"><a href="/libraries/603/journals/64814?sort=title"
                                id="ember84405" class="bookshelf-journal ember-view">
                                <div id="ember84406" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0916-393X.png"
                                            alt="Cover of 国際女性" title="国際女性">
                                        <!---->
                                    </div>
                                </div>
                                <div title="国際女性" class="bookshelf-journal-title">国際女性</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84408" class="ember-view"><a href="/libraries/603/journals/43869?sort=title"
                                id="ember84409" class="bookshelf-journal ember-view">
                                <div id="ember84410" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0289-7415.png"
                                            alt="Cover of 家族研究年報" title="家族研究年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="家族研究年報" class="bookshelf-journal-title">家族研究年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84412" class="ember-view"><a href="/libraries/603/journals/92376?sort=title"
                                id="ember84413" class="bookshelf-journal ember-view">
                                <div id="ember84414" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1341-0644.png"
                                            alt="Cover of 山陽学園短期大学紀要" title="山陽学園短期大学紀要">
                                        <!---->
                                    </div>
                                </div>
                                <div title="山陽学園短期大学紀要" class="bookshelf-journal-title">山陽学園短期大学紀要</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84416" class="ember-view"><a href="/libraries/603/journals/92377?sort=title"
                                id="ember84417" class="bookshelf-journal ember-view">
                                <div id="ember84418" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1341-0350.png"
                                            alt="Cover of 山陽論叢" title="山陽論叢">
                                        <!---->
                                    </div>
                                </div>
                                <div title="山陽論叢" class="bookshelf-journal-title">山陽論叢</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84420" class="ember-view"><a href="/libraries/603/journals/73030?sort=title"
                                id="ember84421" class="bookshelf-journal ember-view">
                                <div id="ember84422" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1349-6905.png"
                                            alt="Cover of 心の諸問題論叢" title="心の諸問題論叢">
                                        <!---->
                                    </div>
                                </div>
                                <div title="心の諸問題論叢" class="bookshelf-journal-title">心の諸問題論叢</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84424" class="ember-view"><a href="/libraries/603/journals/400262?sort=title"
                                id="ember84425" class="bookshelf-journal ember-view">
                                <div id="ember84426" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2433-8990.png"
                                            alt="Cover of 忍者研究" title="忍者研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="忍者研究" class="bookshelf-journal-title">忍者研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84428" class="ember-view"><a href="/libraries/603/journals/388468?sort=title"
                                id="ember84429" class="bookshelf-journal ember-view">
                                <div id="ember84430" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1883-3799.png"
                                            alt="Cover of 愛知県史研究" title="愛知県史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="愛知県史研究" class="bookshelf-journal-title">愛知県史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84432" class="ember-view"><a href="/libraries/603/journals/353858?sort=title"
                                id="ember84433" class="bookshelf-journal ember-view">
                                <div id="ember84434" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2432-6240.png"
                                            alt="Cover of 敬心・研究ジャーナル" title="敬心・研究ジャーナル">
                                        <!---->
                                    </div>
                                </div>
                                <div title="敬心・研究ジャーナル" class="bookshelf-journal-title">敬心・研究ジャーナル</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84436" class="ember-view"><a href="/libraries/603/journals/349749?sort=title"
                                id="ember84437" class="bookshelf-journal ember-view">
                                <div id="ember84438" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1880-7232.png"
                                            alt="Cover of 文化資源学" title="文化資源学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="文化資源学" class="bookshelf-journal-title">文化資源学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84440" class="ember-view"><a href="/libraries/603/journals/402209?sort=title"
                                id="ember84441" class="bookshelf-journal ember-view">
                                <div id="ember84442" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2434-4184.png"
                                            alt="Cover of 日仏歴史学会会報" title="日仏歴史学会会報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="日仏歴史学会会報" class="bookshelf-journal-title">日仏歴史学会会報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84444" class="ember-view"><a href="/libraries/603/journals/86427?sort=title"
                                id="ember84445" class="bookshelf-journal ember-view">
                                <div id="ember84446" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0386-8982.png"
                                            alt="Cover of 日本の教育史学" title="日本の教育史学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="日本の教育史学" class="bookshelf-journal-title">日本の教育史学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84448" class="ember-view"><a href="/libraries/603/journals/151205?sort=title"
                                id="ember84449" class="bookshelf-journal ember-view">
                                <div id="ember84450" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1882-3033.png"
                                            alt="Cover of 日本オーラル・ヒストリー研究" title="日本オーラル・ヒストリー研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="日本オーラル・ヒストリー研究" class="bookshelf-journal-title">日本オーラル・ヒストリー研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84452" class="ember-view"><a href="/libraries/603/journals/271139?sort=title"
                                id="ember84453" class="bookshelf-journal ember-view">
                                <div id="ember84454" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1882-0093.png"
                                            alt="Cover of 時間学研究" title="時間学研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="時間学研究" class="bookshelf-journal-title">時間学研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84456" class="ember-view"><a href="/libraries/603/journals/441057?sort=title"
                                id="ember84457" class="bookshelf-journal ember-view">
                                <div id="ember84458" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2435-8010.png"
                                            alt="Cover of 未来共創" title="未来共創">
                                        <!---->
                                    </div>
                                </div>
                                <div title="未来共創" class="bookshelf-journal-title">未来共創</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84460" class="ember-view"><a href="/libraries/603/journals/92962?sort=title"
                                id="ember84461" class="bookshelf-journal ember-view">
                                <div id="ember84462" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1882-5273.png"
                                            alt="Cover of 東京未来大学研究紀要" title="東京未来大学研究紀要">
                                        <!---->
                                    </div>
                                </div>
                                <div title="東京未来大学研究紀要" class="bookshelf-journal-title">東京未来大学研究紀要</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84464" class="ember-view"><a href="/libraries/603/journals/151212?sort=title"
                                id="ember84465" class="bookshelf-journal ember-view">
                                <div id="ember84466" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1347-9660.png"
                                            alt="Cover of 歴史と経済" title="歴史と経済">
                                        <!---->
                                    </div>
                                </div>
                                <div title="歴史と経済" class="bookshelf-journal-title">歴史と経済</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84468" class="ember-view"><a href="/libraries/603/journals/93356?sort=title"
                                id="ember84469" class="bookshelf-journal ember-view">
                                <div id="ember84470" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0913-5812.png"
                                            alt="Cover of 比較家族史研究" title="比較家族史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="比較家族史研究" class="bookshelf-journal-title">比較家族史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84472" class="ember-view"><a href="/libraries/603/journals/151144?sort=title"
                                id="ember84473" class="bookshelf-journal ember-view">
                                <div id="ember84474" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0287-1637.png"
                                            alt="Cover of 比較都市史研究" title="比較都市史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="比較都市史研究" class="bookshelf-journal-title">比較都市史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84476" class="ember-view"><a href="/libraries/603/journals/440939?sort=title"
                                id="ember84477" class="bookshelf-journal ember-view">
                                <div id="ember84478" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2436-0074.png"
                                            alt="Cover of 火内" title="火内">
                                        <!---->
                                    </div>
                                </div>
                                <div title="火内" class="bookshelf-journal-title">火内</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84480" class="ember-view"><a href="/libraries/603/journals/289532?sort=title"
                                id="ember84481" class="bookshelf-journal ember-view">
                                <div id="ember84482" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0386-8869.png"
                                            alt="Cover of 現代史研究" title="現代史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="現代史研究" class="bookshelf-journal-title">現代史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84484" class="ember-view"><a href="/libraries/603/journals/384011?sort=title"
                                id="ember84485" class="bookshelf-journal ember-view">
                                <div id="ember84486" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0386-9539.png"
                                            alt="Cover of 生物学史研究" title="生物学史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="生物学史研究" class="bookshelf-journal-title">生物学史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84488" class="ember-view"><a href="/libraries/603/journals/234566?sort=title"
                                id="ember84489" class="bookshelf-journal ember-view">
                                <div id="ember84490" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1883-1850.png"
                                            alt="Cover of 社会政策" title="社会政策">
                                        <!---->
                                    </div>
                                </div>
                                <div title="社会政策" class="bookshelf-journal-title">社会政策</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84492" class="ember-view"><a href="/libraries/603/journals/85171?sort=title"
                                id="ember84493" class="bookshelf-journal ember-view">
                                <div id="ember84494" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0038-0113.png"
                                            alt="Cover of 社会経済史学" title="社会経済史学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="社会経済史学" class="bookshelf-journal-title">社会経済史学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84496" class="ember-view"><a href="/libraries/603/journals/172499?sort=title"
                                id="ember84497" class="bookshelf-journal ember-view">
                                <div id="ember84498" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0388-9009.png"
                                            alt="Cover of 神奈川自然誌資料" title="神奈川自然誌資料">
                                        <!---->
                                    </div>
                                </div>
                                <div title="神奈川自然誌資料" class="bookshelf-journal-title">神奈川自然誌資料</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84500" class="ember-view"><a href="/libraries/603/journals/92030?sort=title"
                                id="ember84501" class="bookshelf-journal ember-view">
                                <div id="ember84502" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1344-803X.png"
                                            alt="Cover of 経済史研究" title="経済史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="経済史研究" class="bookshelf-journal-title">経済史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84504" class="ember-view"><a href="/libraries/603/journals/234253?sort=title"
                                id="ember84505" class="bookshelf-journal ember-view">
                                <div id="ember84506" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0285-2314.png"
                                            alt="Cover of 薬史学雑誌" title="薬史学雑誌">
                                        <!---->
                                    </div>
                                </div>
                                <div title="薬史学雑誌" class="bookshelf-journal-title">薬史学雑誌</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84508" class="ember-view"><a href="/libraries/603/journals/189131?sort=title"
                                id="ember84509" class="bookshelf-journal ember-view">
                                <div id="ember84510" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0549-5202.png"
                                            alt="Cover of 農村生活研究" title="農村生活研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="農村生活研究" class="bookshelf-journal-title">農村生活研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84512" class="ember-view"><a href="/libraries/603/journals/442434?sort=title"
                                id="ember84513" class="bookshelf-journal ember-view">
                                <div id="ember84514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2436-0775.png"
                                            alt="Cover of 農村計画学会論文集" title="農村計画学会論文集">
                                        <!---->
                                    </div>
                                </div>
                                <div title="農村計画学会論文集" class="bookshelf-journal-title">農村計画学会論文集</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84516" class="ember-view"><a href="/libraries/603/journals/93307?sort=title"
                                id="ember84517" class="bookshelf-journal ember-view">
                                <div id="ember84518" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/1347-5614.png"
                                            alt="Cover of 農業史研究" title="農業史研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="農業史研究" class="bookshelf-journal-title">農業史研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84520" class="ember-view"><a href="/libraries/603/journals/362882?sort=title"
                                id="ember84521" class="bookshelf-journal ember-view">
                                <div id="ember84522" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0915-597X.png"
                                            alt="Cover of 農業問題研究" title="農業問題研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="農業問題研究" class="bookshelf-journal-title">農業問題研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84524" class="ember-view"><a href="/libraries/603/journals/427362?sort=title"
                                id="ember84525" class="bookshelf-journal ember-view">
                                <div id="ember84526" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/2188-6709.png"
                                            alt="Cover of 近世京都" title="近世京都">
                                        <!---->
                                    </div>
                                </div>
                                <div title="近世京都" class="bookshelf-journal-title">近世京都</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember84528" class="ember-view"><a href="/libraries/603/journals/92783?sort=title"
                                id="ember84529" class="bookshelf-journal ember-view">
                                <div id="ember84530" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/History/0915-9347.png"
                                            alt="Cover of 高岡法科大学紀要" title="高岡法科大学紀要">
                                        <!---->
                                    </div>
                                </div>
                                <div title="高岡法科大学紀要" class="bookshelf-journal-title">高岡法科大学紀要</div>
                            </a></div>
                    </li>

                    <li class="bookshelf-loading-indicator">
                        <!---->
                    </li>
                </ul>
            </div>
        </main>

        <div id="ember797" class="ember-view"></div>

        <ul class="responsive-menu"></ul>


        <!---->
    </div>
    </div><!--canvas-->


    <div class="flash-messages">
        <!---->
    </div>
    </div>
    </div>
</body>

</html>