<?php $this->view("./components/Header"); ?>

<body class="ember-application">
    <?php $this->view("./components/Nav"); ?>
    <div id="library-content" class="container ">
        <main class="holdings-container">
            <div class="subject">
                <a href="/libraries/603/subjects?sort=title" id="ember90332" class="subject-back-button ember-view"
                    tabindex="0"> <img
                        src="//browzine-app.thirdiron.com/images/change-subject-chevron-b0613c2c2576dc880a792874777e52b3.png"
                        alt="Change Subject"> Change Subject</a>

                <h1 tabindex="0" class="subject-name">Philosophy and Religion</h1>

                <h4 tabindex="0" class="subject-bookcase-list-header">Categories</h4>
                <ul class="subject-bookcase-list">
                    <li class="subject-bookcase-list-item">
                        <a href="/journals/libraries/603/subjects/59" id="ember90333" class="active ember-view"
                            tabindex="0"> All Journals
                        </a>
                    </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/59/bookcases/85?sort=title"
                            id="ember90335" class="ember-view" tabindex="0">Philosophy</a> </li>
                    <li class="subject-bookcase-list-item"> <a href="/journals/libraries/603/subjects/59/bookcases/88?sort=title"
                            id="ember90337" class="ember-view" tabindex="0">Religion</a> </li>
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
                        <div id="ember90344" class="ember-view"><a href="/libraries/603/journals/5375?sort=title"
                                id="ember90345" class="bookshelf-journal ember-view">
                                <div id="ember90346" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0353-5150.png"
                                            alt="Cover of Acta Analytica" title="Acta Analytica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Analytica" class="bookshelf-journal-title">Acta Analytica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90347" class="ember-view"><a href="/libraries/603/journals/244108?sort=title"
                                id="ember90348" class="bookshelf-journal ember-view">
                                <div id="ember90349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2228-2009.png"
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
                        <div id="ember90351" class="ember-view"><a href="/libraries/603/journals/41163?sort=title"
                                id="ember90352" class="bookshelf-journal ember-view">
                                <div id="ember90353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1726-569X-d781aa57-fbaa-4905-92a7-0e82a3702d17.png"
                                            alt="Cover of Acta Bioethica" title="Acta Bioethica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Bioethica" class="bookshelf-journal-title">Acta Bioethica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90355" class="ember-view"><a href="/libraries/603/journals/375811?sort=title"
                                id="ember90356" class="bookshelf-journal ember-view">
                                <div id="ember90357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0567-8293.png"
                                            alt="Cover of Acta Universitatis Carolinae: Philosophica et Historica"
                                            title="Acta Universitatis Carolinae: Philosophica et Historica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Universitatis Carolinae: Philosophica et Historica"
                                    class="bookshelf-journal-title">Acta Universitatis Carolinae: Philosophica et
                                    Historica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90359" class="ember-view"><a href="/libraries/603/journals/41356?sort=title"
                                id="ember90360" class="bookshelf-journal ember-view">
                                <div id="ember90361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1804-5588.png"
                                            alt="Cover of Acta Universitatis Carolinae Theologica"
                                            title="Acta Universitatis Carolinae Theologica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Universitatis Carolinae Theologica" class="bookshelf-journal-title">
                                    Acta Universitatis Carolinae Theologica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90363" class="ember-view"><a href="/libraries/603/journals/41369?sort=title"
                                id="ember90364" class="bookshelf-journal ember-view">
                                <div id="ember90365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0208-6107-8bc85c7b-a5fe-4930-bcc2-3bf8abc38e42.png"
                                            alt="Cover of Acta Universitatis Lodziensis : Folia Philosophica Ethica-Aesthetica-Practica"
                                            title="Acta Universitatis Lodziensis : Folia Philosophica Ethica-Aesthetica-Practica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Acta Universitatis Lodziensis : Folia Philosophica Ethica-Aesthetica-Practica"
                                    class="bookshelf-journal-title">Acta Universitatis Lodziensis : Folia Philosophica
                                    Ethica-Aesthetica-Practica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90366" class="ember-view"><a href="/libraries/603/journals/429673?sort=title"
                                id="ember90367" class="bookshelf-journal ember-view">
                                <div id="ember90368" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/27305961.png"
                                            alt="Cover of AI and Ethics" title="AI and Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="AI and Ethics" class="bookshelf-journal-title">AI and Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90370" class="ember-view"><a href="/libraries/603/journals/127857?sort=title"
                                id="ember90371" class="bookshelf-journal ember-view">
                                <div id="ember90372" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2329-4515-9c39669c-b3cf-438e-af84-899a0dcbf07f.jpeg"
                                            alt="Cover of AJOB Empirical Bioethics" title="AJOB Empirical Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="AJOB Empirical Bioethics" class="bookshelf-journal-title">AJOB Empirical
                                    Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90374" class="ember-view"><a href="/libraries/603/journals/19090?sort=title"
                                id="ember90375" class="bookshelf-journal ember-view">
                                <div id="ember90376" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1475-4541-9c63e6dc-e518-41ce-acfc-5371cc624dc2.png"
                                            alt="Cover of AJS Review" title="AJS Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="AJS Review" class="bookshelf-journal-title">AJS Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90377" class="ember-view"><a href="/libraries/603/journals/325824?sort=title"
                                id="ember90378" class="bookshelf-journal ember-view">
                                <div id="ember90379" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2085-627X.png"
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
                        <div id="ember90381" class="ember-view"><a href="/libraries/603/journals/246836?sort=title"
                                id="ember90382" class="bookshelf-journal ember-view">
                                <div id="ember90383" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0216-6143.png"
                                            alt="Cover of Al-Albab" title="Al-Albab">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Albab" class="bookshelf-journal-title">Al-Albab</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90384" class="ember-view"><a href="/libraries/603/journals/244602?sort=title"
                                id="ember90385" class="bookshelf-journal ember-view">
                                <div id="ember90386" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1693-9867.png"
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
                        <div id="ember90388" class="ember-view"><a href="/libraries/603/journals/308153?sort=title"
                                id="ember90389" class="bookshelf-journal ember-view">
                                <div id="ember90390" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2477-4189.png"
                                            alt="Cover of Al-Athfal: Jurnal Pendidikan Anak"
                                            title="Al-Athfal: Jurnal Pendidikan Anak">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Athfal: Jurnal Pendidikan Anak" class="bookshelf-journal-title">
                                    Al-Athfal: Jurnal Pendidikan Anak</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90392" class="ember-view"><a href="/libraries/603/journals/372328?sort=title"
                                id="ember90393" class="bookshelf-journal ember-view">
                                <div id="ember90394" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2232-1969-b6b754bb-bf0f-4177-9bb9-17f14da1b743.png"
                                            alt="Cover of Al-Bayan : Journal of Qur’an and Hadith Studies"
                                            title="Al-Bayan : Journal of Qur’an and Hadith Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Bayan : Journal of Qur’an and Hadith Studies"
                                    class="bookshelf-journal-title">Al-Bayan : Journal of Qur’an and Hadith Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90396" class="ember-view"><a href="/libraries/603/journals/40347?sort=title"
                                id="ember90397" class="bookshelf-journal ember-view">
                                <div id="ember90398" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0002-5275.png"
                                            alt="Cover of Algemeen Nederlands Tijdschrift voor Wijsbegeerte"
                                            title="Algemeen Nederlands Tijdschrift voor Wijsbegeerte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Algemeen Nederlands Tijdschrift voor Wijsbegeerte"
                                    class="bookshelf-journal-title">Algemeen Nederlands Tijdschrift voor Wijsbegeerte
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90400" class="ember-view"><a href="/libraries/603/journals/318391?sort=title"
                                id="ember90401" class="bookshelf-journal ember-view">
                                <div id="ember90402" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1978-9726.png"
                                            alt="Cover of Al-Izzah" title="Al-Izzah">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Izzah" class="bookshelf-journal-title">Al-Izzah</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90404" class="ember-view"><a href="/libraries/603/journals/71450?sort=title"
                                id="ember90405" class="bookshelf-journal ember-view">
                                <div id="ember90406" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0126-012X.png"
                                            alt="Cover of Al-Jami'ah: Journal of Islamic Studies"
                                            title="Al-Jami'ah: Journal of Islamic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Jami'ah: Journal of Islamic Studies" class="bookshelf-journal-title">
                                    Al-Jami'ah: Journal of Islamic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90408" class="ember-view"><a href="/libraries/603/journals/42723?sort=title"
                                id="ember90409" class="bookshelf-journal ember-view">
                                <div id="ember90410" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0716-4254-51e609ea-9bb1-463a-a33c-661907ff836f.png"
                                            alt="Cover of Alpha : Revista de Artes Letras y Filosofía"
                                            title="Alpha : Revista de Artes Letras y Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Alpha : Revista de Artes Letras y Filosofía"
                                    class="bookshelf-journal-title">Alpha : Revista de Artes Letras y Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90411" class="ember-view"><a href="/libraries/603/journals/37477?sort=title"
                                id="ember90412" class="bookshelf-journal ember-view">
                                <div id="ember90413" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0211-3589.png"
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
                        <div id="ember90415" class="ember-view"><a href="/libraries/603/journals/316117?sort=title"
                                id="ember90416" class="bookshelf-journal ember-view">
                                <div id="ember90417" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2086-9118.png"
                                            alt="Cover of Al-Tadzkiyyah: Jurnal Pendidikan Islam"
                                            title="Al-Tadzkiyyah: Jurnal Pendidikan Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Tadzkiyyah: Jurnal Pendidikan Islam" class="bookshelf-journal-title">
                                    Al-Tadzkiyyah: Jurnal Pendidikan Islam</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90419" class="ember-view"><a href="/libraries/603/journals/124022?sort=title"
                                id="ember90420" class="bookshelf-journal ember-view">
                                <div id="ember90421" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1412-7512.png"
                                            alt="Cover of Al-Tahrir" title="Al-Tahrir">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Tahrir" class="bookshelf-journal-title">Al-Tahrir</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90422" class="ember-view"><a href="/libraries/603/journals/42764?sort=title"
                                id="ember90423" class="bookshelf-journal ember-view">
                                <div id="ember90424" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1412-0534.png"
                                            alt="Cover of Al-Ulum" title="Al-Ulum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Al-Ulum" class="bookshelf-journal-title">Al-Ulum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90425" class="ember-view"><a href="/libraries/603/journals/10811?sort=title"
                                id="ember90426" class="bookshelf-journal ember-view">
                                <div id="ember90427" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0164-0178.png"
                                            alt="Cover of American Jewish History" title="American Jewish History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Jewish History" class="bookshelf-journal-title">American Jewish
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90429" class="ember-view"><a href="/libraries/603/journals/17565?sort=title"
                                id="ember90430" class="bookshelf-journal ember-view">
                                <div id="ember90431" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1526-5161.png"
                                            alt="Cover of The American Journal of Bioethics"
                                            title="The American Journal of Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The American Journal of Bioethics" class="bookshelf-journal-title">The
                                    American Journal of Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90433" class="ember-view"><a href="/libraries/603/journals/10657?sort=title"
                                id="ember90434" class="bookshelf-journal ember-view">
                                <div id="ember90435" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0194-3448.png"
                                            alt="Cover of American Journal of Theology &amp; Philosophy"
                                            title="American Journal of Theology &amp; Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Journal of Theology &amp; Philosophy"
                                    class="bookshelf-journal-title">American Journal of Theology &amp; Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90437" class="ember-view"><a href="/libraries/603/journals/43174?sort=title"
                                id="ember90438" class="bookshelf-journal ember-view">
                                <div id="ember90439" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0003-0481-8140e7f0-387c-444b-9136-d0127b973753.png"
                                            alt="Cover of American Philosophical Quarterly"
                                            title="American Philosophical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="American Philosophical Quarterly" class="bookshelf-journal-title">American
                                    Philosophical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90440" class="ember-view"><a href="/libraries/603/journals/33450?sort=title"
                                id="ember90441" class="bookshelf-journal ember-view">
                                <div id="ember90442" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2161-1580.png"
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
                        <div id="ember90444" class="ember-view"><a href="/libraries/603/journals/43449?sort=title"
                                id="ember90445" class="bookshelf-journal ember-view">
                                <div id="ember90446" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2443-3853.png"
                                            alt="Cover of Analisa: Jurnal Pengkajian Masalah Sosial Keagamaan"
                                            title="Analisa: Jurnal Pengkajian Masalah Sosial Keagamaan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Analisa: Jurnal Pengkajian Masalah Sosial Keagamaan"
                                    class="bookshelf-journal-title">Analisa: Jurnal Pengkajian Masalah Sosial Keagamaan
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90448" class="ember-view"><a href="/libraries/603/journals/43453?sort=title"
                                id="ember90449" class="bookshelf-journal ember-view">
                                <div id="ember90450" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0326-1301-d8577862-0231-4fe7-b05e-a417b6b5b770.png"
                                            alt="Cover of Análisis Filosófico" title="Análisis Filosófico">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Análisis Filosófico" class="bookshelf-journal-title">Análisis Filosófico
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90452" class="ember-view"><a href="/libraries/603/journals/123777?sort=title"
                                id="ember90453" class="bookshelf-journal ember-view">
                                <div id="ember90454" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1734-9923.png"
                                            alt="Cover of Analiza i Egzystencja" title="Analiza i Egzystencja">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Analiza i Egzystencja" class="bookshelf-journal-title">Analiza i Egzystencja
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90456" class="ember-view"><a href="/libraries/603/journals/218117?sort=title"
                                id="ember90457" class="bookshelf-journal ember-view">
                                <div id="ember90458" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/23659858-e45c245d-caed-46e7-a107-5e94275b448a.png"
                                            alt="Cover of Analyse &amp; Kritik : Journal of Philosophy and Social Theory"
                                            title="Analyse &amp; Kritik : Journal of Philosophy and Social Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Analyse &amp; Kritik : Journal of Philosophy and Social Theory"
                                    class="bookshelf-journal-title">Analyse &amp; Kritik : Journal of Philosophy and
                                    Social Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90460" class="ember-view"><a href="/libraries/603/journals/10326?sort=title"
                                id="ember90461" class="bookshelf-journal ember-view">
                                <div id="ember90462" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0003-2638.png"
                                            alt="Cover of Analysis" title="Analysis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Analysis" class="bookshelf-journal-title">Analysis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90464" class="ember-view"><a href="/libraries/603/journals/3537?sort=title"
                                id="ember90465" class="bookshelf-journal ember-view">
                                <div id="ember90466" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2153-9596.png"
                                            alt="Cover of Analytic Philosophy" title="Analytic Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Analytic Philosophy" class="bookshelf-journal-title">Analytic Philosophy
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90467" class="ember-view"><a href="/libraries/603/journals/284270?sort=title"
                                id="ember90468" class="bookshelf-journal ember-view">
                                <div id="ember90469" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2392-862X.png"
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
                        <div id="ember90471" class="ember-view"><a href="/libraries/603/journals/363560?sort=title"
                                id="ember90472" class="bookshelf-journal ember-view">
                                <div id="ember90473" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2516-1156.png"
                                            alt="Cover of Ancient Philosophy Today" title="Ancient Philosophy Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ancient Philosophy Today" class="bookshelf-journal-title">Ancient Philosophy
                                    Today</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90475" class="ember-view"><a href="/libraries/603/journals/43562?sort=title"
                                id="ember90476" class="bookshelf-journal ember-view">
                                <div id="ember90477" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0003-3286-0c7c94f4-be03-4a69-838f-5bddece1933b.png"
                                            alt="Cover of Anglican Theological Review"
                                            title="Anglican Theological Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Anglican Theological Review" class="bookshelf-journal-title">Anglican
                                    Theological Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90479" class="ember-view"><a href="/libraries/603/journals/99274?sort=title"
                                id="ember90480" class="bookshelf-journal ember-view">
                                <div id="ember90481" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0962-7286-471b78a2-0e6b-4460-949d-3ab7a398b65f.png"
                                            alt="Cover of Animal Welfare" title="Animal Welfare">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Animal Welfare" class="bookshelf-journal-title">Animal Welfare</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90483" class="ember-view"><a href="/libraries/603/journals/40447?sort=title"
                                id="ember90484" class="bookshelf-journal ember-view">
                                <div id="ember90485" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1112-5020.png"
                                            alt="Cover of Annales du Patrimoine" title="Annales du Patrimoine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Annales du Patrimoine" class="bookshelf-journal-title">Annales du Patrimoine
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90486" class="ember-view"><a href="/libraries/603/journals/40217?sort=title"
                                id="ember90487" class="bookshelf-journal ember-view">
                                <div id="ember90488" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2031-5929.png"
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
                        <div id="ember90490" class="ember-view"><a href="/libraries/603/journals/44481?sort=title"
                                id="ember90491" class="bookshelf-journal ember-view">
                                <div id="ember90492" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2227-7242.png"
                                            alt="Cover of Antropologìčnì Vimìri Fìlosofsʹkih Doslìdženʹ"
                                            title="Antropologìčnì Vimìri Fìlosofsʹkih Doslìdženʹ">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Antropologìčnì Vimìri Fìlosofsʹkih Doslìdženʹ"
                                    class="bookshelf-journal-title">Antropologìčnì Vimìri Fìlosofsʹkih Doslìdženʹ</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90494" class="ember-view"><a href="/libraries/603/journals/32703?sort=title"
                                id="ember90495" class="bookshelf-journal ember-view">
                                <div id="ember90496" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2156-7093.png"
                                            alt="Cover of Apeiron" title="Apeiron">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Apeiron" class="bookshelf-journal-title">Apeiron</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90498" class="ember-view"><a href="/libraries/603/journals/44661?sort=title"
                                id="ember90499" class="bookshelf-journal ember-view">
                                <div id="ember90500" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1799-3121.png"
                                            alt="Cover of Approaching Religion" title="Approaching Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Approaching Religion" class="bookshelf-journal-title">Approaching Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90501" class="ember-view"><a href="/libraries/603/journals/19073?sort=title"
                                id="ember90502" class="bookshelf-journal ember-view">
                                <div id="ember90503" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0957-4239.png"
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
                        <div id="ember90505" class="ember-view"><a href="/libraries/603/journals/32590?sort=title"
                                id="ember90506" class="bookshelf-journal ember-view">
                                <div id="ember90507" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-0650.png"
                                            alt="Cover of Archiv für Geschichte der Philosophie"
                                            title="Archiv für Geschichte der Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archiv für Geschichte der Philosophie" class="bookshelf-journal-title">
                                    Archiv für Geschichte der Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90509" class="ember-view"><a href="/libraries/603/journals/177180?sort=title"
                                id="ember90510" class="bookshelf-journal ember-view">
                                <div id="ember90511" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-045X-393b8361-d36f-4816-967b-c7892d23ee54.png"
                                            alt="Cover of Archiv für Katholisches Kirchenrecht"
                                            title="Archiv für Katholisches Kirchenrecht">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archiv für Katholisches Kirchenrecht" class="bookshelf-journal-title">Archiv
                                    für Katholisches Kirchenrecht</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90512" class="ember-view"><a href="/libraries/603/journals/99389?sort=title"
                                id="ember90513" class="bookshelf-journal ember-view">
                                <div id="ember90514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0001-2343.png"
                                            alt="Cover of Archiv für Rechts- und Sozialphilosophie"
                                            title="Archiv für Rechts- und Sozialphilosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archiv für Rechts- und Sozialphilosophie" class="bookshelf-journal-title">
                                    Archiv für Rechts- und Sozialphilosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90515" class="ember-view"><a href="/libraries/603/journals/32645?sort=title"
                                id="ember90516" class="bookshelf-journal ember-view">
                                <div id="ember90517" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1868-8888.png"
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
                        <div id="ember90519" class="ember-view"><a href="/libraries/603/journals/9860?sort=title"
                                id="ember90520" class="bookshelf-journal ember-view">
                                <div id="ember90521" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0084-6724.png"
                                            alt="Cover of Archive for the Psychology of Religion"
                                            title="Archive for the Psychology of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archive for the Psychology of Religion" class="bookshelf-journal-title">
                                    Archive for the Psychology of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90523" class="ember-view"><a href="/libraries/603/journals/188761?sort=title"
                                id="ember90524" class="bookshelf-journal ember-view">
                                <div id="ember90525" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1769-681X.png"
                                            alt="Cover of Archives de Philosophie" title="Archives de Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives de Philosophie" class="bookshelf-journal-title">Archives de
                                    Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90527" class="ember-view"><a href="/libraries/603/journals/44851?sort=title"
                                id="ember90528" class="bookshelf-journal ember-view">
                                <div id="ember90529" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1777-5825.png"
                                            alt="Cover of Archives de Sciences Sociales des Religions"
                                            title="Archives de Sciences Sociales des Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Archives de Sciences Sociales des Religions"
                                    class="bookshelf-journal-title">Archives de Sciences Sociales des Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90531" class="ember-view"><a href="/libraries/603/journals/44982?sort=title"
                                id="ember90532" class="bookshelf-journal ember-view">
                                <div id="ember90533" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1016-913X-751d7e5e-e2e1-4a3f-ba7d-70bb573540b0.png"
                                            alt="Cover of Areté : Revista de Filosofía"
                                            title="Areté : Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Areté : Revista de Filosofía" class="bookshelf-journal-title">Areté :
                                    Revista de Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90535" class="ember-view"><a href="/libraries/603/journals/4227?sort=title"
                                id="ember90536" class="bookshelf-journal ember-view">
                                <div id="ember90537" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0920-427X.png"
                                            alt="Cover of Argumentation" title="Argumentation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Argumentation" class="bookshelf-journal-title">Argumentation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90539" class="ember-view"><a href="/libraries/603/journals/6698?sort=title"
                                id="ember90540" class="bookshelf-journal ember-view">
                                <div id="ember90541" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0309-7013.png"
                                            alt="Cover of Aristotelian Society Supplementary Volume"
                                            title="Aristotelian Society Supplementary Volume">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aristotelian Society Supplementary Volume" class="bookshelf-journal-title">
                                    Aristotelian Society Supplementary Volume</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90543" class="ember-view"><a href="/libraries/603/journals/32201?sort=title"
                                id="ember90544" class="bookshelf-journal ember-view">
                                <div id="ember90545" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1793-8759.png"
                                            alt="Cover of Asian Bioethics Review" title="Asian Bioethics Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Asian Bioethics Review" class="bookshelf-journal-title">Asian Bioethics
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90547" class="ember-view"><a href="/libraries/603/journals/16905?sort=title"
                                id="ember90548" class="bookshelf-journal ember-view">
                                <div id="ember90549" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0955-2367.png"
                                            alt="Cover of Asian Philosophy" title="Asian Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Asian Philosophy" class="bookshelf-journal-title">Asian Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90551" class="ember-view"><a href="/libraries/603/journals/45615?sort=title"
                                id="ember90552" class="bookshelf-journal ember-view">
                                <div id="ember90553" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1762-6110.png"
                                            alt="Cover of Astérion" title="Astérion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Astérion" class="bookshelf-journal-title">Astérion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90555" class="ember-view"><a href="/libraries/603/journals/45770?sort=title"
                                id="ember90556" class="bookshelf-journal ember-view">
                                <div id="ember90557" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2318-9428.png"
                                            alt="Cover of Aufklärung" title="Aufklärung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Aufklärung" class="bookshelf-journal-title">Aufklärung</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90559" class="ember-view"><a href="/libraries/603/journals/16747?sort=title"
                                id="ember90560" class="bookshelf-journal ember-view">
                                <div id="ember90561" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0004-8402.png"
                                            alt="Cover of Australasian Journal of Philosophy"
                                            title="Australasian Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australasian Journal of Philosophy" class="bookshelf-journal-title">
                                    Australasian Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90562" class="ember-view"><a href="/libraries/603/journals/45861?sort=title"
                                id="ember90563" class="bookshelf-journal ember-view">
                                <div id="ember90564" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1320-0968.png"
                                            alt="Cover of Australian Feminist Law Journal"
                                            title="Australian Feminist Law Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australian Feminist Law Journal" class="bookshelf-journal-title">Australian
                                    Feminist Law Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90565" class="ember-view"><a href="/libraries/603/journals/99608?sort=title"
                                id="ember90566" class="bookshelf-journal ember-view">
                                <div id="ember90567" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1323-238X.png"
                                            alt="Cover of Australian Journal of Human Rights"
                                            title="Australian Journal of Human Rights">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Australian Journal of Human Rights" class="bookshelf-journal-title">
                                    Australian Journal of Human Rights</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90571" class="ember-view"><a href="/libraries/603/journals/6838?sort=title"
                                id="ember90572" class="bookshelf-journal ember-view">
                                <div id="ember90573" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1122-1151.png"
                                            alt="Cover of Axiomathes" title="Axiomathes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Axiomathes" class="bookshelf-journal-title">Axiomathes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90575" class="ember-view"><a href="/libraries/603/journals/46276?sort=title"
                                id="ember90576" class="bookshelf-journal ember-view">
                                <div id="ember90577" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1944-3676.png"
                                            alt="Cover of Baltic International Yearbook of Cognition, Logic and Communication"
                                            title="Baltic International Yearbook of Cognition, Logic and Communication">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Baltic International Yearbook of Cognition, Logic and Communication"
                                    class="bookshelf-journal-title">Baltic International Yearbook of Cognition, Logic
                                    and Communication</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90579" class="ember-view"><a href="/libraries/603/journals/99706?sort=title"
                                id="ember90580" class="bookshelf-journal ember-view">
                                <div id="ember90581" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0005-576X.png"
                                            alt="Cover of Baptist Quarterly" title="Baptist Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Baptist Quarterly" class="bookshelf-journal-title">Baptist Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90583" class="ember-view"><a href="/libraries/603/journals/143964?sort=title"
                                id="ember90584" class="bookshelf-journal ember-view">
                                <div id="ember90585" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1689-5150-fd220613-b87d-4750-8e3c-bf7fa4815ee4.png"
                                            alt="Cover of Biblica et Patristica Thoruniensia"
                                            title="Biblica et Patristica Thoruniensia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biblica et Patristica Thoruniensia" class="bookshelf-journal-title">Biblica
                                    et Patristica Thoruniensia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90587" class="ember-view"><a href="/libraries/603/journals/9863?sort=title"
                                id="ember90588" class="bookshelf-journal ember-view">
                                <div id="ember90589" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0927-2569.png"
                                            alt="Cover of Biblical Interpretation" title="Biblical Interpretation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biblical Interpretation" class="bookshelf-journal-title">Biblical
                                    Interpretation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90591" class="ember-view"><a href="/libraries/603/journals/7107?sort=title"
                                id="ember90592" class="bookshelf-journal ember-view">
                                <div id="ember90593" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0146-1079.png"
                                            alt="Cover of Biblical Theology Bulletin: Journal of Bible and Culture"
                                            title="Biblical Theology Bulletin: Journal of Bible and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biblical Theology Bulletin: Journal of Bible and Culture"
                                    class="bookshelf-journal-title">Biblical Theology Bulletin: Journal of Bible and
                                    Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90595" class="ember-view"><a href="/libraries/603/journals/178508?sort=title"
                                id="ember90596" class="bookshelf-journal ember-view">
                                <div id="ember90597" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0006-2014-cb18ee6c-d51c-437f-9269-c8cfab61df8f.webp"
                                            alt="Cover of Biblische Zeitschrift" title="Biblische Zeitschrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biblische Zeitschrift" class="bookshelf-journal-title">Biblische Zeitschrift
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90599" class="ember-view"><a href="/libraries/603/journals/11080?sort=title"
                                id="ember90600" class="bookshelf-journal ember-view">
                                <div id="ember90601" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0269-9702.png"
                                            alt="Cover of Bioethics" title="Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bioethics" class="bookshelf-journal-title">Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90603" class="ember-view"><a href="/libraries/603/journals/109682?sort=title"
                                id="ember90604" class="bookshelf-journal ember-view">
                                <div id="ember90605" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2395-938X.png"
                                            alt="Cover of Bioethics Update" title="Bioethics Update">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bioethics Update" class="bookshelf-journal-title">Bioethics Update</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90607" class="ember-view"><a href="/libraries/603/journals/46963?sort=title"
                                id="ember90608" class="bookshelf-journal ember-view">
                                <div id="ember90609" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1923-2799.png"
                                            alt="Cover of BioéthiqueOnline" title="BioéthiqueOnline">
                                        <!---->
                                    </div>
                                </div>
                                <div title="BioéthiqueOnline" class="bookshelf-journal-title">BioéthiqueOnline</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90611" class="ember-view"><a href="/libraries/603/journals/35596?sort=title"
                                id="ember90612" class="bookshelf-journal ember-view">
                                <div id="ember90613" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1555-5542.png"
                                            alt="Cover of Biological Theory" title="Biological Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biological Theory" class="bookshelf-journal-title">Biological Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90615" class="ember-view"><a href="/libraries/603/journals/6855?sort=title"
                                id="ember90616" class="bookshelf-journal ember-view">
                                <div id="ember90617" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0169-3867.png"
                                            alt="Cover of Biology &amp; Philosophy" title="Biology &amp; Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biology &amp; Philosophy" class="bookshelf-journal-title">Biology &amp;
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90619" class="ember-view"><a href="/libraries/603/journals/7012?sort=title"
                                id="ember90620" class="bookshelf-journal ember-view">
                                <div id="ember90621" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1875-1342.png"
                                            alt="Cover of Biosemiotics" title="Biosemiotics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Biosemiotics" class="bookshelf-journal-title">Biosemiotics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90623" class="ember-view"><a href="/libraries/603/journals/36359?sort=title"
                                id="ember90624" class="bookshelf-journal ember-view">
                                <div id="ember90625" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1476-9948.png"
                                            alt="Cover of Black Theology" title="Black Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Black Theology" class="bookshelf-journal-title">Black Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90627" class="ember-view"><a href="/libraries/603/journals/47256?sort=title"
                                id="ember90628" class="bookshelf-journal ember-view">
                                <div id="ember90629" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1384-6663.png"
                                            alt="Cover of Bochumer Philosophisches Jahrbuch für Antike und Mittelalter"
                                            title="Bochumer Philosophisches Jahrbuch für Antike und Mittelalter">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bochumer Philosophisches Jahrbuch für Antike und Mittelalter"
                                    class="bookshelf-journal-title">Bochumer Philosophisches Jahrbuch für Antike und
                                    Mittelalter</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90631" class="ember-view"><a href="/libraries/603/journals/17093?sort=title"
                                id="ember90632" class="bookshelf-journal ember-view">
                                <div id="ember90633" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0960-8788.png"
                                            alt="Cover of British Journal for the History of Philosophy"
                                            title="British Journal for the History of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="British Journal for the History of Philosophy"
                                    class="bookshelf-journal-title">British Journal for the History of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90635" class="ember-view"><a href="/libraries/603/journals/10389?sort=title"
                                id="ember90636" class="bookshelf-journal ember-view">
                                <div id="ember90637" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0007-0882-97beb2fd-d299-4cf6-ae63-adfbf016d946.png"
                                            alt="Cover of British Journal for the Philosophy of Science"
                                            title="British Journal for the Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="British Journal for the Philosophy of Science"
                                    class="bookshelf-journal-title">British Journal for the Philosophy of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90639" class="ember-view"><a href="/libraries/603/journals/39762?sort=title"
                                id="ember90640" class="bookshelf-journal ember-view">
                                <div id="ember90641" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0265-2897.png"
                                            alt="Cover of Buddhist Studies Review" title="Buddhist Studies Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Buddhist Studies Review" class="bookshelf-journal-title">Buddhist Studies
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90643" class="ember-view"><a href="/libraries/603/journals/10770?sort=title"
                                id="ember90644" class="bookshelf-journal ember-view">
                                <div id="ember90645" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0882-0945.png"
                                            alt="Cover of Buddhist-Christian Studies"
                                            title="Buddhist-Christian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Buddhist-Christian Studies" class="bookshelf-journal-title">
                                    Buddhist-Christian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90647" class="ember-view"><a href="/libraries/603/journals/40223?sort=title"
                                id="ember90648" class="bookshelf-journal ember-view">
                                <div id="ember90649" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0068-4023.png"
                                            alt="Cover of Bulletin de Philosophie Médiévale"
                                            title="Bulletin de Philosophie Médiévale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin de Philosophie Médiévale" class="bookshelf-journal-title">Bulletin
                                    de Philosophie Médiévale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90651" class="ember-view"><a href="/libraries/603/journals/347562?sort=title"
                                id="ember90652" class="bookshelf-journal ember-view">
                                <div id="ember90653" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2728-3313.png"
                                            alt="Cover of Bulletin d’Histoire et d’Épistémologie des Sciences de la Vie"
                                            title="Bulletin d’Histoire et d’Épistémologie des Sciences de la Vie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin d’Histoire et d’Épistémologie des Sciences de la Vie"
                                    class="bookshelf-journal-title">Bulletin d’Histoire et d’Épistémologie des Sciences
                                    de la Vie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90655" class="ember-view"><a href="/libraries/603/journals/48646?sort=title"
                                id="ember90656" class="bookshelf-journal ember-view">
                                <div id="ember90657" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2576-0998-83634f27-3db5-4088-a4e5-7f62f5513b15.png"
                                            alt="Cover of Bulletin for Biblical Research"
                                            title="Bulletin for Biblical Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin for Biblical Research" class="bookshelf-journal-title">Bulletin for
                                    Biblical Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90659" class="ember-view"><a href="/libraries/603/journals/39773?sort=title"
                                id="ember90660" class="bookshelf-journal ember-view">
                                <div id="ember90661" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2041-1863.png"
                                            alt="Cover of Bulletin for the Study of Religion"
                                            title="Bulletin for the Study of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin for the Study of Religion" class="bookshelf-journal-title">Bulletin
                                    for the Study of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90663" class="ember-view"><a href="/libraries/603/journals/48763?sort=title"
                                id="ember90664" class="bookshelf-journal ember-view">
                                <div id="ember90665" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0146-2989.png"
                                            alt="Cover of Bulletin of Medieval Canon Law"
                                            title="Bulletin of Medieval Canon Law">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin of Medieval Canon Law" class="bookshelf-journal-title">Bulletin of
                                    Medieval Canon Law</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90666" class="ember-view"><a href="/libraries/603/journals/48778?sort=title"
                                id="ember90667" class="bookshelf-journal ember-view">
                                <div id="ember90668" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1079-8986.png"
                                            alt="Cover of bulletin of symbolic logic"
                                            title="bulletin of symbolic logic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="bulletin of symbolic logic" class="bookshelf-journal-title">bulletin of
                                    symbolic logic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90669" class="ember-view"><a href="/libraries/603/journals/143963?sort=title"
                                id="ember90670" class="bookshelf-journal ember-view">
                                <div id="ember90671" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0138-0680-2587b931-fe3c-4e64-bf44-d92ffa34861e.png"
                                            alt="Cover of Bulletin of the Section of Logic"
                                            title="Bulletin of the Section of Logic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Bulletin of the Section of Logic" class="bookshelf-journal-title">Bulletin
                                    of the Section of Logic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90673" class="ember-view"><a href="/libraries/603/journals/33491?sort=title"
                                id="ember90674" class="bookshelf-journal ember-view">
                                <div id="ember90675" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0277-2027.png"
                                            alt="Cover of Business and Professional Ethics Journal"
                                            title="Business and Professional Ethics Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Business and Professional Ethics Journal" class="bookshelf-journal-title">
                                    Business and Professional Ethics Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90677" class="ember-view"><a href="/libraries/603/journals/33487?sort=title"
                                id="ember90678" class="bookshelf-journal ember-view">
                                <div id="ember90679" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1052-150X.png"
                                            alt="Cover of Business Ethics Quarterly" title="Business Ethics Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Business Ethics Quarterly" class="bookshelf-journal-title">Business Ethics
                                    Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90681" class="ember-view"><a href="/libraries/603/journals/431939?sort=title"
                                id="ember90682" class="bookshelf-journal ember-view">
                                <div id="ember90683" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2694-6416-cbc82ddb-d069-4a6b-973c-5e325c427543.png"
                                            alt="Cover of Business Ethics, the Environment And Responsibility"
                                            title="Business Ethics, the Environment And Responsibility">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Business Ethics, the Environment And Responsibility"
                                    class="bookshelf-journal-title">Business Ethics, the Environment And Responsibility
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90684" class="ember-view"><a href="/libraries/603/journals/263428?sort=title"
                                id="ember90685" class="bookshelf-journal ember-view">
                                <div id="ember90686" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1413-6651-1df9bb23-901a-4e37-8b4f-62e117933df1.png"
                                            alt="Cover of Cadernos Espinosanos" title="Cadernos Espinosanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cadernos Espinosanos" class="bookshelf-journal-title">Cadernos Espinosanos
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90688" class="ember-view"><a href="/libraries/603/journals/49357?sort=title"
                                id="ember90689" class="bookshelf-journal ember-view">
                                <div id="ember90690" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2316-8242-a1bdefc7-d322-4cca-a152-70f2d254d988.png"
                                            alt="Cover of Cadernos Nietzsche" title="Cadernos Nietzsche">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cadernos Nietzsche" class="bookshelf-journal-title">Cadernos Nietzsche</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90691" class="ember-view"><a href="/libraries/603/journals/49392?sort=title"
                                id="ember90692" class="bookshelf-journal ember-view">
                                <div id="ember90693" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0007-9731.png"
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
                        <div id="ember90695" class="ember-view"><a href="/libraries/603/journals/49437?sort=title"
                                id="ember90696" class="bookshelf-journal ember-view">
                                <div id="ember90697" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1760-5776.png"
                                            alt="Cover of Cahiers d'Études du Religieux"
                                            title="Cahiers d'Études du Religieux">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers d'Études du Religieux" class="bookshelf-journal-title">Cahiers
                                    d'Études du Religieux</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90699" class="ember-view"><a href="/libraries/603/journals/36223?sort=title"
                                id="ember90700" class="bookshelf-journal ember-view">
                                <div id="ember90701" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0241-2799.png"
                                            alt="Cover of Cahiers philosophiques" title="Cahiers philosophiques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cahiers philosophiques" class="bookshelf-journal-title">Cahiers
                                    philosophiques</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90703" class="ember-view"><a href="/libraries/603/journals/336013?sort=title"
                                id="ember90704" class="bookshelf-journal ember-view">
                                <div id="ember90705" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2561-4665.png"
                                            alt="Cover of Canadian Journal of Bioethics / Revue Canadienne de Bioéthique"
                                            title="Canadian Journal of Bioethics / Revue Canadienne de Bioéthique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian Journal of Bioethics / Revue Canadienne de Bioéthique"
                                    class="bookshelf-journal-title">Canadian Journal of Bioethics / Revue Canadienne de
                                    Bioéthique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90707" class="ember-view"><a href="/libraries/603/journals/10862?sort=title"
                                id="ember90708" class="bookshelf-journal ember-view">
                                <div id="ember90709" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0045-5091.png"
                                            alt="Cover of Canadian Journal of Philosophy"
                                            title="Canadian Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Canadian Journal of Philosophy" class="bookshelf-journal-title">Canadian
                                    Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90711" class="ember-view"><a href="/libraries/603/journals/50273?sort=title"
                                id="ember90712" class="bookshelf-journal ember-view">
                                <div id="ember90713" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0008-7912-d89a8452-884d-4fe2-a460-d9358488b20a.png"
                                            alt="Cover of Catholic Biblical Quarterly"
                                            title="Catholic Biblical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Catholic Biblical Quarterly" class="bookshelf-journal-title">Catholic
                                    Biblical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90715" class="ember-view"><a href="/libraries/603/journals/10713?sort=title"
                                id="ember90716" class="bookshelf-journal ember-view">
                                <div id="ember90717" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1534-0708.png"
                                            alt="Cover of The Catholic Historical Review"
                                            title="The Catholic Historical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Catholic Historical Review" class="bookshelf-journal-title">The Catholic
                                    Historical Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90719" class="ember-view"><a href="/libraries/603/journals/148510?sort=title"
                                id="ember90720" class="bookshelf-journal ember-view">
                                <div id="ember90721" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2318-8561-c47f1df4-5f49-47a4-be41-4c025f661903.png"
                                            alt="Cover of Cenário : Revista Interdisciplinar em Turismo e Território"
                                            title="Cenário : Revista Interdisciplinar em Turismo e Território">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cenário : Revista Interdisciplinar em Turismo e Território"
                                    class="bookshelf-journal-title">Cenário : Revista Interdisciplinar em Turismo e
                                    Território</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90723" class="ember-view"><a href="/libraries/603/journals/123613?sort=title"
                                id="ember90724" class="bookshelf-journal ember-view">
                                <div id="ember90725" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1984-5987-9dfea74f-a7f8-4780-9a0e-fbfa415cdfb1.png"
                                            alt="Cover of Childhood &amp; Philosophy"
                                            title="Childhood &amp; Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Childhood &amp; Philosophy" class="bookshelf-journal-title">Childhood &amp;
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90727" class="ember-view"><a href="/libraries/603/journals/477634?sort=title"
                                id="ember90728" class="bookshelf-journal ember-view">
                                <div id="ember90729" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2768-3532-d5a77abf-444a-411a-a734-698875e04316.png"
                                            alt="Cover of Chinese Literature and Thought Today"
                                            title="Chinese Literature and Thought Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Chinese Literature and Thought Today" class="bookshelf-journal-title">
                                    Chinese Literature and Thought Today</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90731" class="ember-view"><a href="/libraries/603/journals/10301?sort=title"
                                id="ember90732" class="bookshelf-journal ember-view">
                                <div id="ember90733" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1380-3603.png"
                                            alt="Cover of Christian Bioethics" title="Christian Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Christian Bioethics" class="bookshelf-journal-title">Christian Bioethics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90735" class="ember-view"><a href="/libraries/603/journals/50955?sort=title"
                                id="ember90736" class="bookshelf-journal ember-view">
                                <div id="ember90737" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0739-8913.png"
                                            alt="Cover of Christian Education Journal"
                                            title="Christian Education Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Christian Education Journal" class="bookshelf-journal-title">Christian
                                    Education Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90739" class="ember-view"><a href="/libraries/603/journals/51020?sort=title"
                                id="ember90740" class="bookshelf-journal ember-view">
                                <div id="ember90741" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0148-3331.png"
                                            alt="Cover of Christianity &amp; Literature"
                                            title="Christianity &amp; Literature">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Christianity &amp; Literature" class="bookshelf-journal-title">Christianity
                                    &amp; Literature</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90743" class="ember-view"><a href="/libraries/603/journals/171012?sort=title"
                                id="ember90744" class="bookshelf-journal ember-view">
                                <div id="ember90745" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2375-3234.png"
                                            alt="Cover of Church, Communication and Culture"
                                            title="Church, Communication and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Church, Communication and Culture" class="bookshelf-journal-title">Church,
                                    Communication and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90746" class="ember-view"><a href="/libraries/603/journals/19431?sort=title"
                                id="ember90747" class="bookshelf-journal ember-view">
                                <div id="ember90748" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0009-6407.png"
                                            alt="Cover of Church History" title="Church History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Church History" class="bookshelf-journal-title">Church History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90749" class="ember-view"><a href="/libraries/603/journals/9904?sort=title"
                                id="ember90750" class="bookshelf-journal ember-view">
                                <div id="ember90751" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1871-241X.png"
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
                        <div id="ember90753" class="ember-view"><a href="/libraries/603/journals/51221?sort=title"
                                id="ember90754" class="bookshelf-journal ember-view">
                                <div id="ember90755" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0717-554X-31117ce8-52f1-47d1-8a9c-2cd4f2d2563e.png"
                                            alt="Cover of Cinta de Moebio" title="Cinta de Moebio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cinta de Moebio" class="bookshelf-journal-title">Cinta de Moebio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90757" class="ember-view"><a href="/libraries/603/journals/36100?sort=title"
                                id="ember90758" class="bookshelf-journal ember-view">
                                <div id="ember90759" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1969-6876.png"
                                            alt="Cover of Cités" title="Cités">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cités" class="bookshelf-journal-title">Cités</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90761" class="ember-view"><a href="/libraries/603/journals/391572?sort=title"
                                id="ember90762" class="bookshelf-journal ember-view">
                                <div id="ember90763" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/26379155.png"
                                            alt="Cover of Civic Sociology" title="Civic Sociology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Civic Sociology" class="bookshelf-journal-title">Civic Sociology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90764" class="ember-view"><a href="/libraries/603/journals/406898?sort=title"
                                id="ember90765" class="bookshelf-journal ember-view">
                                <div id="ember90766" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2619-189X-ceefcca9-a2fe-41b3-b6dd-95a3a887f5d4.png"
                                            alt="Cover of Civilizar : Ciencias Sociales y Humanas"
                                            title="Civilizar : Ciencias Sociales y Humanas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Civilizar : Ciencias Sociales y Humanas" class="bookshelf-journal-title">
                                    Civilizar : Ciencias Sociales y Humanas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90768" class="ember-view"><a href="/libraries/603/journals/51339?sort=title"
                                id="ember90769" class="bookshelf-journal ember-view">
                                <div id="ember90770" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1889-6855.png"
                                            alt="Cover of Claridades : Revista de Filosofía"
                                            title="Claridades : Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Claridades : Revista de Filosofía" class="bookshelf-journal-title">
                                    Claridades : Revista de Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90772" class="ember-view"><a href="/libraries/603/journals/100249?sort=title"
                                id="ember90773" class="bookshelf-journal ember-view">
                                <div id="ember90774" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2029-6320.png"
                                            alt="Cover of Coactivity: Philosophy, Communication"
                                            title="Coactivity: Philosophy, Communication">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Coactivity: Philosophy, Communication" class="bookshelf-journal-title">
                                    Coactivity: Philosophy, Communication</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90775" class="ember-view"><a href="/libraries/603/journals/51559?sort=title"
                                id="ember90776" class="bookshelf-journal ember-view">
                                <div id="ember90777" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1794-5887-4492600e-acc0-4246-aa73-da6417753053.png"
                                            alt="Cover of Co-herencia" title="Co-herencia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Co-herencia" class="bookshelf-journal-title">Co-herencia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90779" class="ember-view"><a href="/libraries/603/journals/106814?sort=title"
                                id="ember90780" class="bookshelf-journal ember-view">
                                <div id="ember90781" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0338-781X.png"
                                            alt="Cover of Communio" title="Communio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Communio" class="bookshelf-journal-title">Communio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90783" class="ember-view"><a href="/libraries/603/journals/36435?sort=title"
                                id="ember90784" class="bookshelf-journal ember-view">
                                <div id="ember90785" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1757-0638.png"
                                            alt="Cover of Comparative and Continental Philosophy"
                                            title="Comparative and Continental Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Comparative and Continental Philosophy" class="bookshelf-journal-title">
                                    Comparative and Continental Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90787" class="ember-view"><a href="/libraries/603/journals/39756?sort=title"
                                id="ember90788" class="bookshelf-journal ember-view">
                                <div id="ember90789" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1740-7125.png"
                                            alt="Cover of Comparative Islamic Studies"
                                            title="Comparative Islamic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Comparative Islamic Studies" class="bookshelf-journal-title">Comparative
                                    Islamic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90791" class="ember-view"><a href="/libraries/603/journals/52439?sort=title"
                                id="ember90792" class="bookshelf-journal ember-view">
                                <div id="ember90793" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2001-4562.png"
                                            alt="Cover of Confero: Essays on Education, Philosophy and Politics"
                                            title="Confero: Essays on Education, Philosophy and Politics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Confero: Essays on Education, Philosophy and Politics"
                                    class="bookshelf-journal-title">Confero: Essays on Education, Philosophy and
                                    Politics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90795" class="ember-view"><a href="/libraries/603/journals/52553?sort=title"
                                id="ember90796" class="bookshelf-journal ember-view">
                                <div id="ember90797" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1996-8167-3cc06554-c3b7-472b-abb7-bc4cdb4e9075.png"
                                            alt="Cover of Conspectus : The Journal of the South African Theological Seminary"
                                            title="Conspectus : The Journal of the South African Theological Seminary">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Conspectus : The Journal of the South African Theological Seminary"
                                    class="bookshelf-journal-title">Conspectus : The Journal of the South African
                                    Theological Seminary</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90799" class="ember-view"><a href="/libraries/603/journals/10908?sort=title"
                                id="ember90800" class="bookshelf-journal ember-view">
                                <div id="ember90801" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1075-7201.png"
                                            alt="Cover of Contagion: Journal of Violence, Mimesis, and Culture"
                                            title="Contagion: Journal of Violence, Mimesis, and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contagion: Journal of Violence, Mimesis, and Culture"
                                    class="bookshelf-journal-title">Contagion: Journal of Violence, Mimesis, and Culture
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90804" class="ember-view"><a href="/libraries/603/journals/16447?sort=title"
                                id="ember90805" class="bookshelf-journal ember-view">
                                <div id="ember90806" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1463-9947.png"
                                            alt="Cover of Contemporary Buddhism" title="Contemporary Buddhism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contemporary Buddhism" class="bookshelf-journal-title">Contemporary Buddhism
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90808" class="ember-view"><a href="/libraries/603/journals/4028?sort=title"
                                id="ember90809" class="bookshelf-journal ember-view">
                                <div id="ember90810" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1872-0218.png"
                                            alt="Cover of Contemporary Islam" title="Contemporary Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contemporary Islam" class="bookshelf-journal-title">Contemporary Islam</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90812" class="ember-view"><a href="/libraries/603/journals/1639?sort=title"
                                id="ember90813" class="bookshelf-journal ember-view">
                                <div id="ember90814" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0147-1694.png"
                                            alt="Cover of Contemporary Jewry" title="Contemporary Jewry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Contemporary Jewry" class="bookshelf-journal-title">Contemporary Jewry</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90816" class="ember-view"><a href="/libraries/603/journals/2720?sort=title"
                                id="ember90817" class="bookshelf-journal ember-view">
                                <div id="ember90818" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1387-2842.png"
                                            alt="Cover of Continental Philosophy Review"
                                            title="Continental Philosophy Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Continental Philosophy Review" class="bookshelf-journal-title">Continental
                                    Philosophy Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90820" class="ember-view"><a href="/libraries/603/journals/6645?sort=title"
                                id="ember90821" class="bookshelf-journal ember-view">
                                <div id="ember90822" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1479-2214.png"
                                            alt="Cover of Conversations in Religion &amp; Theology"
                                            title="Conversations in Religion &amp; Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Conversations in Religion &amp; Theology" class="bookshelf-journal-title">
                                    Conversations in Religion &amp; Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90824" class="ember-view"><a href="/libraries/603/journals/53708?sort=title"
                                id="ember90825" class="bookshelf-journal ember-view">
                                <div id="ember90826" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0011-1503.png"
                                            alt="Cover of Critica: Revista Hispanoamericana de Filosofia"
                                            title="Critica: Revista Hispanoamericana de Filosofia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critica: Revista Hispanoamericana de Filosofia"
                                    class="bookshelf-journal-title">Critica: Revista Hispanoamericana de Filosofia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90828" class="ember-view"><a href="/libraries/603/journals/36329?sort=title"
                                id="ember90829" class="bookshelf-journal ember-view">
                                <div id="ember90830" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1440-9917.png"
                                            alt="Cover of Critical Horizons: A Journal of Philosophy &amp; Social Theory"
                                            title="Critical Horizons: A Journal of Philosophy &amp; Social Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critical Horizons: A Journal of Philosophy &amp; Social Theory"
                                    class="bookshelf-journal-title">Critical Horizons: A Journal of Philosophy &amp;
                                    Social Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90832" class="ember-view"><a href="/libraries/603/journals/33425?sort=title"
                                id="ember90833" class="bookshelf-journal ember-view">
                                <div id="ember90834" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2165-8684.png"
                                            alt="Cover of Critical Philosophy of Race"
                                            title="Critical Philosophy of Race">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critical Philosophy of Race" class="bookshelf-journal-title">Critical
                                    Philosophy of Race</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90836" class="ember-view"><a href="/libraries/603/journals/53730?sort=title"
                                id="ember90837" class="bookshelf-journal ember-view">
                                <div id="ember90838" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2050-3032.png"
                                            alt="Cover of Critical Research on Religion"
                                            title="Critical Research on Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critical Research on Religion" class="bookshelf-journal-title">Critical
                                    Research on Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90840" class="ember-view"><a href="/libraries/603/journals/16554?sort=title"
                                id="ember90841" class="bookshelf-journal ember-view">
                                <div id="ember90842" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1369-8230.png"
                                            alt="Cover of Critical Review of International Social and Political Philosophy"
                                            title="Critical Review of International Social and Political Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Critical Review of International Social and Political Philosophy"
                                    class="bookshelf-journal-title">Critical Review of International Social and
                                    Political Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90844" class="ember-view"><a href="/libraries/603/journals/1770?sort=title"
                                id="ember90845" class="bookshelf-journal ember-view">
                                <div id="ember90846" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0011-1953.png"
                                            alt="Cover of CrossCurrents" title="CrossCurrents">
                                        <!---->
                                    </div>
                                </div>
                                <div title="CrossCurrents" class="bookshelf-journal-title">CrossCurrents</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90848" class="ember-view"><a href="/libraries/603/journals/53928?sort=title"
                                id="ember90849" class="bookshelf-journal ember-view">
                                <div id="ember90850" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2389-9980-8a62ec0b-1306-4123-9665-132b8d7e8f64.png"
                                            alt="Cover of Cuestiones Teológicas" title="Cuestiones Teológicas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cuestiones Teológicas" class="bookshelf-journal-title">Cuestiones Teológicas
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90852" class="ember-view"><a href="/libraries/603/journals/53966?sort=title"
                                id="ember90853" class="bookshelf-journal ember-view">
                                <div id="ember90854" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1550-4891.png"
                                            alt="Cover of Cultural Encounters" title="Cultural Encounters">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cultural Encounters" class="bookshelf-journal-title">Cultural Encounters
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90856" class="ember-view"><a href="/libraries/603/journals/231470?sort=title"
                                id="ember90857" class="bookshelf-journal ember-view">
                                <div id="ember90858" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2468-3949-1fd71b56-f453-4dbc-8d88-5835e63e1ea9.png"
                                            alt="Cover of Culture and Dialogue" title="Culture and Dialogue">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Culture and Dialogue" class="bookshelf-journal-title">Culture and Dialogue
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90860" class="ember-view"><a href="/libraries/603/journals/16401?sort=title"
                                id="ember90861" class="bookshelf-journal ember-view">
                                <div id="ember90862" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1475-5610.png"
                                            alt="Cover of Culture and Religion" title="Culture and Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Culture and Religion" class="bookshelf-journal-title">Culture and Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90863" class="ember-view"><a href="/libraries/603/journals/394130?sort=title"
                                id="ember90864" class="bookshelf-journal ember-view">
                                <div id="ember90865" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/26333287.png"
                                            alt="Cover of Cultures of Science" title="Cultures of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cultures of Science" class="bookshelf-journal-title">Cultures of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90867" class="ember-view"><a href="/libraries/603/journals/40743?sort=title"
                                id="ember90868" class="bookshelf-journal ember-view">
                                <div id="ember90869" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2528-9861.png"
                                            alt="Cover of Cumhuriyet Ilahiyat Dergisi"
                                            title="Cumhuriyet Ilahiyat Dergisi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Cumhuriyet Ilahiyat Dergisi" class="bookshelf-journal-title">Cumhuriyet
                                    Ilahiyat Dergisi</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90871" class="ember-view"><a href="/libraries/603/journals/4500?sort=title"
                                id="ember90872" class="bookshelf-journal ember-view">
                                <div id="ember90873" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1476-993X.png"
                                            alt="Cover of Currents in Biblical Research"
                                            title="Currents in Biblical Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Currents in Biblical Research" class="bookshelf-journal-title">Currents in
                                    Biblical Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90874" class="ember-view"><a href="/libraries/603/journals/32163?sort=title"
                                id="ember90875" class="bookshelf-journal ember-view">
                                <div id="ember90876" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0011-5266.png"
                                            alt="Cover of Daedalus" title="Daedalus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Daedalus" class="bookshelf-journal-title">Daedalus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90878" class="ember-view"><a href="/libraries/603/journals/3954?sort=title"
                                id="ember90879" class="bookshelf-journal ember-view">
                                <div id="ember90880" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1540-3009.png"
                                            alt="Cover of Dao" title="Dao">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dao" class="bookshelf-journal-title">Dao</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90882" class="ember-view"><a href="/libraries/603/journals/9870?sort=title"
                                id="ember90883" class="bookshelf-journal ember-view">
                                <div id="ember90884" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0929-0761.png"
                                            alt="Cover of Dead Sea Discoveries" title="Dead Sea Discoveries">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dead Sea Discoveries" class="bookshelf-journal-title">Dead Sea Discoveries
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90886" class="ember-view"><a href="/libraries/603/journals/54611?sort=title"
                                id="ember90887" class="bookshelf-journal ember-view">
                                <div id="ember90888" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1519-843X.png"
                                            alt="Cover of Debates do NER" title="Debates do NER">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Debates do NER" class="bookshelf-journal-title">Debates do NER</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90890" class="ember-view"><a href="/libraries/603/journals/326008?sort=title"
                                id="ember90891" class="bookshelf-journal ember-view">
                                <div id="ember90892" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2398-9777.png"
                                            alt="Cover of Deleuze &amp; Guattari Studies"
                                            title="Deleuze &amp; Guattari Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Deleuze &amp; Guattari Studies" class="bookshelf-journal-title">Deleuze
                                    &amp; Guattari Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90894" class="ember-view"><a href="/libraries/603/journals/39902?sort=title"
                                id="ember90895" class="bookshelf-journal ember-view">
                                <div id="ember90896" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2332-8894.png"
                                            alt="Cover of Democratic Theory" title="Democratic Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Democratic Theory" class="bookshelf-journal-title">Democratic Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90898" class="ember-view"><a href="/libraries/603/journals/38819?sort=title"
                                id="ember90899" class="bookshelf-journal ember-view">
                                <div id="ember90900" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1754-8500.png"
                                            alt="Cover of Derrida Today" title="Derrida Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Derrida Today" class="bookshelf-journal-title">Derrida Today</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90902" class="ember-view"><a href="/libraries/603/journals/11085?sort=title"
                                id="ember90903" class="bookshelf-journal ember-view">
                                <div id="ember90904" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1471-8731.png"
                                            alt="Cover of Developing World Bioethics"
                                            title="Developing World Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Developing World Bioethics" class="bookshelf-journal-title">Developing World
                                    Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90906" class="ember-view"><a href="/libraries/603/journals/168858?sort=title"
                                id="ember90907" class="bookshelf-journal ember-view">
                                <div id="ember90908" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1869-3261-f6b3c3be-3880-4393-8164-758ea1994508.png"
                                            alt="Cover of Diaconia" title="Diaconia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diaconia" class="bookshelf-journal-title">Diaconia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90910" class="ember-view"><a href="/libraries/603/journals/5957?sort=title"
                                id="ember90911" class="bookshelf-journal ember-view">
                                <div id="ember90912" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0012-2017.png"
                                            alt="Cover of Dialectica" title="Dialectica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialectica" class="bookshelf-journal-title">Dialectica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90914" class="ember-view"><a href="/libraries/603/journals/4468?sort=title"
                                id="ember90915" class="bookshelf-journal ember-view">
                                <div id="ember90916" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0304-4092.png"
                                            alt="Cover of Dialectical Anthropology" title="Dialectical Anthropology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialectical Anthropology" class="bookshelf-journal-title">Dialectical
                                    Anthropology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90918" class="ember-view"><a href="/libraries/603/journals/3920?sort=title"
                                id="ember90919" class="bookshelf-journal ember-view">
                                <div id="ember90920" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0012-2033.png"
                                            alt="Cover of Dialog" title="Dialog">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialog" class="bookshelf-journal-title">Dialog</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90922" class="ember-view"><a href="/libraries/603/journals/20071?sort=title"
                                id="ember90923" class="bookshelf-journal ember-view">
                                <div id="ember90924" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0012-2173.png"
                                            alt="Cover of Dialogue" title="Dialogue">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialogue" class="bookshelf-journal-title">Dialogue</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90926" class="ember-view"><a href="/libraries/603/journals/55066?sort=title"
                                id="ember90927" class="bookshelf-journal ember-view">
                                <div id="ember90928" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0012-2157.png"
                                            alt="Cover of Dialogue : A Journal of Mormon Thought"
                                            title="Dialogue : A Journal of Mormon Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dialogue : A Journal of Mormon Thought" class="bookshelf-journal-title">
                                    Dialogue : A Journal of Mormon Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90930" class="ember-view"><a href="/libraries/603/journals/55077?sort=title"
                                id="ember90931" class="bookshelf-journal ember-view">
                                <div id="ember90932" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0185-2450-9acf037c-d633-4a69-a97c-9bb2d4d3b0d4.png"
                                            alt="Cover of Diánoia" title="Diánoia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diánoia" class="bookshelf-journal-title">Diánoia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90934" class="ember-view"><a href="/libraries/603/journals/290194?sort=title"
                                id="ember90935" class="bookshelf-journal ember-view">
                                <div id="ember90936" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1301-966X.png"
                                            alt="Cover of Dini Araştırmalar" title="Dini Araştırmalar">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dini Araştırmalar" class="bookshelf-journal-title">Dini Araştırmalar</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90938" class="ember-view"><a href="/libraries/603/journals/2995?sort=title"
                                id="ember90939" class="bookshelf-journal ember-view">
                                <div id="ember90940" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0392-1921.png"
                                            alt="Cover of Diogenes" title="Diogenes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Diogenes" class="bookshelf-journal-title">Diogenes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90942" class="ember-view"><a href="/libraries/603/journals/374231?sort=title"
                                id="ember90943" class="bookshelf-journal ember-view">
                                <div id="ember90944" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2618-2858-00fd0fe4-5701-4acc-9a7f-59b9769d8cb7.png"
                                            alt="Cover of Dios y el Hombre" title="Dios y el Hombre">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dios y el Hombre" class="bookshelf-journal-title">Dios y el Hombre</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90946" class="ember-view"><a href="/libraries/603/journals/55488?sort=title"
                                id="ember90947" class="bookshelf-journal ember-view">
                                <div id="ember90948" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1302-3284.png"
                                            alt="Cover of Dokuz Eylul University Journal of Graduate School of Social Sciences"
                                            title="Dokuz Eylul University Journal of Graduate School of Social Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Dokuz Eylul University Journal of Graduate School of Social Sciences"
                                    class="bookshelf-journal-title">Dokuz Eylul University Journal of Graduate School of
                                    Social Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90950" class="ember-view"><a href="/libraries/603/journals/178795?sort=title"
                                id="ember90951" class="bookshelf-journal ember-view">
                                <div id="ember90952" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0012-5806.png"
                                            alt="Cover of Downside Review" title="Downside Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Downside Review" class="bookshelf-journal-title">Downside Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90954" class="ember-view"><a href="/libraries/603/journals/38925?sort=title"
                                id="ember90955" class="bookshelf-journal ember-view">
                                <div id="ember90956" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1868-7032.png"
                                            alt="Cover of Early Christianity" title="Early Christianity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Early Christianity" class="bookshelf-journal-title">Early Christianity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90958" class="ember-view"><a href="/libraries/603/journals/37438?sort=title"
                                id="ember90959" class="bookshelf-journal ember-view">
                                <div id="ember90960" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2214-4463.png"
                                            alt="Cover of Ecclesial Practices" title="Ecclesial Practices">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ecclesial Practices" class="bookshelf-journal-title">Ecclesial Practices
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90961" class="ember-view"><a href="/libraries/603/journals/19692?sort=title"
                                id="ember90962" class="bookshelf-journal ember-view">
                                <div id="ember90963" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0956-618X.png"
                                            alt="Cover of Ecclesiastical Law Journal"
                                            title="Ecclesiastical Law Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ecclesiastical Law Journal" class="bookshelf-journal-title">Ecclesiastical
                                    Law Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90965" class="ember-view"><a href="/libraries/603/journals/9844?sort=title"
                                id="ember90966" class="bookshelf-journal ember-view">
                                <div id="ember90967" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1744-1366.png"
                                            alt="Cover of Ecclesiology" title="Ecclesiology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ecclesiology" class="bookshelf-journal-title">Ecclesiology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90969" class="ember-view"><a href="/libraries/603/journals/19032?sort=title"
                                id="ember90970" class="bookshelf-journal ember-view">
                                <div id="ember90971" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0266-2671.png"
                                            alt="Cover of Economics and Philosophy" title="Economics and Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Economics and Philosophy" class="bookshelf-journal-title">Economics and
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90973" class="ember-view"><a href="/libraries/603/journals/56226?sort=title"
                                id="ember90974" class="bookshelf-journal ember-view">
                                <div id="ember90975" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1942-4558-a85ed516-d482-4074-9c7c-a184931a083b.png"
                                            alt="Cover of Ecumenica : Performance and Religion"
                                            title="Ecumenica : Performance and Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ecumenica : Performance and Religion" class="bookshelf-journal-title">
                                    Ecumenica : Performance and Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90977" class="ember-view"><a href="/libraries/603/journals/2133?sort=title"
                                id="ember90978" class="bookshelf-journal ember-view">
                                <div id="ember90979" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0013-0796.png"
                                            alt="Cover of The Ecumenical Review" title="The Ecumenical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Ecumenical Review" class="bookshelf-journal-title">The Ecumenical Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90981" class="ember-view"><a href="/libraries/603/journals/171671?sort=title"
                                id="ember90982" class="bookshelf-journal ember-view">
                                <div id="ember90983" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/20377177-62ac4f09-9961-483f-a3de-561da0c92ffe.png"
                                            alt="Cover of Elenchos : Journal of Studies on Ancient Thought"
                                            title="Elenchos : Journal of Studies on Ancient Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Elenchos : Journal of Studies on Ancient Thought"
                                    class="bookshelf-journal-title">Elenchos : Journal of Studies on Ancient Thought
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90984" class="ember-view"><a href="/libraries/603/journals/336414?sort=title"
                                id="ember90985" class="bookshelf-journal ember-view">
                                <div id="ember90986" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2560-8371.png"
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
                        <div id="ember90987" class="ember-view"><a href="/libraries/603/journals/7548?sort=title"
                                id="ember90988" class="bookshelf-journal ember-view">
                                <div id="ember90989" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0160-9327.png"
                                            alt="Cover of Endeavour" title="Endeavour">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Endeavour" class="bookshelf-journal-title">Endeavour</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90991" class="ember-view"><a href="/libraries/603/journals/147034?sort=title"
                                id="ember90992" class="bookshelf-journal ember-view">
                                <div id="ember90993" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2014-881X-48b7ea00-2af8-42d0-adbc-cea6e0c719ec.png"
                                            alt="Cover of Enrahonar : An International Journal of Theoretical and Practical Reason"
                                            title="Enrahonar : An International Journal of Theoretical and Practical Reason">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Enrahonar : An International Journal of Theoretical and Practical Reason"
                                    class="bookshelf-journal-title">Enrahonar : An International Journal of Theoretical
                                    and Practical Reason</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90995" class="ember-view"><a href="/libraries/603/journals/19745?sort=title"
                                id="ember90996" class="bookshelf-journal ember-view">
                                <div id="ember90997" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1742-3600.png"
                                            alt="Cover of Episteme" title="Episteme">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Episteme" class="bookshelf-journal-title">Episteme</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember90999" class="ember-view"><a href="/libraries/603/journals/57272?sort=title"
                                id="ember91000" class="bookshelf-journal ember-view">
                                <div id="ember91001" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2330-4014.png"
                                            alt="Cover of Ergo : An Open Access Journal of Philosophy"
                                            title="Ergo : An Open Access Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ergo : An Open Access Journal of Philosophy"
                                    class="bookshelf-journal-title">Ergo : An Open Access Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91003" class="ember-view"><a href="/libraries/603/journals/6270?sort=title"
                                id="ember91004" class="bookshelf-journal ember-view">
                                <div id="ember91005" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0165-0106.png"
                                            alt="Cover of Erkenntnis" title="Erkenntnis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Erkenntnis" class="bookshelf-journal-title">Erkenntnis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91007" class="ember-view"><a href="/libraries/603/journals/57301?sort=title"
                                id="ember91008" class="bookshelf-journal ember-view">
                                <div id="ember91009" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-1263-f21a4463-855e-4850-bd29-902e045e0690.png"
                                            alt="Cover of Escritos" title="Escritos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Escritos" class="bookshelf-journal-title">Escritos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91011" class="ember-view"><a href="/libraries/603/journals/57454?sort=title"
                                id="ember91012" class="bookshelf-journal ember-view">
                                <div id="ember91013" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0121-3628-671e3814-9c60-441d-afee-4e13f3741124.png"
                                            alt="Cover of Estudios de Filosofía" title="Estudios de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudios de Filosofía" class="bookshelf-journal-title">Estudios de
                                    Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91014" class="ember-view"><a href="/libraries/603/journals/57506?sort=title"
                                id="ember91015" class="bookshelf-journal ember-view">
                                <div id="ember91016" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0101-4064.png"
                                            alt="Cover of Estudos Ibero-Americanos" title="Estudos Ibero-Americanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Estudos Ibero-Americanos" class="bookshelf-journal-title">Estudos
                                    Ibero-Americanos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91018" class="ember-view"><a href="/libraries/603/journals/57518?sort=title"
                                id="ember91019" class="bookshelf-journal ember-view">
                                <div id="ember91020" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1677-2954.png"
                                            alt="Cover of Ethic@: An International Journal for Moral Philosophy"
                                            title="Ethic@: An International Journal for Moral Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethic@: An International Journal for Moral Philosophy"
                                    class="bookshelf-journal-title">Ethic@: An International Journal for Moral
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91022" class="ember-view"><a href="/libraries/603/journals/733?sort=title"
                                id="ember91023" class="bookshelf-journal ember-view">
                                <div id="ember91024" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1386-2820.png"
                                            alt="Cover of Ethical Theory and Moral Practice"
                                            title="Ethical Theory and Moral Practice">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethical Theory and Moral Practice" class="bookshelf-journal-title">Ethical
                                    Theory and Moral Practice</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91026" class="ember-view"><a href="/libraries/603/journals/33280?sort=title"
                                id="ember91027" class="bookshelf-journal ember-view">
                                <div id="ember91028" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0014-1704.png"
                                            alt="Cover of Ethics" title="Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics" class="bookshelf-journal-title">Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91030" class="ember-view"><a href="/libraries/603/journals/126879?sort=title"
                                id="ember91031" class="bookshelf-journal ember-view">
                                <div id="ember91032" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2453-7829.png"
                                            alt="Cover of Ethics &amp; Bioethics" title="Ethics &amp; Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics &amp; Bioethics" class="bookshelf-journal-title">Ethics &amp;
                                    Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91034" class="ember-view"><a href="/libraries/603/journals/344038?sort=title"
                                id="ember91035" class="bookshelf-journal ember-view">
                                <div id="ember91036" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2578-2355.png"
                                            alt="Cover of Ethics &amp; Human Research"
                                            title="Ethics &amp; Human Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics &amp; Human Research" class="bookshelf-journal-title">Ethics &amp;
                                    Human Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91039" class="ember-view"><a href="/libraries/603/journals/33350?sort=title"
                                id="ember91040" class="bookshelf-journal ember-view">
                                <div id="ember91041" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1535-5306.png"
                                            alt="Cover of Ethics &amp; the Environment"
                                            title="Ethics &amp; the Environment">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics &amp; the Environment" class="bookshelf-journal-title">Ethics &amp;
                                    the Environment</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91043" class="ember-view"><a href="/libraries/603/journals/39994?sort=title"
                                id="ember91044" class="bookshelf-journal ember-view">
                                <div id="ember91045" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1863-5415.png"
                                            alt="Cover of Ethics in Science and Environmental Politics"
                                            title="Ethics in Science and Environmental Politics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics in Science and Environmental Politics"
                                    class="bookshelf-journal-title">Ethics in Science and Environmental Politics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91047" class="ember-view"><a href="/libraries/603/journals/57531?sort=title"
                                id="ember91048" class="bookshelf-journal ember-view">
                                <div id="ember91049" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2352-5525.png"
                                            alt="Cover of Ethics, Medicine and Public Health"
                                            title="Ethics, Medicine and Public Health">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics, Medicine and Public Health" class="bookshelf-journal-title">Ethics,
                                    Medicine and Public Health</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91051" class="ember-view"><a href="/libraries/603/journals/16336?sort=title"
                                id="ember91052" class="bookshelf-journal ember-view">
                                <div id="ember91053" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1366-879X.png"
                                            alt="Cover of Ethics, Place &amp; Environment: A Journal of Philosophy &amp; Geography"
                                            title="Ethics, Place &amp; Environment: A Journal of Philosophy &amp; Geography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics, Place &amp; Environment: A Journal of Philosophy &amp; Geography"
                                    class="bookshelf-journal-title">Ethics, Place &amp; Environment: A Journal of
                                    Philosophy &amp; Geography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91055" class="ember-view"><a href="/libraries/603/journals/15727?sort=title"
                                id="ember91056" class="bookshelf-journal ember-view">
                                <div id="ember91057" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2155-0085.png"
                                            alt="Cover of Ethics, Policy &amp; Environment"
                                            title="Ethics, Policy &amp; Environment">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ethics, Policy &amp; Environment" class="bookshelf-journal-title">Ethics,
                                    Policy &amp; Environment</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91058" class="ember-view"><a href="/libraries/603/journals/103793?sort=title"
                                id="ember91059" class="bookshelf-journal ember-view">
                                <div id="ember91060" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1890-3991.png"
                                            alt="Cover of Etikk i Praksis: Nordic Journal of Applied Ethics"
                                            title="Etikk i Praksis: Nordic Journal of Applied Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etikk i Praksis: Nordic Journal of Applied Ethics"
                                    class="bookshelf-journal-title">Etikk i Praksis: Nordic Journal of Applied Ethics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91062" class="ember-view"><a href="/libraries/603/journals/39677?sort=title"
                                id="ember91063" class="bookshelf-journal ember-view">
                                <div id="ember91064" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2156-7808.png"
                                            alt="Cover of Études Ricoeuriennes / Ricoeur Studies"
                                            title="Études Ricoeuriennes / Ricoeur Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Études Ricoeuriennes / Ricoeur Studies" class="bookshelf-journal-title">
                                    Études Ricoeuriennes / Ricoeur Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91066" class="ember-view"><a href="/libraries/603/journals/315007?sort=title"
                                id="ember91067" class="bookshelf-journal ember-view">
                                <div id="ember91068" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2272-9011.png"
                                            alt="Cover of Etudes Théologiques et Religieuses"
                                            title="Etudes Théologiques et Religieuses">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Etudes Théologiques et Religieuses" class="bookshelf-journal-title">Etudes
                                    Théologiques et Religieuses</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91070" class="ember-view"><a href="/libraries/603/journals/3440?sort=title"
                                id="ember91071" class="bookshelf-journal ember-view">
                                <div id="ember91072" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1879-4912.png"
                                            alt="Cover of European Journal for Philosophy of Science"
                                            title="European Journal for Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Journal for Philosophy of Science" class="bookshelf-journal-title">
                                    European Journal for Philosophy of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91074" class="ember-view"><a href="/libraries/603/journals/11090?sort=title"
                                id="ember91075" class="bookshelf-journal ember-view">
                                <div id="ember91076" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0966-8373.png"
                                            alt="Cover of European Journal of Philosophy"
                                            title="European Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Journal of Philosophy" class="bookshelf-journal-title">European
                                    Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91078" class="ember-view"><a href="/libraries/603/journals/430278?sort=title"
                                id="ember91079" class="bookshelf-journal ember-view">
                                <div id="ember91080" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/26669730.png"
                                            alt="Cover of European Journal of Theology"
                                            title="European Journal of Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="European Journal of Theology" class="bookshelf-journal-title">European
                                    Journal of Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91082" class="ember-view"><a href="/libraries/603/journals/101227?sort=title"
                                id="ember91083" class="bookshelf-journal ember-view">
                                <div id="ember91084" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0014-3367-c2640578-fa06-481a-8895-54f2fdf02b7d.webp"
                                            alt="Cover of Evangelical Quarterly" title="Evangelical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Evangelical Quarterly" class="bookshelf-journal-title">Evangelical Quarterly
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91086" class="ember-view"><a href="/libraries/603/journals/129150?sort=title"
                                id="ember91087" class="bookshelf-journal ember-view">
                                <div id="ember91088" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2198-0470.png"
                                            alt="Cover of Evangelische Theologie" title="Evangelische Theologie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Evangelische Theologie" class="bookshelf-journal-title">Evangelische
                                    Theologie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91090" class="ember-view"><a href="/libraries/603/journals/9835?sort=title"
                                id="ember91091" class="bookshelf-journal ember-view">
                                <div id="ember91092" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0166-2740.png"
                                            alt="Cover of Exchange" title="Exchange">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Exchange" class="bookshelf-journal-title">Exchange</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91094" class="ember-view"><a href="/libraries/603/journals/3944?sort=title"
                                id="ember91095" class="bookshelf-journal ember-view">
                                <div id="ember91096" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0014-5246.png"
                                            alt="Cover of The Expository Times" title="The Expository Times">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Expository Times" class="bookshelf-journal-title">The Expository Times
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91097" class="ember-view"><a href="/libraries/603/journals/9808?sort=title"
                                id="ember91098" class="bookshelf-journal ember-view">
                                <div id="ember91099" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/default-journal-cover.png"
                                            alt="Cover of Le Fait Missionnaire" title="Le Fait Missionnaire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Le Fait Missionnaire" class="bookshelf-journal-title">Le Fait Missionnaire
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91101" class="ember-view"><a href="/libraries/603/journals/4382?sort=title"
                                id="ember91102" class="bookshelf-journal ember-view">
                                <div id="ember91103" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0966-7350.png"
                                            alt="Cover of Feminist Theology" title="Feminist Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Feminist Theology" class="bookshelf-journal-title">Feminist Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91105" class="ember-view"><a href="/libraries/603/journals/33557?sort=title"
                                id="ember91106" class="bookshelf-journal ember-view">
                                <div id="ember91107" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0925-0166-de36b91d-e407-428c-8a3b-549cb9899681.png"
                                            alt="Cover of Fichte-Studien" title="Fichte-Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Fichte-Studien" class="bookshelf-journal-title">Fichte-Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91109" class="ember-view"><a href="/libraries/603/journals/39761?sort=title"
                                id="ember91110" class="bookshelf-journal ember-view">
                                <div id="ember91111" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1743-0615.png"
                                            alt="Cover of Fieldwork in Religion" title="Fieldwork in Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Fieldwork in Religion" class="bookshelf-journal-title">Fieldwork in Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91113" class="ember-view"><a href="/libraries/603/journals/58739?sort=title"
                                id="ember91114" class="bookshelf-journal ember-view">
                                <div id="ember91115" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1466-4615.png"
                                            alt="Cover of Film-Philosophy" title="Film-Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Film-Philosophy" class="bookshelf-journal-title">Film-Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91117" class="ember-view"><a href="/libraries/603/journals/58751?sort=title"
                                id="ember91118" class="bookshelf-journal ember-view">
                                <div id="ember91119" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2307-3705.png"
                                            alt="Cover of Filosofiâ i Kosmologiâ / Philosophy and Cosmology"
                                            title="Filosofiâ i Kosmologiâ / Philosophy and Cosmology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Filosofiâ i Kosmologiâ / Philosophy and Cosmology"
                                    class="bookshelf-journal-title">Filosofiâ i Kosmologiâ / Philosophy and Cosmology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91121" class="ember-view"><a href="/libraries/603/journals/58749?sort=title"
                                id="ember91122" class="bookshelf-journal ember-view">
                                <div id="ember91123" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0353-5738.png"
                                            alt="Cover of Filozofija i Društvo" title="Filozofija i Društvo">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Filozofija i Društvo" class="bookshelf-journal-title">Filozofija i Društvo
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91125" class="ember-view"><a href="/libraries/603/journals/59123?sort=title"
                                id="ember91126" class="bookshelf-journal ember-view">
                                <div id="ember91127" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0123-4870.png"
                                            alt="Cover of Folios" title="Folios">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Folios" class="bookshelf-journal-title">Folios</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91129" class="ember-view"><a href="/libraries/603/journals/59341?sort=title"
                                id="ember91130" class="bookshelf-journal ember-view">
                                <div id="ember91131" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1578-4576.png"
                                            alt="Cover of Foro Interno : Anuario de Teoría Política"
                                            title="Foro Interno : Anuario de Teoría Política">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Foro Interno : Anuario de Teoría Política" class="bookshelf-journal-title">
                                    Foro Interno : Anuario de Teoría Política</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91133" class="ember-view"><a href="/libraries/603/journals/538?sort=title"
                                id="ember91134" class="bookshelf-journal ember-view">
                                <div id="ember91135" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1386-4238.png"
                                            alt="Cover of Foundations of Chemistry" title="Foundations of Chemistry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Foundations of Chemistry" class="bookshelf-journal-title">Foundations of
                                    Chemistry</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91137" class="ember-view"><a href="/libraries/603/journals/2096?sort=title"
                                id="ember91138" class="bookshelf-journal ember-view">
                                <div id="ember91139" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1233-1821.png"
                                            alt="Cover of Foundations of Science" title="Foundations of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Foundations of Science" class="bookshelf-journal-title">Foundations of
                                    Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91141" class="ember-view"><a href="/libraries/603/journals/10687?sort=title"
                                id="ember91142" class="bookshelf-journal ember-view">
                                <div id="ember91143" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0080-5459.png"
                                            alt="Cover of Franciscan Studies" title="Franciscan Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Franciscan Studies" class="bookshelf-journal-title">Franciscan Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91145" class="ember-view"><a href="/libraries/603/journals/59503?sort=title"
                                id="ember91146" class="bookshelf-journal ember-view">
                                <div id="ember91147" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-1468.png"
                                            alt="Cover of Franciscanum" title="Franciscanum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Franciscanum" class="bookshelf-journal-title">Franciscanum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91149" class="ember-view"><a href="/libraries/603/journals/32638?sort=title"
                                id="ember91150" class="bookshelf-journal ember-view">
                                <div id="ember91151" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-0812.png"
                                            alt="Cover of Frühmittelalterliche Studien"
                                            title="Frühmittelalterliche Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Frühmittelalterliche Studien" class="bookshelf-journal-title">
                                    Frühmittelalterliche Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91153" class="ember-view"><a href="/libraries/603/journals/316011?sort=title"
                                id="ember91154" class="bookshelf-journal ember-view">
                                <div id="ember91155" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2502-7743.png"
                                            alt="Cover of Gema Teologika" title="Gema Teologika">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gema Teologika" class="bookshelf-journal-title">Gema Teologika</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91157" class="ember-view"><a href="/libraries/603/journals/109917?sort=title"
                                id="ember91158" class="bookshelf-journal ember-view">
                                <div id="ember91159" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1128-7462.png"
                                            alt="Cover of Global Bioethics" title="Global Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Global Bioethics" class="bookshelf-journal-title">Global Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91161" class="ember-view"><a href="/libraries/603/journals/101522?sort=title"
                                id="ember91162" class="bookshelf-journal ember-view">
                                <div id="ember91163" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2451-859X-a2c406b6-8eda-437c-befc-a133051aeb39.png"
                                            alt="Cover of Gnosis : Journal of Gnostic Studies"
                                            title="Gnosis : Journal of Gnostic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Gnosis : Journal of Gnostic Studies" class="bookshelf-journal-title">Gnosis
                                    : Journal of Gnostic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91164" class="ember-view"><a href="/libraries/603/journals/138052?sort=title"
                                id="ember91165" class="bookshelf-journal ember-view">
                                <div id="ember91166" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2077-1800.png"
                                            alt="Cover of Granì" title="Granì">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Granì" class="bookshelf-journal-title">Granì</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91168" class="ember-view"><a href="/libraries/603/journals/33568?sort=title"
                                id="ember91169" class="bookshelf-journal ember-view">
                                <div id="ember91170" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0165-9227.png"
                                            alt="Cover of Grazer Philosophische Studien"
                                            title="Grazer Philosophische Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Grazer Philosophische Studien" class="bookshelf-journal-title">Grazer
                                    Philosophische Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91172" class="ember-view"><a href="/libraries/603/journals/18979?sort=title"
                                id="ember91173" class="bookshelf-journal ember-view">
                                <div id="ember91174" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0017-8160.png"
                                            alt="Cover of Harvard Theological Review"
                                            title="Harvard Theological Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Harvard Theological Review" class="bookshelf-journal-title">Harvard
                                    Theological Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91176" class="ember-view"><a href="/libraries/603/journals/10773?sort=title"
                                id="ember91177" class="bookshelf-journal ember-view">
                                <div id="ember91178" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1552-146X.png"
                                            alt="Cover of Hastings Center Report" title="Hastings Center Report">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hastings Center Report" class="bookshelf-journal-title">Hastings Center
                                    Report</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91180" class="ember-view"><a href="/libraries/603/journals/10686?sort=title"
                                id="ember91181" class="bookshelf-journal ember-view">
                                <div id="ember91182" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0146-4094.png"
                                            alt="Cover of Hebrew Studies" title="Hebrew Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hebrew Studies" class="bookshelf-journal-title">Hebrew Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91184" class="ember-view"><a href="/libraries/603/journals/61426?sort=title"
                                id="ember91185" class="bookshelf-journal ember-view">
                                <div id="ember91186" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0360-9049.png"
                                            alt="Cover of Hebrew Union College Annual"
                                            title="Hebrew Union College Annual">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hebrew Union College Annual" class="bookshelf-journal-title">Hebrew Union
                                    College Annual</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91188" class="ember-view"><a href="/libraries/603/journals/983?sort=title"
                                id="ember91189" class="bookshelf-journal ember-view">
                                <div id="ember91190" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0956-2737.png"
                                            alt="Cover of HEC Forum" title="HEC Forum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="HEC Forum" class="bookshelf-journal-title">HEC Forum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91192" class="ember-view"><a href="/libraries/603/journals/21057?sort=title"
                                id="ember91193" class="bookshelf-journal ember-view">
                                <div id="ember91194" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2051-5367.png"
                                            alt="Cover of Hegel Bulletin" title="Hegel Bulletin">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hegel Bulletin" class="bookshelf-journal-title">Hegel Bulletin</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91196" class="ember-view"><a href="/libraries/603/journals/61434?sort=title"
                                id="ember91197" class="bookshelf-journal ember-view">
                                <div id="ember91198" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2192-5550.png"
                                            alt="Cover of Hegel-Jahrbuch" title="Hegel-Jahrbuch">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hegel-Jahrbuch" class="bookshelf-journal-title">Hegel-Jahrbuch</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91200" class="ember-view"><a href="/libraries/603/journals/4698?sort=title"
                                id="ember91201" class="bookshelf-journal ember-view">
                                <div id="ember91202" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0018-1196.png"
                                            alt="Cover of The Heythrop Journal" title="The Heythrop Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Heythrop Journal" class="bookshelf-journal-title">The Heythrop Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91204" class="ember-view"><a href="/libraries/603/journals/148178?sort=title"
                                id="ember91205" class="bookshelf-journal ember-view">
                                <div id="ember91206" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2191-0456-7b81a3e4-bfc5-4d81-aed3-02d908c615a8.png"
                                            alt="Cover of Hikma : Zeitschrift für Islamische Theologie und Religionspädagogik"
                                            title="Hikma : Zeitschrift für Islamische Theologie und Religionspädagogik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hikma : Zeitschrift für Islamische Theologie und Religionspädagogik"
                                    class="bookshelf-journal-title">Hikma : Zeitschrift für Islamische Theologie und
                                    Religionspädagogik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91208" class="ember-view"><a href="/libraries/603/journals/16948?sort=title"
                                id="ember91209" class="bookshelf-journal ember-view">
                                <div id="ember91210" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0144-5340.png"
                                            alt="Cover of History and Philosophy of Logic"
                                            title="History and Philosophy of Logic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History and Philosophy of Logic" class="bookshelf-journal-title">History and
                                    Philosophy of Logic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91211" class="ember-view"><a href="/libraries/603/journals/16606?sort=title"
                                id="ember91212" class="bookshelf-journal ember-view">
                                <div id="ember91213" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0391-9714.png"
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
                        <div id="ember91215" class="ember-view"><a href="/libraries/603/journals/440862?sort=title"
                                id="ember91216" class="bookshelf-journal ember-view">
                                <div id="ember91217" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2666-4275-f3984c16-e2f6-4f3c-a8c4-4a7a98c31799.png"
                                            alt="Cover of History of Philosophy &amp; Logical Analysis"
                                            title="History of Philosophy &amp; Logical Analysis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="History of Philosophy &amp; Logical Analysis"
                                    class="bookshelf-journal-title">History of Philosophy &amp; Logical Analysis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91218" class="ember-view"><a href="/libraries/603/journals/1200?sort=title"
                                id="ember91219" class="bookshelf-journal ember-view">
                                <div id="ember91220" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0952-6951.png"
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
                        <div id="ember91221" class="ember-view"><a href="/libraries/603/journals/9788?sort=title"
                                id="ember91222" class="bookshelf-journal ember-view">
                                <div id="ember91223" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0921-5891.png"
                                            alt="Cover of Hobbes Studies" title="Hobbes Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hobbes Studies" class="bookshelf-journal-title">Hobbes Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91225" class="ember-view"><a href="/libraries/603/journals/61896?sort=title"
                                id="ember91226" class="bookshelf-journal ember-view">
                                <div id="ember91227" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2152-6923.png"
                                            alt="Cover of Homiletic" title="Homiletic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Homiletic" class="bookshelf-journal-title">Homiletic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91228" class="ember-view"><a href="/libraries/603/journals/33447?sort=title"
                                id="ember91229" class="bookshelf-journal ember-view">
                                <div id="ember91230" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2152-5188.png"
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
                        <div id="ember91232" class="ember-view"><a href="/libraries/603/journals/21052?sort=title"
                                id="ember91233" class="bookshelf-journal ember-view">
                                <div id="ember91234" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0360-9669.png"
                                            alt="Cover of Horizons" title="Horizons">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Horizons" class="bookshelf-journal-title">Horizons</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91236" class="ember-view"><a href="/libraries/603/journals/9903?sort=title"
                                id="ember91237" class="bookshelf-journal ember-view">
                                <div id="ember91238" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0195-9085.png"
                                            alt="Cover of Horizons in Biblical Theology"
                                            title="Horizons in Biblical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Horizons in Biblical Theology" class="bookshelf-journal-title">Horizons in
                                    Biblical Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91240" class="ember-view"><a href="/libraries/603/journals/61967?sort=title"
                                id="ember91241" class="bookshelf-journal ember-view">
                                <div id="ember91242" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1679-9615.png"
                                            alt="Cover of Horizonte : Revista de Estudos de Teologia e Ciências da Religiao"
                                            title="Horizonte : Revista de Estudos de Teologia e Ciências da Religiao">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Horizonte : Revista de Estudos de Teologia e Ciências da Religiao"
                                    class="bookshelf-journal-title">Horizonte : Revista de Estudos de Teologia e
                                    Ciências da Religiao</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91244" class="ember-view"><a href="/libraries/603/journals/37084?sort=title"
                                id="ember91245" class="bookshelf-journal ember-view">
                                <div id="ember91246" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0259-9422.png"
                                            alt="Cover of HTS Teologiese Studies / Theological Studies"
                                            title="HTS Teologiese Studies / Theological Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="HTS Teologiese Studies / Theological Studies"
                                    class="bookshelf-journal-title">HTS Teologiese Studies / Theological Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91248" class="ember-view"><a href="/libraries/603/journals/7474?sort=title"
                                id="ember91249" class="bookshelf-journal ember-view">
                                <div id="ember91250" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0163-8548.png"
                                            alt="Cover of Human Studies" title="Human Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Human Studies" class="bookshelf-journal-title">Human Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91252" class="ember-view"><a href="/libraries/603/journals/10939?sort=title"
                                id="ember91253" class="bookshelf-journal ember-view">
                                <div id="ember91254" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0319-7336.png"
                                            alt="Cover of Hume Studies" title="Hume Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hume Studies" class="bookshelf-journal-title">Hume Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91256" class="ember-view"><a href="/libraries/603/journals/7501?sort=title"
                                id="ember91257" class="bookshelf-journal ember-view">
                                <div id="ember91258" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0167-9848.png"
                                            alt="Cover of Husserl Studies" title="Husserl Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Husserl Studies" class="bookshelf-journal-title">Husserl Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91260" class="ember-view"><a href="/libraries/603/journals/62221?sort=title"
                                id="ember91261" class="bookshelf-journal ember-view">
                                <div id="ember91262" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1689-4286-24d5ed91-ccd6-4f8f-aed7-2a2bc9215f16.png"
                                            alt="Cover of Hybris" title="Hybris">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hybris" class="bookshelf-journal-title">Hybris</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91264" class="ember-view"><a href="/libraries/603/journals/8183?sort=title"
                                id="ember91265" class="bookshelf-journal ember-view">
                                <div id="ember91266" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0887-5367.png"
                                            alt="Cover of Hypatia" title="Hypatia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Hypatia" class="bookshelf-journal-title">Hypatia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91268" class="ember-view"><a href="/libraries/603/journals/62347?sort=title"
                                id="ember91269" class="bookshelf-journal ember-view">
                                <div id="ember91270" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-0062.png"
                                            alt="Cover of Ideas y Valores" title="Ideas y Valores">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ideas y Valores" class="bookshelf-journal-title">Ideas y Valores</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91273" class="ember-view"><a href="/libraries/603/journals/62545?sort=title"
                                id="ember91274" class="bookshelf-journal ember-view">
                                <div id="ember91275" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1135-4712.png"
                                            alt="Cover of Ili: Revista de Ciencias de las Religiones"
                                            title="Ili: Revista de Ciencias de las Religiones">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ili: Revista de Ciencias de las Religiones" class="bookshelf-journal-title">
                                    Ili: Revista de Ciencias de las Religiones</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91277" class="ember-view"><a href="/libraries/603/journals/39751?sort=title"
                                id="ember91278" class="bookshelf-journal ember-view">
                                <div id="ember91279" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1463-9955.png"
                                            alt="Cover of Implicit Religion" title="Implicit Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Implicit Religion" class="bookshelf-journal-title">Implicit Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91281" class="ember-view"><a href="/libraries/603/journals/37101?sort=title"
                                id="ember91282" class="bookshelf-journal ember-view">
                                <div id="ember91283" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1018-6441.png"
                                            alt="Cover of In Die Skriflig In Luce Verbi"
                                            title="In Die Skriflig In Luce Verbi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="In Die Skriflig In Luce Verbi" class="bookshelf-journal-title">In Die
                                    Skriflig In Luce Verbi</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91284" class="ember-view"><a href="/libraries/603/journals/62788?sort=title"
                                id="ember91285" class="bookshelf-journal ember-view">
                                <div id="ember91286" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2339-8523.png"
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
                        <div id="ember91287" class="ember-view"><a href="/libraries/603/journals/9841?sort=title"
                                id="ember91288" class="bookshelf-journal ember-view">
                                <div id="ember91289" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0019-7246.png"
                                            alt="Cover of Indo-Iranian Journal" title="Indo-Iranian Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indo-Iranian Journal" class="bookshelf-journal-title">Indo-Iranian Journal
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91291" class="ember-view"><a href="/libraries/603/journals/236843?sort=title"
                                id="ember91292" class="bookshelf-journal ember-view">
                                <div id="ember91293" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2079-7222.png"
                                            alt="Cover of Indo-Pacific Journal of Phenomenology"
                                            title="Indo-Pacific Journal of Phenomenology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Indo-Pacific Journal of Phenomenology" class="bookshelf-journal-title">
                                    Indo-Pacific Journal of Phenomenology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91295" class="ember-view"><a href="/libraries/603/journals/246784?sort=title"
                                id="ember91296" class="bookshelf-journal ember-view">
                                <div id="ember91297" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1978-7332.png"
                                            alt="Cover of Inferensi Jurnal Penelitian Sosial Keagamaan"
                                            title="Inferensi Jurnal Penelitian Sosial Keagamaan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Inferensi Jurnal Penelitian Sosial Keagamaan"
                                    class="bookshelf-journal-title">Inferensi Jurnal Penelitian Sosial Keagamaan</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91299" class="ember-view"><a href="/libraries/603/journals/63062?sort=title"
                                id="ember91300" class="bookshelf-journal ember-view">
                                <div id="ember91301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0824-2577.png"
                                            alt="Cover of Informal Logic" title="Informal Logic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Informal Logic" class="bookshelf-journal-title">Informal Logic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91303" class="ember-view"><a href="/libraries/603/journals/34353?sort=title"
                                id="ember91304" class="bookshelf-journal ember-view">
                                <div id="ember91305" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2077-8317-623004e1-c876-4e03-bb2f-09f575b33d47.png"
                                            alt="Cover of Inkanyiso : Journal of African Thought"
                                            title="Inkanyiso : Journal of African Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Inkanyiso : Journal of African Thought" class="bookshelf-journal-title">
                                    Inkanyiso : Journal of African Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91307" class="ember-view"><a href="/libraries/603/journals/17122?sort=title"
                                id="ember91308" class="bookshelf-journal ember-view">
                                <div id="ember91309" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0020-174X.png"
                                            alt="Cover of Inquiry" title="Inquiry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Inquiry" class="bookshelf-journal-title">Inquiry</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91310" class="ember-view"><a href="/libraries/603/journals/37423?sort=title"
                                id="ember91311" class="bookshelf-journal ember-view">
                                <div id="ember91312" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2212-9421.png"
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
                        <div id="ember91314" class="ember-view"><a href="/libraries/603/journals/107772?sort=title"
                                id="ember91315" class="bookshelf-journal ember-view">
                                <div id="ember91316" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2365-3140-0d1a572c-725a-4acb-8d10-e56a0d6e2cae.png"
                                            alt="Cover of Interdisciplinary Journal for Religion and Transformation in Contemporary Society"
                                            title="Interdisciplinary Journal for Religion and Transformation in Contemporary Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Interdisciplinary Journal for Religion and Transformation in Contemporary Society"
                                    class="bookshelf-journal-title">Interdisciplinary Journal for Religion and
                                    Transformation in Contemporary Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91318" class="ember-view"><a href="/libraries/603/journals/63755?sort=title"
                                id="ember91319" class="bookshelf-journal ember-view">
                                <div id="ember91320" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1833-2595.png"
                                            alt="Cover of International Journal for Educational Integrity"
                                            title="International Journal for Educational Integrity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal for Educational Integrity"
                                    class="bookshelf-journal-title">International Journal for Educational Integrity
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91322" class="ember-view"><a href="/libraries/603/journals/6389?sort=title"
                                id="ember91323" class="bookshelf-journal ember-view">
                                <div id="ember91324" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0020-7047.png"
                                            alt="Cover of International Journal for Philosophy of Religion"
                                            title="International Journal for Philosophy of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal for Philosophy of Religion"
                                    class="bookshelf-journal-title">International Journal for Philosophy of Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91326" class="ember-view"><a href="/libraries/603/journals/9800?sort=title"
                                id="ember91327" class="bookshelf-journal ember-view">
                                <div id="ember91328" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2210-5697.png"
                                            alt="Cover of International Journal for the Study of Skepticism"
                                            title="International Journal for the Study of Skepticism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal for the Study of Skepticism"
                                    class="bookshelf-journal-title">International Journal for the Study of Skepticism
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91329" class="ember-view"><a href="/libraries/603/journals/17299?sort=title"
                                id="ember91330" class="bookshelf-journal ember-view">
                                <div id="ember91331" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1474-225X.png"
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
                        <div id="ember91333" class="ember-view"><a href="/libraries/603/journals/321611?sort=title"
                                id="ember91334" class="bookshelf-journal ember-view">
                                <div id="ember91335" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2542-4238-45e426e1-c1a2-40dd-bcce-f8b1aa6e0877.webp"
                                            alt="Cover of International Journal of Asian Christianity"
                                            title="International Journal of Asian Christianity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Asian Christianity"
                                    class="bookshelf-journal-title">International Journal of Asian Christianity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91337" class="ember-view"><a href="/libraries/603/journals/37339?sort=title"
                                id="ember91338" class="bookshelf-journal ember-view">
                                <div id="ember91339" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2196-8802.png"
                                            alt="Cover of International Journal of Dharma Studies"
                                            title="International Journal of Dharma Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Dharma Studies" class="bookshelf-journal-title">
                                    International Journal of Dharma Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91341" class="ember-view"><a href="/libraries/603/journals/384042?sort=title"
                                id="ember91342" class="bookshelf-journal ember-view">
                                <div id="ember91343" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-9198-a5ab38e0-00df-4aed-9cee-df39be334186.webp"
                                            alt="Cover of International Journal of Divination and Prognostication"
                                            title="International Journal of Divination and Prognostication">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Divination and Prognostication"
                                    class="bookshelf-journal-title">International Journal of Divination and
                                    Prognostication</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91345" class="ember-view"><a href="/libraries/603/journals/33362?sort=title"
                                id="ember91346" class="bookshelf-journal ember-view">
                                <div id="ember91347" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1937-4585.png"
                                            alt="Cover of International Journal of Feminist Approaches to Bioethics"
                                            title="International Journal of Feminist Approaches to Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Feminist Approaches to Bioethics"
                                    class="bookshelf-journal-title">International Journal of Feminist Approaches to
                                    Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91349" class="ember-view"><a href="/libraries/603/journals/2125?sort=title"
                                id="ember91350" class="bookshelf-journal ember-view">
                                <div id="ember91351" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1022-4556.png"
                                            alt="Cover of International Journal of Hindu Studies"
                                            title="International Journal of Hindu Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Hindu Studies" class="bookshelf-journal-title">
                                    International Journal of Hindu Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91353" class="ember-view"><a href="/libraries/603/journals/394348?sort=title"
                                id="ember91354" class="bookshelf-journal ember-view">
                                <div id="ember91355" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-9988-03c4891d-b738-4524-b6d8-c6df2dc57849.webp"
                                            alt="Cover of International Journal of Islam in Asia"
                                            title="International Journal of Islam in Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Islam in Asia" class="bookshelf-journal-title">
                                    International Journal of Islam in Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91357" class="ember-view"><a href="/libraries/603/journals/295001?sort=title"
                                id="ember91358" class="bookshelf-journal ember-view">
                                <div id="ember91359" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25099965.png"
                                            alt="Cover of International Journal of Latin American Religions"
                                            title="International Journal of Latin American Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Latin American Religions"
                                    class="bookshelf-journal-title">International Journal of Latin American Religions
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91361" class="ember-view"><a href="/libraries/603/journals/16823?sort=title"
                                id="ember91362" class="bookshelf-journal ember-view">
                                <div id="ember91363" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0967-2559.png"
                                            alt="Cover of International Journal of Philosophical Studies"
                                            title="International Journal of Philosophical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Philosophical Studies"
                                    class="bookshelf-journal-title">International Journal of Philosophical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91365" class="ember-view"><a href="/libraries/603/journals/64436?sort=title"
                                id="ember91366" class="bookshelf-journal ember-view">
                                <div id="ember91367" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2169-2327.png"
                                            alt="Cover of International Journal of Philosophy and Theology"
                                            title="International Journal of Philosophy and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Philosophy and Theology"
                                    class="bookshelf-journal-title">International Journal of Philosophy and Theology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91369" class="ember-view"><a href="/libraries/603/journals/32555?sort=title"
                                id="ember91370" class="bookshelf-journal ember-view">
                                <div id="ember91371" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1612-9768.png"
                                            alt="Cover of International Journal of Practical Theology"
                                            title="International Journal of Practical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Practical Theology"
                                    class="bookshelf-journal-title">International Journal of Practical Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91373" class="ember-view"><a href="/libraries/603/journals/9910?sort=title"
                                id="ember91374" class="bookshelf-journal ember-view">
                                <div id="ember91375" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1872-5171.png"
                                            alt="Cover of International Journal of Public Theology"
                                            title="International Journal of Public Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Public Theology" class="bookshelf-journal-title">
                                    International Journal of Public Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91377" class="ember-view"><a href="/libraries/603/journals/64484?sort=title"
                                id="ember91378" class="bookshelf-journal ember-view">
                                <div id="ember91379" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2154-8633-23e89a8f-7871-466e-bf9f-2c8e6eee141c.png"
                                            alt="Cover of International Journal of Religion and Spirituality in Society"
                                            title="International Journal of Religion and Spirituality in Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Religion and Spirituality in Society"
                                    class="bookshelf-journal-title">International Journal of Religion and Spirituality
                                    in Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91381" class="ember-view"><a href="/libraries/603/journals/4900?sort=title"
                                id="ember91382" class="bookshelf-journal ember-view">
                                <div id="ember91383" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1463-1652.png"
                                            alt="Cover of International Journal of Systematic Theology"
                                            title="International Journal of Systematic Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Systematic Theology"
                                    class="bookshelf-journal-title">International Journal of Systematic Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91385" class="ember-view"><a href="/libraries/603/journals/64567?sort=title"
                                id="ember91386" class="bookshelf-journal ember-view">
                                <div id="ember91387" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1947-3451.png"
                                            alt="Cover of International Journal of Technoethics"
                                            title="International Journal of Technoethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Journal of Technoethics" class="bookshelf-journal-title">
                                    International Journal of Technoethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91389" class="ember-view"><a href="/libraries/603/journals/9912?sort=title"
                                id="ember91390" class="bookshelf-journal ember-view">
                                <div id="ember91391" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1872-5082.png"
                                            alt="Cover of The International Journal of the Platonic Tradition"
                                            title="The International Journal of the Platonic Tradition">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The International Journal of the Platonic Tradition"
                                    class="bookshelf-journal-title">The International Journal of the Platonic Tradition
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91393" class="ember-view"><a href="/libraries/603/journals/2148?sort=title"
                                id="ember91394" class="bookshelf-journal ember-view">
                                <div id="ember91395" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0020-8582.png"
                                            alt="Cover of International Review of Mission"
                                            title="International Review of Mission">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Review of Mission" class="bookshelf-journal-title">
                                    International Review of Mission</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91397" class="ember-view"><a href="/libraries/603/journals/17882?sort=title"
                                id="ember91398" class="bookshelf-journal ember-view">
                                <div id="ember91399" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1942-2539.png"
                                            alt="Cover of International Studies in Catholic Education"
                                            title="International Studies in Catholic Education">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Studies in Catholic Education"
                                    class="bookshelf-journal-title">International Studies in Catholic Education</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91401" class="ember-view"><a href="/libraries/603/journals/16780?sort=title"
                                id="ember91402" class="bookshelf-journal ember-view">
                                <div id="ember91403" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0269-8595.png"
                                            alt="Cover of International Studies in the Philosophy of Science"
                                            title="International Studies in the Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="International Studies in the Philosophy of Science"
                                    class="bookshelf-journal-title">International Studies in the Philosophy of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91405" class="ember-view"><a href="/libraries/603/journals/7678?sort=title"
                                id="ember91406" class="bookshelf-journal ember-view">
                                <div id="ember91407" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0020-9643.png"
                                            alt="Cover of Interpretation: A Journal of Bible and Theology"
                                            title="Interpretation: A Journal of Bible and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Interpretation: A Journal of Bible and Theology"
                                    class="bookshelf-journal-title">Interpretation: A Journal of Bible and Theology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91409" class="ember-view"><a href="/libraries/603/journals/65108?sort=title"
                                id="ember91410" class="bookshelf-journal ember-view">
                                <div id="ember91411" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0193-7758.png"
                                            alt="Cover of IRB: Ethics &amp; Human Research"
                                            title="IRB: Ethics &amp; Human Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="IRB: Ethics &amp; Human Research" class="bookshelf-journal-title">IRB:
                                    Ethics &amp; Human Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91413" class="ember-view"><a href="/libraries/603/journals/6181?sort=title"
                                id="ember91414" class="bookshelf-journal ember-view">
                                <div id="ember91415" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-1400.png"
                                            alt="Cover of Irish Theological Quarterly"
                                            title="Irish Theological Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Irish Theological Quarterly" class="bookshelf-journal-title">Irish
                                    Theological Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91417" class="ember-view"><a href="/libraries/603/journals/37479?sort=title"
                                id="ember91418" class="bookshelf-journal ember-view">
                                <div id="ember91419" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1130-2097.png"
                                            alt="Cover of Isegoría" title="Isegoría">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Isegoría" class="bookshelf-journal-title">Isegoría</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91420" class="ember-view"><a href="/libraries/603/journals/33297?sort=title"
                                id="ember91421" class="bookshelf-journal ember-view">
                                <div id="ember91422" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-1753.png"
                                            alt="Cover of Isis" title="Isis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Isis" class="bookshelf-journal-title">Isis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91424" class="ember-view"><a href="/libraries/603/journals/32549?sort=title"
                                id="ember91425" class="bookshelf-journal ember-view">
                                <div id="ember91426" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-0928.png"
                                            alt="Cover of Der Islam" title="Der Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Der Islam" class="bookshelf-journal-title">Der Islam</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91428" class="ember-view"><a href="/libraries/603/journals/32640?sort=title"
                                id="ember91429" class="bookshelf-journal ember-view">
                                <div id="ember91430" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-1142.png"
                                            alt="Cover of Jahrbuch für Wissenschaft und Ethik"
                                            title="Jahrbuch für Wissenschaft und Ethik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jahrbuch für Wissenschaft und Ethik" class="bookshelf-journal-title">
                                    Jahrbuch für Wissenschaft und Ethik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91432" class="ember-view"><a href="/libraries/603/journals/65671?sort=title"
                                id="ember91433" class="bookshelf-journal ember-view">
                                <div id="ember91434" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0304-1042-00d88274-367b-4f48-ab65-6eb1dcd45991.jpg"
                                            alt="Cover of Japanese Journal of Religious Studies"
                                            title="Japanese Journal of Religious Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Japanese Journal of Religious Studies" class="bookshelf-journal-title">
                                    Japanese Journal of Religious Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91436" class="ember-view"><a href="/libraries/603/journals/65739?sort=title"
                                id="ember91437" class="bookshelf-journal ember-view">
                                <div id="ember91438" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0007-1773.png"
                                            alt="Cover of JBSP: Journal of the British Society for Phenomenology"
                                            title="JBSP: Journal of the British Society for Phenomenology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="JBSP: Journal of the British Society for Phenomenology"
                                    class="bookshelf-journal-title">JBSP: Journal of the British Society for
                                    Phenomenology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91440" class="ember-view"><a href="/libraries/603/journals/65827?sort=title"
                                id="ember91441" class="bookshelf-journal ember-view">
                                <div id="ember91442" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1462-169X.png"
                                            alt="Cover of Jewish Culture and History"
                                            title="Jewish Culture and History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jewish Culture and History" class="bookshelf-journal-title">Jewish Culture
                                    and History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91444" class="ember-view"><a href="/libraries/603/journals/5061?sort=title"
                                id="ember91445" class="bookshelf-journal ember-view">
                                <div id="ember91446" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0334-701X.png"
                                            alt="Cover of Jewish History" title="Jewish History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jewish History" class="bookshelf-journal-title">Jewish History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91448" class="ember-view"><a href="/libraries/603/journals/10774?sort=title"
                                id="ember91449" class="bookshelf-journal ember-view">
                                <div id="ember91450" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-6682.png"
                                            alt="Cover of Jewish Quarterly Review" title="Jewish Quarterly Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jewish Quarterly Review" class="bookshelf-journal-title">Jewish Quarterly
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91452" class="ember-view"><a href="/libraries/603/journals/33355?sort=title"
                                id="ember91453" class="bookshelf-journal ember-view">
                                <div id="ember91454" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-6704.png"
                                            alt="Cover of Jewish Social Studies: History, Culture, and Society"
                                            title="Jewish Social Studies: History, Culture, and Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jewish Social Studies: History, Culture, and Society"
                                    class="bookshelf-journal-title">Jewish Social Studies: History, Culture, and Society
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91456" class="ember-view"><a href="/libraries/603/journals/367150?sort=title"
                                id="ember91457" class="bookshelf-journal ember-view">
                                <div id="ember91458" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2588-9605-1b1aa79e-b0bf-4f4b-ac75-7964279a9757.webp"
                                            alt="Cover of Journal for Continental Philosophy of Religion"
                                            title="Journal for Continental Philosophy of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for Continental Philosophy of Religion"
                                    class="bookshelf-journal-title">Journal for Continental Philosophy of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91459" class="ember-view"><a href="/libraries/603/journals/1086?sort=title"
                                id="ember91460" class="bookshelf-journal ember-view">
                                <div id="ember91461" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0925-4560.png"
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
                        <div id="ember91463" class="ember-view"><a href="/libraries/603/journals/33786?sort=title"
                                id="ember91464" class="bookshelf-journal ember-view">
                                <div id="ember91465" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1733-3911.png"
                                            alt="Cover of Journal for Perspectives of Economic Political and Social Integration"
                                            title="Journal for Perspectives of Economic Political and Social Integration">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for Perspectives of Economic Political and Social Integration"
                                    class="bookshelf-journal-title">Journal for Perspectives of Economic Political and
                                    Social Integration</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91467" class="ember-view"><a href="/libraries/603/journals/66240?sort=title"
                                id="ember91468" class="bookshelf-journal ember-view">
                                <div id="ember91469" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2159-0303.png"
                                            alt="Cover of Journal for the History of Analytical Philosophy"
                                            title="Journal for the History of Analytical Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the History of Analytical Philosophy"
                                    class="bookshelf-journal-title">Journal for the History of Analytical Philosophy
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91471" class="ember-view"><a href="/libraries/603/journals/9898?sort=title"
                                id="ember91472" class="bookshelf-journal ember-view">
                                <div id="ember91473" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0047-2212.png"
                                            alt="Cover of Journal for the Study of Judaism"
                                            title="Journal for the Study of Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of Judaism" class="bookshelf-journal-title">Journal
                                    for the Study of Judaism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91475" class="ember-view"><a href="/libraries/603/journals/34413?sort=title"
                                id="ember91476" class="bookshelf-journal ember-view">
                                <div id="ember91477" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1011-7601-e4a3388c-bf57-4b6a-b1b2-44b8e749c29d.png"
                                            alt="Cover of Journal for the Study of Religion"
                                            title="Journal for the Study of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of Religion" class="bookshelf-journal-title">Journal
                                    for the Study of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91479" class="ember-view"><a href="/libraries/603/journals/39766?sort=title"
                                id="ember91480" class="bookshelf-journal ember-view">
                                <div id="ember91481" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1749-4907.png"
                                            alt="Cover of Journal for the Study of Religion, Nature and Culture"
                                            title="Journal for the Study of Religion, Nature and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of Religion, Nature and Culture"
                                    class="bookshelf-journal-title">Journal for the Study of Religion, Nature and
                                    Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91483" class="ember-view"><a href="/libraries/603/journals/36445?sort=title"
                                id="ember91484" class="bookshelf-journal ember-view">
                                <div id="ember91485" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2044-0243.png"
                                            alt="Cover of Journal for the Study of Spirituality"
                                            title="Journal for the Study of Spirituality">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of Spirituality" class="bookshelf-journal-title">
                                    Journal for the Study of Spirituality</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91487" class="ember-view"><a href="/libraries/603/journals/9846?sort=title"
                                id="ember91488" class="bookshelf-journal ember-view">
                                <div id="ember91489" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1476-8690.png"
                                            alt="Cover of Journal for the Study of the Historical Jesus"
                                            title="Journal for the Study of the Historical Jesus">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of the Historical Jesus"
                                    class="bookshelf-journal-title">Journal for the Study of the Historical Jesus</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91491" class="ember-view"><a href="/libraries/603/journals/3820?sort=title"
                                id="ember91492" class="bookshelf-journal ember-view">
                                <div id="ember91493" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0142-064X.png"
                                            alt="Cover of Journal for the Study of the New Testament"
                                            title="Journal for the Study of the New Testament">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of the New Testament" class="bookshelf-journal-title">
                                    Journal for the Study of the New Testament</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91495" class="ember-view"><a href="/libraries/603/journals/3839?sort=title"
                                id="ember91496" class="bookshelf-journal ember-view">
                                <div id="ember91497" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0309-0892.png"
                                            alt="Cover of Journal for the Study of the Old Testament"
                                            title="Journal for the Study of the Old Testament">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of the Old Testament" class="bookshelf-journal-title">
                                    Journal for the Study of the Old Testament</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91499" class="ember-view"><a href="/libraries/603/journals/4296?sort=title"
                                id="ember91500" class="bookshelf-journal ember-view">
                                <div id="ember91501" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0951-8207.png"
                                            alt="Cover of Journal for the Study of the Pseudepigrapha"
                                            title="Journal for the Study of the Pseudepigrapha">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal for the Study of the Pseudepigrapha"
                                    class="bookshelf-journal-title">Journal for the Study of the Pseudepigrapha</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91502" class="ember-view"><a href="/libraries/603/journals/37445?sort=title"
                                id="ember91503" class="bookshelf-journal ember-view">
                                <div id="ember91504" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2214-2363.png"
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
                        <div id="ember91507" class="ember-view"><a href="/libraries/603/journals/36360?sort=title"
                                id="ember91508" class="bookshelf-journal ember-view">
                                <div id="ember91509" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1740-7141.png"
                                            alt="Cover of Journal of Adult Theological Education"
                                            title="Journal of Adult Theological Education">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Adult Theological Education" class="bookshelf-journal-title">
                                    Journal of Adult Theological Education</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91511" class="ember-view"><a href="/libraries/603/journals/66325?sort=title"
                                id="ember91512" class="bookshelf-journal ember-view">
                                <div id="ember91513" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2053-9320.png"
                                            alt="Cover of Journal of Aesthetics and Phenomenology"
                                            title="Journal of Aesthetics and Phenomenology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Aesthetics and Phenomenology" class="bookshelf-journal-title">
                                    Journal of Aesthetics and Phenomenology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91515" class="ember-view"><a href="/libraries/603/journals/33422?sort=title"
                                id="ember91516" class="bookshelf-journal ember-view">
                                <div id="ember91517" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2165-5405.png"
                                            alt="Cover of Journal of Africana Religions"
                                            title="Journal of Africana Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Africana Religions" class="bookshelf-journal-title">Journal of
                                    Africana Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91519" class="ember-view"><a href="/libraries/603/journals/1732?sort=title"
                                id="ember91520" class="bookshelf-journal ember-view">
                                <div id="ember91521" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1187-7863.png"
                                            alt="Cover of Journal of Agricultural and Environmental Ethics"
                                            title="Journal of Agricultural and Environmental Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Agricultural and Environmental Ethics"
                                    class="bookshelf-journal-title">Journal of Agricultural and Environmental Ethics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91523" class="ember-view"><a href="/libraries/603/journals/224952?sort=title"
                                id="ember91524" class="bookshelf-journal ember-view">
                                <div id="ember91525" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2471-6383.png"
                                            alt="Cover of Journal of Amish and Plain Anabaptist Studies"
                                            title="Journal of Amish and Plain Anabaptist Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Amish and Plain Anabaptist Studies"
                                    class="bookshelf-journal-title">Journal of Amish and Plain Anabaptist Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91526" class="ember-view"><a href="/libraries/603/journals/315008?sort=title"
                                id="ember91527" class="bookshelf-journal ember-view">
                                <div id="ember91528" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1869-3296.png"
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
                        <div id="ember91530" class="ember-view"><a href="/libraries/603/journals/9802?sort=title"
                                id="ember91531" class="bookshelf-journal ember-view">
                                <div id="ember91532" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1569-2116.png"
                                            alt="Cover of Journal of Ancient Near Eastern Religions"
                                            title="Journal of Ancient Near Eastern Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Ancient Near Eastern Religions" class="bookshelf-journal-title">
                                    Journal of Ancient Near Eastern Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91534" class="ember-view"><a href="/libraries/603/journals/19411?sort=title"
                                id="ember91535" class="bookshelf-journal ember-view">
                                <div id="ember91536" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1740-3553.png"
                                            alt="Cover of Journal of Anglican Studies"
                                            title="Journal of Anglican Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Anglican Studies" class="bookshelf-journal-title">Journal of
                                    Anglican Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91538" class="ember-view"><a href="/libraries/603/journals/33468?sort=title"
                                id="ember91539" class="bookshelf-journal ember-view">
                                <div id="ember91540" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2156-5414.png"
                                            alt="Cover of Journal of Animal Ethics" title="Journal of Animal Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Animal Ethics" class="bookshelf-journal-title">Journal of Animal
                                    Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91541" class="ember-view"><a href="/libraries/603/journals/367141?sort=title"
                                id="ember91542" class="bookshelf-journal ember-view">
                                <div id="ember91543" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2588-9559-3fbf6209-6540-4a28-9d70-dd852c89c996.webp"
                                            alt="Cover of Journal of Applied Animal Ethics Research"
                                            title="Journal of Applied Animal Ethics Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Applied Animal Ethics Research" class="bookshelf-journal-title">
                                    Journal of Applied Animal Ethics Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91545" class="ember-view"><a href="/libraries/603/journals/5059?sort=title"
                                id="ember91546" class="bookshelf-journal ember-view">
                                <div id="ember91547" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0264-3758.png"
                                            alt="Cover of Journal of Applied Philosophy"
                                            title="Journal of Applied Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Applied Philosophy" class="bookshelf-journal-title">Journal of
                                    Applied Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91549" class="ember-view"><a href="/libraries/603/journals/33427?sort=title"
                                id="ember91550" class="bookshelf-journal ember-view">
                                <div id="ember91551" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1526-1018.png"
                                            alt="Cover of The Journal of Ayn Rand Studies"
                                            title="The Journal of Ayn Rand Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Ayn Rand Studies" class="bookshelf-journal-title">The Journal
                                    of Ayn Rand Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91553" class="ember-view"><a href="/libraries/603/journals/40300?sort=title"
                                id="ember91554" class="bookshelf-journal ember-view">
                                <div id="ember91555" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-9231.png"
                                            alt="Cover of Journal of Biblical Literature"
                                            title="Journal of Biblical Literature">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Biblical Literature" class="bookshelf-journal-title">Journal of
                                    Biblical Literature</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91557" class="ember-view"><a href="/libraries/603/journals/477603?sort=title"
                                id="ember91558" class="bookshelf-journal ember-view">
                                <div id="ember91559" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2772-7955-c9c82675-7c8f-4c05-9e66-d2b451e72cf4.webp"
                                            alt="Cover of Journal of Black Religious Thought"
                                            title="Journal of Black Religious Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Black Religious Thought" class="bookshelf-journal-title">Journal
                                    of Black Religious Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91561" class="ember-view"><a href="/libraries/603/journals/367148?sort=title"
                                id="ember91562" class="bookshelf-journal ember-view">
                                <div id="ember91563" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-7160-05084122-d462-4d0e-8f80-9acb3362caf5.webp"
                                            alt="Cover of Journal of Chan Buddhism" title="Journal of Chan Buddhism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Chan Buddhism" class="bookshelf-journal-title">Journal of Chan
                                    Buddhism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91565" class="ember-view"><a href="/libraries/603/journals/11190?sort=title"
                                id="ember91566" class="bookshelf-journal ember-view">
                                <div id="ember91567" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0301-8121-c975c1f9-9692-45af-84bb-d8c7487b56f0.png"
                                            alt="Cover of Journal of Chinese Philosophy"
                                            title="Journal of Chinese Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Chinese Philosophy" class="bookshelf-journal-title">Journal of
                                    Chinese Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91569" class="ember-view"><a href="/libraries/603/journals/477599?sort=title"
                                id="ember91570" class="bookshelf-journal ember-view">
                                <div id="ember91571" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2772-6592-71e7073c-08ca-462d-9ddc-1512dda2d6ac.webp"
                                            alt="Cover of Journal of Chinese Theology"
                                            title="Journal of Chinese Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Chinese Theology" class="bookshelf-journal-title">Journal of
                                    Chinese Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91573" class="ember-view"><a href="/libraries/603/journals/10563?sort=title"
                                id="ember91574" class="bookshelf-journal ember-view">
                                <div id="ember91575" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0021-969X.png"
                                            alt="Cover of Journal of Church and State"
                                            title="Journal of Church and State">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Church and State" class="bookshelf-journal-title">Journal of
                                    Church and State</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91577" class="ember-view"><a href="/libraries/603/journals/16898?sort=title"
                                id="ember91578" class="bookshelf-journal ember-view">
                                <div id="ember91579" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1353-7903.png"
                                            alt="Cover of Journal of Contemporary Religion"
                                            title="Journal of Contemporary Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Contemporary Religion" class="bookshelf-journal-title">Journal of
                                    Contemporary Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91581" class="ember-view"><a href="/libraries/603/journals/36358?sort=title"
                                id="ember91582" class="bookshelf-journal ember-view">
                                <div id="ember91583" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/default-journal-cover.png"
                                            alt="Cover of Journal of Critical Realism"
                                            title="Journal of Critical Realism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Critical Realism" class="bookshelf-journal-title">Journal of
                                    Critical Realism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91585" class="ember-view"><a href="/libraries/603/journals/397373?sort=title"
                                id="ember91586" class="bookshelf-journal ember-view">
                                <div id="ember91587" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25220934.png"
                                            alt="Cover of Journal of Dharma Studies : Philosophy, Theology, Ethics, and Culture"
                                            title="Journal of Dharma Studies : Philosophy, Theology, Ethics, and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Dharma Studies : Philosophy, Theology, Ethics, and Culture"
                                    class="bookshelf-journal-title">Journal of Dharma Studies : Philosophy, Theology,
                                    Ethics, and Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91589" class="ember-view"><a href="/libraries/603/journals/66986?sort=title"
                                id="ember91590" class="bookshelf-journal ember-view">
                                <div id="ember91591" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2331-2521.png"
                                            alt="Cover of Journal of Disability and Religion"
                                            title="Journal of Disability and Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Disability and Religion" class="bookshelf-journal-title">Journal
                                    of Disability and Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91592" class="ember-view"><a href="/libraries/603/journals/153813?sort=title"
                                id="ember91593" class="bookshelf-journal ember-view">
                                <div id="ember91594" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2222-582X.png"
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
                        <div id="ember91595" class="ember-view"><a href="/libraries/603/journals/10801?sort=title"
                                id="ember91596" class="bookshelf-journal ember-view">
                                <div id="ember91597" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1067-6341.png"
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
                        <div id="ember91599" class="ember-view"><a href="/libraries/603/journals/168866?sort=title"
                                id="ember91600" class="bookshelf-journal ember-view">
                                <div id="ember91601" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/21966656-8f16c776-0c8d-426e-8f68-215a20eda57d.png"
                                            alt="Cover of Journal of Early Modern Christianity"
                                            title="Journal of Early Modern Christianity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Early Modern Christianity" class="bookshelf-journal-title">
                                    Journal of Early Modern Christianity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91603" class="ember-view"><a href="/libraries/603/journals/430880?sort=title"
                                id="ember91604" class="bookshelf-journal ember-view">
                                <div id="ember91605" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2730-5414-e2703c83-0ffc-4e5a-945c-e268a6636d7e.png"
                                            alt="Cover of Journal of East Asian Philosophy"
                                            title="Journal of East Asian Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of East Asian Philosophy" class="bookshelf-journal-title">Journal of
                                    East Asian Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91607" class="ember-view"><a href="/libraries/603/journals/315603?sort=title"
                                id="ember91608" class="bookshelf-journal ember-view">
                                <div id="ember91609" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1783-1520-0e722092-2aec-4018-bee7-855db53afc92.webp"
                                            alt="Cover of Journal of Eastern Christian Studies"
                                            title="Journal of Eastern Christian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Eastern Christian Studies" class="bookshelf-journal-title">
                                    Journal of Eastern Christian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91610" class="ember-view"><a href="/libraries/603/journals/19036?sort=title"
                                id="ember91611" class="bookshelf-journal ember-view">
                                <div id="ember91612" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-0469.png"
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
                        <div id="ember91614" class="ember-view"><a href="/libraries/603/journals/67044?sort=title"
                                id="ember91615" class="bookshelf-journal ember-view">
                                <div id="ember91616" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-0558.png"
                                            alt="Cover of Journal of Ecumenical Studies"
                                            title="Journal of Ecumenical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Ecumenical Studies" class="bookshelf-journal-title">Journal of
                                    Ecumenical Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91618" class="ember-view"><a href="/libraries/603/journals/33268?sort=title"
                                id="ember91619" class="bookshelf-journal ember-view">
                                <div id="ember91620" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1556-2646.png"
                                            alt="Cover of Journal of Empirical Research on Human Research Ethics"
                                            title="Journal of Empirical Research on Human Research Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Empirical Research on Human Research Ethics"
                                    class="bookshelf-journal-title">Journal of Empirical Research on Human Research
                                    Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91622" class="ember-view"><a href="/libraries/603/journals/9832?sort=title"
                                id="ember91623" class="bookshelf-journal ember-view">
                                <div id="ember91624" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0922-2936.png"
                                            alt="Cover of Journal of Empirical Theology"
                                            title="Journal of Empirical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Empirical Theology" class="bookshelf-journal-title">Journal of
                                    Empirical Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91626" class="ember-view"><a href="/libraries/603/journals/6370?sort=title"
                                id="ember91627" class="bookshelf-journal ember-view">
                                <div id="ember91628" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1382-4554.png"
                                            alt="Cover of The Journal of Ethics" title="The Journal of Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Ethics" class="bookshelf-journal-title">The Journal of Ethics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91630" class="ember-view"><a href="/libraries/603/journals/39678?sort=title"
                                id="ember91631" class="bookshelf-journal ember-view">
                                <div id="ember91632" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/default-journal-cover.png"
                                            alt="Cover of Journal of French and Francophone Philosophy"
                                            title="Journal of French and Francophone Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of French and Francophone Philosophy"
                                    class="bookshelf-journal-title">Journal of French and Francophone Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91634" class="ember-view"><a href="/libraries/603/journals/17306?sort=title"
                                id="ember91635" class="bookshelf-journal ember-view">
                                <div id="ember91636" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1744-9626.png"
                                            alt="Cover of Journal of Global Ethics" title="Journal of Global Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Global Ethics" class="bookshelf-journal-title">Journal of Global
                                    Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91638" class="ember-view"><a href="/libraries/603/journals/10550?sort=title"
                                id="ember91639" class="bookshelf-journal ember-view">
                                <div id="ember91640" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1756-4255.png"
                                            alt="Cover of The Journal of Hindu Studies"
                                            title="The Journal of Hindu Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Hindu Studies" class="bookshelf-journal-title">The Journal of
                                    Hindu Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91642" class="ember-view"><a href="/libraries/603/journals/67457?sort=title"
                                id="ember91643" class="bookshelf-journal ember-view">
                                <div id="ember91644" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0019-4344.png"
                                            alt="Cover of Journal of Indian and Buddhist Studies (Indogaku Bukkyogaku Kenkyu)"
                                            title="Journal of Indian and Buddhist Studies (Indogaku Bukkyogaku Kenkyu)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Indian and Buddhist Studies (Indogaku Bukkyogaku Kenkyu)"
                                    class="bookshelf-journal-title">Journal of Indian and Buddhist Studies (Indogaku
                                    Bukkyogaku Kenkyu)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91646" class="ember-view"><a href="/libraries/603/journals/126171?sort=title"
                                id="ember91647" class="bookshelf-journal ember-view">
                                <div id="ember91648" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0970-7794.png"
                                            alt="Cover of Journal of Indian Council of Philosophical Research"
                                            title="Journal of Indian Council of Philosophical Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Indian Council of Philosophical Research"
                                    class="bookshelf-journal-title">Journal of Indian Council of Philosophical Research
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91650" class="ember-view"><a href="/libraries/603/journals/7162?sort=title"
                                id="ember91651" class="bookshelf-journal ember-view">
                                <div id="ember91652" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-1791.png"
                                            alt="Cover of Journal of Indian Philosophy"
                                            title="Journal of Indian Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Indian Philosophy" class="bookshelf-journal-title">Journal of
                                    Indian Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91654" class="ember-view"><a href="/libraries/603/journals/67474?sort=title"
                                id="ember91655" class="bookshelf-journal ember-view">
                                <div id="ember91656" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1978-6301.png"
                                            alt="Cover of Journal of Indonesian Islam"
                                            title="Journal of Indonesian Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Indonesian Islam" class="bookshelf-journal-title">Journal of
                                    Indonesian Islam</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91658" class="ember-view"><a href="/libraries/603/journals/67600?sort=title"
                                id="ember91659" class="bookshelf-journal ember-view">
                                <div id="ember91660" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1755-0882.png"
                                            alt="Cover of Journal of International Political Theory"
                                            title="Journal of International Political Theory">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of International Political Theory" class="bookshelf-journal-title">
                                    Journal of International Political Theory</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91662" class="ember-view"><a href="/libraries/603/journals/9795?sort=title"
                                id="ember91663" class="bookshelf-journal ember-view">
                                <div id="ember91664" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1878-4631.png"
                                            alt="Cover of Journal of Islamic Manuscripts"
                                            title="Journal of Islamic Manuscripts">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Islamic Manuscripts" class="bookshelf-journal-title">Journal of
                                    Islamic Manuscripts</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91666" class="ember-view"><a href="/libraries/603/journals/35968?sort=title"
                                id="ember91667" class="bookshelf-journal ember-view">
                                <div id="ember91668" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2214-1324.png"
                                            alt="Cover of Journal of Jesuit Studies" title="Journal of Jesuit Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Jesuit Studies" class="bookshelf-journal-title">Journal of Jesuit
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91670" class="ember-view"><a href="/libraries/603/journals/9857?sort=title"
                                id="ember91671" class="bookshelf-journal ember-view">
                                <div id="ember91672" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1053-699X.png"
                                            alt="Cover of The Journal of Jewish Thought &amp; Philosophy"
                                            title="The Journal of Jewish Thought &amp; Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Jewish Thought &amp; Philosophy"
                                    class="bookshelf-journal-title">The Journal of Jewish Thought &amp; Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91674" class="ember-view"><a href="/libraries/603/journals/32214?sort=title"
                                id="ember91675" class="bookshelf-journal ember-view">
                                <div id="ember91676" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2093-7288.png"
                                            alt="Cover of Journal of Korean Religions"
                                            title="Journal of Korean Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Korean Religions" class="bookshelf-journal-title">Journal of
                                    Korean Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91677" class="ember-view"><a href="/libraries/603/journals/67782?sort=title"
                                id="ember91678" class="bookshelf-journal ember-view">
                                <div id="ember91679" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0748-0814.png"
                                            alt="Cover of Journal of Law and Religion"
                                            title="Journal of Law and Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Law and Religion" class="bookshelf-journal-title">Journal of Law
                                    and Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91680" class="ember-view"><a href="/libraries/603/journals/37400?sort=title"
                                id="ember91681" class="bookshelf-journal ember-view">
                                <div id="ember91682" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2212-6465.png"
                                            alt="Cover of Journal of Law, Religion and State"
                                            title="Journal of Law, Religion and State">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Law, Religion and State" class="bookshelf-journal-title">Journal
                                    of Law, Religion and State</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91683" class="ember-view"><a href="/libraries/603/journals/436773?sort=title"
                                id="ember91684" class="bookshelf-journal ember-view">
                                <div id="ember91685" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2633-6847.png"
                                            alt="Cover of Journal of Legal Philosophy"
                                            title="Journal of Legal Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Legal Philosophy" class="bookshelf-journal-title">Journal of
                                    Legal Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91687" class="ember-view"><a href="/libraries/603/journals/10338?sort=title"
                                id="ember91688" class="bookshelf-journal ember-view">
                                <div id="ember91689" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0360-5310.png"
                                            alt="Cover of Journal of Medicine and Philosophy"
                                            title="Journal of Medicine and Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Medicine and Philosophy" class="bookshelf-journal-title">Journal
                                    of Medicine and Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91691" class="ember-view"><a href="/libraries/603/journals/9848?sort=title"
                                id="ember91692" class="bookshelf-journal ember-view">
                                <div id="ember91693" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1740-4681.png"
                                            alt="Cover of Journal of Moral Philosophy"
                                            title="Journal of Moral Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Moral Philosophy" class="bookshelf-journal-title">Journal of
                                    Moral Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91694" class="ember-view"><a href="/libraries/603/journals/33420?sort=title"
                                id="ember91695" class="bookshelf-journal ember-view">
                                <div id="ember91696" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1933-6632.png"
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
                        <div id="ember91698" class="ember-view"><a href="/libraries/603/journals/68011?sort=title"
                                id="ember91699" class="bookshelf-journal ember-view">
                                <div id="ember91700" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0094-7342.png"
                                            alt="Cover of Journal of Mormon history" title="Journal of Mormon history">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Mormon history" class="bookshelf-journal-title">Journal of Mormon
                                    history</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91702" class="ember-view"><a href="/libraries/603/journals/33328?sort=title"
                                id="ember91703" class="bookshelf-journal ember-view">
                                <div id="ember91704" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0968-8005.png"
                                            alt="Cover of The Journal of Nietzsche Studies"
                                            title="The Journal of Nietzsche Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Nietzsche Studies" class="bookshelf-journal-title">The
                                    Journal of Nietzsche Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91706" class="ember-view"><a href="/libraries/603/journals/9847?sort=title"
                                id="ember91707" class="bookshelf-journal ember-view">
                                <div id="ember91708" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0966-7369.png"
                                            alt="Cover of Journal of Pentecostal Theology"
                                            title="Journal of Pentecostal Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Pentecostal Theology" class="bookshelf-journal-title">Journal of
                                    Pentecostal Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91710" class="ember-view"><a href="/libraries/603/journals/6071?sort=title"
                                id="ember91711" class="bookshelf-journal ember-view">
                                <div id="ember91712" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-3611.png"
                                            alt="Cover of Journal of Philosophical Logic"
                                            title="Journal of Philosophical Logic">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Philosophical Logic" class="bookshelf-journal-title">Journal of
                                    Philosophical Logic</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91714" class="ember-view"><a href="/libraries/603/journals/40059?sort=title"
                                id="ember91715" class="bookshelf-journal ember-view">
                                <div id="ember91716" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-362X.png"
                                            alt="Cover of The Journal of Philosophy" title="The Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Philosophy" class="bookshelf-journal-title">The Journal of
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91718" class="ember-view"><a href="/libraries/603/journals/33548?sort=title"
                                id="ember91719" class="bookshelf-journal ember-view">
                                <div id="ember91720" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2072-036X.png"
                                            alt="Cover of Journal of Philosophy: A Cross-Disciplinary Inquiry"
                                            title="Journal of Philosophy: A Cross-Disciplinary Inquiry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Philosophy: A Cross-Disciplinary Inquiry"
                                    class="bookshelf-journal-title">Journal of Philosophy: A Cross-Disciplinary Inquiry
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91722" class="ember-view"><a href="/libraries/603/journals/110691?sort=title"
                                id="ember91723" class="bookshelf-journal ember-view">
                                <div id="ember91724" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2204-2482-4b4c05b3-0bf4-4136-9fcf-dd9283546fa3.png"
                                            alt="Cover of Journal of Philosophy in Schools"
                                            title="Journal of Philosophy in Schools">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Philosophy in Schools" class="bookshelf-journal-title">Journal of
                                    Philosophy in Schools</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91726" class="ember-view"><a href="/libraries/603/journals/5250?sort=title"
                                id="ember91727" class="bookshelf-journal ember-view">
                                <div id="ember91728" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0963-8016.png"
                                            alt="Cover of Journal of Political Philosophy"
                                            title="Journal of Political Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Political Philosophy" class="bookshelf-journal-title">Journal of
                                    Political Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91730" class="ember-view"><a href="/libraries/603/journals/38814?sort=title"
                                id="ember91731" class="bookshelf-journal ember-view">
                                <div id="ember91732" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1465-3591.png"
                                            alt="Cover of Journal of Qur'anic Studies"
                                            title="Journal of Qur'anic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Qur'anic Studies" class="bookshelf-journal-title">Journal of
                                    Qur'anic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91734" class="ember-view"><a href="/libraries/603/journals/9763?sort=title"
                                id="ember91735" class="bookshelf-journal ember-view">
                                <div id="ember91736" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1872-5163.png"
                                            alt="Cover of Journal of Reformed Theology"
                                            title="Journal of Reformed Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Reformed Theology" class="bookshelf-journal-title">Journal of
                                    Reformed Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91739" class="ember-view"><a href="/libraries/603/journals/33311?sort=title"
                                id="ember91740" class="bookshelf-journal ember-view">
                                <div id="ember91741" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-4189.png"
                                            alt="Cover of The Journal of Religion" title="The Journal of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Religion" class="bookshelf-journal-title">The Journal of
                                    Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91743" class="ember-view"><a href="/libraries/603/journals/367151?sort=title"
                                id="ember91744" class="bookshelf-journal ember-view">
                                <div id="ember91745" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-7411-2e2bb1f4-a7b7-4769-872d-b76286d63907.webp"
                                            alt="Cover of Journal of Religion and Demography"
                                            title="Journal of Religion and Demography">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion and Demography" class="bookshelf-journal-title">Journal
                                    of Religion and Demography</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91747" class="ember-view"><a href="/libraries/603/journals/68389?sort=title"
                                id="ember91748" class="bookshelf-journal ember-view">
                                <div id="ember91749" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/10921311.png"
                                            alt="Cover of Journal of Religion &amp; Film"
                                            title="Journal of Religion &amp; Film">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion &amp; Film" class="bookshelf-journal-title">Journal of
                                    Religion &amp; Film</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91751" class="ember-view"><a href="/libraries/603/journals/38757?sort=title"
                                id="ember91752" class="bookshelf-journal ember-view">
                                <div id="ember91753" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1703-289X.png"
                                            alt="Cover of Journal of Religion and Popular Culture"
                                            title="Journal of Religion and Popular Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion and Popular Culture" class="bookshelf-journal-title">
                                    Journal of Religion and Popular Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91755" class="ember-view"><a href="/libraries/603/journals/9909?sort=title"
                                id="ember91756" class="bookshelf-journal ember-view">
                                <div id="ember91757" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-4200.png"
                                            alt="Cover of Journal of Religion in Africa"
                                            title="Journal of Religion in Africa">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion in Africa" class="bookshelf-journal-title">Journal of
                                    Religion in Africa</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91759" class="ember-view"><a href="/libraries/603/journals/9755?sort=title"
                                id="ember91760" class="bookshelf-journal ember-view">
                                <div id="ember91761" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1874-8910.png"
                                            alt="Cover of Journal of Religion in Europe"
                                            title="Journal of Religion in Europe">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion in Europe" class="bookshelf-journal-title">Journal of
                                    Religion in Europe</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91763" class="ember-view"><a href="/libraries/603/journals/37402?sort=title"
                                id="ember91764" class="bookshelf-journal ember-view">
                                <div id="ember91765" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2211-8330.png"
                                            alt="Cover of Journal of Religion in Japan"
                                            title="Journal of Religion in Japan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion in Japan" class="bookshelf-journal-title">Journal of
                                    Religion in Japan</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91767" class="ember-view"><a href="/libraries/603/journals/68393?sort=title"
                                id="ember91768" class="bookshelf-journal ember-view">
                                <div id="ember91769" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2165-9214.png"
                                            alt="Cover of Journal of Religion, Media and Digital Culture"
                                            title="Journal of Religion, Media and Digital Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religion, Media and Digital Culture"
                                    class="bookshelf-journal-title">Journal of Religion, Media and Digital Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91771" class="ember-view"><a href="/libraries/603/journals/5273?sort=title"
                                id="ember91772" class="bookshelf-journal ember-view">
                                <div id="ember91773" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0384-9694.png"
                                            alt="Cover of Journal of Religious Ethics"
                                            title="Journal of Religious Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Religious Ethics" class="bookshelf-journal-title">Journal of
                                    Religious Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91774" class="ember-view"><a href="/libraries/603/journals/5280?sort=title"
                                id="ember91775" class="bookshelf-journal ember-view">
                                <div id="ember91776" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-4227.png"
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
                        <div id="ember91778" class="ember-view"><a href="/libraries/603/journals/68432?sort=title"
                                id="ember91779" class="bookshelf-journal ember-view">
                                <div id="ember91780" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0919-6943.png"
                                            alt="Cover of Journal of Research Society of Buddhism and Cultural Heritage"
                                            title="Journal of Research Society of Buddhism and Cultural Heritage">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Research Society of Buddhism and Cultural Heritage"
                                    class="bookshelf-journal-title">Journal of Research Society of Buddhism and Cultural
                                    Heritage</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91782" class="ember-view"><a href="/libraries/603/journals/38815?sort=title"
                                id="ember91783" class="bookshelf-journal ember-view">
                                <div id="ember91784" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1479-6651.png"
                                            alt="Cover of Journal of Scottish Philosophy"
                                            title="Journal of Scottish Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Scottish Philosophy" class="bookshelf-journal-title">Journal of
                                    Scottish Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91786" class="ember-view"><a href="/libraries/603/journals/32216?sort=title"
                                id="ember91787" class="bookshelf-journal ember-view">
                                <div id="ember91788" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1748-9423.png"
                                            alt="Cover of Journal of Shi'a Islamic Studies"
                                            title="Journal of Shi'a Islamic Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Shi'a Islamic Studies" class="bookshelf-journal-title">Journal of
                                    Shi'a Islamic Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91790" class="ember-view"><a href="/libraries/603/journals/5335?sort=title"
                                id="ember91791" class="bookshelf-journal ember-view">
                                <div id="ember91792" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0047-2786.png"
                                            alt="Cover of Journal of Social Philosophy"
                                            title="Journal of Social Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Social Philosophy" class="bookshelf-journal-title">Journal of
                                    Social Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91794" class="ember-view"><a href="/libraries/603/journals/33325?sort=title"
                                id="ember91795" class="bookshelf-journal ember-view">
                                <div id="ember91796" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0891-625X.png"
                                            alt="Cover of The Journal of Speculative Philosophy"
                                            title="The Journal of Speculative Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Speculative Philosophy" class="bookshelf-journal-title">The
                                    Journal of Speculative Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91798" class="ember-view"><a href="/libraries/603/journals/9811?sort=title"
                                id="ember91799" class="bookshelf-journal ember-view">
                                <div id="ember91800" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2210-5948.png"
                                            alt="Cover of Journal of Sufi Studies" title="Journal of Sufi Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Sufi Studies" class="bookshelf-journal-title">Journal of Sufi
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91802" class="ember-view"><a href="/libraries/603/journals/10401?sort=title"
                                id="ember91803" class="bookshelf-journal ember-view">
                                <div id="ember91804" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0002-7189.png"
                                            alt="Cover of Journal of the American Academy of Religion"
                                            title="Journal of the American Academy of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the American Academy of Religion"
                                    class="bookshelf-journal-title">Journal of the American Academy of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91806" class="ember-view"><a href="/libraries/603/journals/102367?sort=title"
                                id="ember91807" class="bookshelf-journal ember-view">
                                <div id="ember91808" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1812-4461.png"
                                            alt="Cover of Journal of the European Pentecostal Theological Association (JEPTA)"
                                            title="Journal of the European Pentecostal Theological Association (JEPTA)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the European Pentecostal Theological Association (JEPTA)"
                                    class="bookshelf-journal-title">Journal of the European Pentecostal Theological
                                    Association (JEPTA)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91810" class="ember-view"><a href="/libraries/603/journals/10697?sort=title"
                                id="ember91811" class="bookshelf-journal ember-view">
                                <div id="ember91812" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-5053.png"
                                            alt="Cover of Journal of the History of Philosophy"
                                            title="Journal of the History of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Philosophy" class="bookshelf-journal-title">
                                    Journal of the History of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91814" class="ember-view"><a href="/libraries/603/journals/394351?sort=title"
                                id="ember91815" class="bookshelf-journal ember-view">
                                <div id="ember91816" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2666-318X-5b49ddb0-4973-4ca0-9321-1c05810727aa.webp"
                                            alt="Cover of Journal of the History of Women Philosophers and Scientists"
                                            title="Journal of the History of Women Philosophers and Scientists">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the History of Women Philosophers and Scientists"
                                    class="bookshelf-journal-title">Journal of the History of Women Philosophers and
                                    Scientists</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91818" class="ember-view"><a href="/libraries/603/journals/68902?sort=title"
                                id="ember91819" class="bookshelf-journal ember-view">
                                <div id="ember91820" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-7668.png"
                                            alt="Cover of Journal of the Japan Association for Philosophy of Science"
                                            title="Journal of the Japan Association for Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Japan Association for Philosophy of Science"
                                    class="bookshelf-journal-title">Journal of the Japan Association for Philosophy of
                                    Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91821" class="ember-view"><a href="/libraries/603/journals/9762?sort=title"
                                id="ember91822" class="bookshelf-journal ember-view">
                                <div id="ember91823" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1872-261X.png"
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
                        <div id="ember91825" class="ember-view"><a href="/libraries/603/journals/16139?sort=title"
                                id="ember91826" class="bookshelf-journal ember-view">
                                <div id="ember91827" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0094-8705.png"
                                            alt="Cover of Journal of the Philosophy of Sport"
                                            title="Journal of the Philosophy of Sport">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Philosophy of Sport" class="bookshelf-journal-title">Journal
                                    of the Philosophy of Sport</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91829" class="ember-view"><a href="/libraries/603/journals/32217?sort=title"
                                id="ember91830" class="bookshelf-journal ember-view">
                                <div id="ember91831" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1540-7942.png"
                                            alt="Cover of Journal of the Society of Christian Ethics"
                                            title="Journal of the Society of Christian Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Society of Christian Ethics" class="bookshelf-journal-title">
                                    Journal of the Society of Christian Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91833" class="ember-view"><a href="/libraries/603/journals/136801?sort=title"
                                id="ember91834" class="bookshelf-journal ember-view">
                                <div id="ember91835" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2255-2715-2e76f88b-da32-4067-81c9-dc21ef4bdfe8.png"
                                            alt="Cover of Journal of the Sociology and Theory of Religion"
                                            title="Journal of the Sociology and Theory of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of the Sociology and Theory of Religion"
                                    class="bookshelf-journal-title">Journal of the Sociology and Theory of Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91837" class="ember-view"><a href="/libraries/603/journals/69214?sort=title"
                                id="ember91838" class="bookshelf-journal ember-view">
                                <div id="ember91839" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2576-7933-c9fb6356-23c3-4155-bb9b-7951bcac061a.png"
                                            alt="Cover of Journal of Theological Interpretation"
                                            title="Journal of Theological Interpretation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Theological Interpretation" class="bookshelf-journal-title">
                                    Journal of Theological Interpretation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91841" class="ember-view"><a href="/libraries/603/journals/10403?sort=title"
                                id="ember91842" class="bookshelf-journal ember-view">
                                <div id="ember91843" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-5185.png"
                                            alt="Cover of The Journal of Theological Studies"
                                            title="The Journal of Theological Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Theological Studies" class="bookshelf-journal-title">The
                                    Journal of Theological Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91845" class="ember-view"><a href="/libraries/603/journals/3964?sort=title"
                                id="ember91846" class="bookshelf-journal ember-view">
                                <div id="ember91847" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-5363.png"
                                            alt="Cover of The Journal of Value Inquiry"
                                            title="The Journal of Value Inquiry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Journal of Value Inquiry" class="bookshelf-journal-title">The Journal of
                                    Value Inquiry</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91849" class="ember-view"><a href="/libraries/603/journals/69298?sort=title"
                                id="ember91850" class="bookshelf-journal ember-view">
                                <div id="ember91851" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1948-0733.png"
                                            alt="Cover of Journal of Values-Based Leadership"
                                            title="Journal of Values-Based Leadership">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Values-Based Leadership" class="bookshelf-journal-title">Journal
                                    of Values-Based Leadership</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91853" class="ember-view"><a href="/libraries/603/journals/102975?sort=title"
                                id="ember91854" class="bookshelf-journal ember-view">
                                <div id="ember91855" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2377-8784.png"
                                            alt="Cover of Journal of World Christianity"
                                            title="Journal of World Christianity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of World Christianity" class="bookshelf-journal-title">Journal of
                                    World Christianity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91857" class="ember-view"><a href="/libraries/603/journals/102979?sort=title"
                                id="ember91858" class="bookshelf-journal ember-view">
                                <div id="ember91859" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1741-0819.png"
                                            alt="Cover of Journal of Youth and Theology"
                                            title="Journal of Youth and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Journal of Youth and Theology" class="bookshelf-journal-title">Journal of
                                    Youth and Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91861" class="ember-view"><a href="/libraries/603/journals/32219?sort=title"
                                id="ember91862" class="bookshelf-journal ember-view">
                                <div id="ember91863" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0022-6858.png"
                                            alt="Cover of The Jurist: Studies in Church Law and Ministry"
                                            title="The Jurist: Studies in Church Law and Ministry">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Jurist: Studies in Church Law and Ministry"
                                    class="bookshelf-journal-title">The Jurist: Studies in Church Law and Ministry</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91865" class="ember-view"><a href="/libraries/603/journals/475349?sort=title"
                                id="ember91866" class="bookshelf-journal ember-view">
                                <div id="ember91867" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2528-6811-014a3666-97ca-43e5-b2a0-ac2afca00579.png"
                                            alt="Cover of Jurnal Filsafat" title="Jurnal Filsafat">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Filsafat" class="bookshelf-journal-title">Jurnal Filsafat</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91869" class="ember-view"><a href="/libraries/603/journals/339550?sort=title"
                                id="ember91870" class="bookshelf-journal ember-view">
                                <div id="ember91871" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1829-9903.png"
                                            alt="Cover of Jurnal Penelitian" title="Jurnal Penelitian">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Penelitian" class="bookshelf-journal-title">Jurnal Penelitian</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91873" class="ember-view"><a href="/libraries/603/journals/271396?sort=title"
                                id="ember91874" class="bookshelf-journal ember-view">
                                <div id="ember91875" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1829-8257.png"
                                            alt="Cover of Jurnal Studi Agama dan Masyarakat"
                                            title="Jurnal Studi Agama dan Masyarakat">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Studi Agama dan Masyarakat" class="bookshelf-journal-title">Jurnal
                                    Studi Agama dan Masyarakat</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91877" class="ember-view"><a href="/libraries/603/journals/319996?sort=title"
                                id="ember91878" class="bookshelf-journal ember-view">
                                <div id="ember91879" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2355-1011.png"
                                            alt="Cover of Jurnal Studia Insania" title="Jurnal Studia Insania">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Studia Insania" class="bookshelf-journal-title">Jurnal Studia Insania
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91881" class="ember-view"><a href="/libraries/603/journals/322397?sort=title"
                                id="ember91882" class="bookshelf-journal ember-view">
                                <div id="ember91883" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0853-3857.png"
                                            alt="Cover of Jurnal Theologia" title="Jurnal Theologia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Theologia" class="bookshelf-journal-title">Jurnal Theologia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91885" class="ember-view"><a href="/libraries/603/journals/69561?sort=title"
                                id="ember91886" class="bookshelf-journal ember-view">
                                <div id="ember91887" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1412-0909.png"
                                            alt="Cover of Jurnal Ushuluddin" title="Jurnal Ushuluddin">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Jurnal Ushuluddin" class="bookshelf-journal-title">Jurnal Ushuluddin</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91889" class="ember-view"><a href="/libraries/603/journals/118615?sort=title"
                                id="ember91890" class="bookshelf-journal ember-view">
                                <div id="ember91891" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1647659X-06bf59e2-6729-4dad-9d25-6c2d07a8d4e0.png"
                                            alt="Cover of Kairos : Journal of Philosophy &amp; Science"
                                            title="Kairos : Journal of Philosophy &amp; Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kairos : Journal of Philosophy &amp; Science"
                                    class="bookshelf-journal-title">Kairos : Journal of Philosophy &amp; Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91893" class="ember-view"><a href="/libraries/603/journals/69635?sort=title"
                                id="ember91894" class="bookshelf-journal ember-view">
                                <div id="ember91895" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1412-9590.png"
                                            alt="Cover of Kalimah" title="Kalimah">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kalimah" class="bookshelf-journal-title">Kalimah</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91897" class="ember-view"><a href="/libraries/603/journals/69642?sort=title"
                                id="ember91898" class="bookshelf-journal ember-view">
                                <div id="ember91899" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0378-0473-6fc97b5a-3459-4b5c-942c-8c2d6031a397.png"
                                            alt="Cover of Káñina : Revista de Artes y Letras de la Universidad de Costa Rica"
                                            title="Káñina : Revista de Artes y Letras de la Universidad de Costa Rica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Káñina : Revista de Artes y Letras de la Universidad de Costa Rica"
                                    class="bookshelf-journal-title">Káñina : Revista de Artes y Letras de la Universidad
                                    de Costa Rica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91901" class="ember-view"><a href="/libraries/603/journals/32561?sort=title"
                                id="ember91902" class="bookshelf-journal ember-view">
                                <div id="ember91903" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-1134.png"
                                            alt="Cover of Kant Studien" title="Kant Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kant Studien" class="bookshelf-journal-title">Kant Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91905" class="ember-view"><a href="/libraries/603/journals/103036?sort=title"
                                id="ember91906" class="bookshelf-journal ember-view">
                                <div id="ember91907" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1868-4602.png"
                                            alt="Cover of Kant yearbook" title="Kant yearbook">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kant yearbook" class="bookshelf-journal-title">Kant yearbook</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91909" class="ember-view"><a href="/libraries/603/journals/20829?sort=title"
                                id="ember91910" class="bookshelf-journal ember-view">
                                <div id="ember91911" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1369-4154.png"
                                            alt="Cover of Kantian Review" title="Kantian Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kantian Review" class="bookshelf-journal-title">Kantian Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91913" class="ember-view"><a href="/libraries/603/journals/124027?sort=title"
                                id="ember91914" class="bookshelf-journal ember-view">
                                <div id="ember91915" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2442-5451.png"
                                            alt="Cover of Kanz Philosophia: A Journal for Islamic Philosophy and Mysticism"
                                            title="Kanz Philosophia: A Journal for Islamic Philosophy and Mysticism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kanz Philosophia: A Journal for Islamic Philosophy and Mysticism"
                                    class="bookshelf-journal-title">Kanz Philosophia: A Journal for Islamic Philosophy
                                    and Mysticism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91917" class="ember-view"><a href="/libraries/603/journals/10698?sort=title"
                                id="ember91918" class="bookshelf-journal ember-view">
                                <div id="ember91919" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1054-6863.png"
                                            alt="Cover of Kennedy Institute of Ethics Journal"
                                            title="Kennedy Institute of Ethics Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kennedy Institute of Ethics Journal" class="bookshelf-journal-title">Kennedy
                                    Institute of Ethics Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91921" class="ember-view"><a href="/libraries/603/journals/69792?sort=title"
                                id="ember91922" class="bookshelf-journal ember-view">
                                <div id="ember91923" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0023-0707.png"
                                            alt="Cover of Kerygma und Dogma" title="Kerygma und Dogma">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kerygma und Dogma" class="bookshelf-journal-title">Kerygma und Dogma</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91925" class="ember-view"><a href="/libraries/603/journals/103066?sort=title"
                                id="ember91926" class="bookshelf-journal ember-view">
                                <div id="ember91927" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0932-9951.png"
                                            alt="Cover of Kirchliche Zeitgeschichte" title="Kirchliche Zeitgeschichte">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kirchliche Zeitgeschichte" class="bookshelf-journal-title">Kirchliche
                                    Zeitgeschichte</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91929" class="ember-view"><a href="/libraries/603/journals/262354?sort=title"
                                id="ember91930" class="bookshelf-journal ember-view">
                                <div id="ember91931" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2473-599X.png"
                                            alt="Cover of KNOW: A Journal on the Formation of Knowledge"
                                            title="KNOW: A Journal on the Formation of Knowledge">
                                        <!---->
                                    </div>
                                </div>
                                <div title="KNOW: A Journal on the Formation of Knowledge"
                                    class="bookshelf-journal-title">KNOW: A Journal on the Formation of Knowledge</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91933" class="ember-view"><a href="/libraries/603/journals/5513?sort=title"
                                id="ember91934" class="bookshelf-journal ember-view">
                                <div id="ember91935" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0897-1986.png"
                                            alt="Cover of Knowledge, Technology &amp; Policy"
                                            title="Knowledge, Technology &amp; Policy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Knowledge, Technology &amp; Policy" class="bookshelf-journal-title">
                                    Knowledge, Technology &amp; Policy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91937" class="ember-view"><a href="/libraries/603/journals/37102?sort=title"
                                id="ember91938" class="bookshelf-journal ember-view">
                                <div id="ember91939" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0023-270X.png"
                                            alt="Cover of Koers : Bulletin for Christian Scholarship"
                                            title="Koers : Bulletin for Christian Scholarship">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Koers : Bulletin for Christian Scholarship" class="bookshelf-journal-title">
                                    Koers : Bulletin for Christian Scholarship</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91941" class="ember-view"><a href="/libraries/603/journals/298899?sort=title"
                                id="ember91942" class="bookshelf-journal ember-view">
                                <div id="ember91943" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2334-6396.png"
                                            alt="Cover of Kom: Časopis za Religijske Nauke"
                                            title="Kom: Časopis za Religijske Nauke">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kom: Časopis za Religijske Nauke" class="bookshelf-journal-title">Kom:
                                    Časopis za Religijske Nauke</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91945" class="ember-view"><a href="/libraries/603/journals/303368?sort=title"
                                id="ember91946" class="bookshelf-journal ember-view">
                                <div id="ember91947" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1907-7238.png"
                                            alt="Cover of Konseling Religi: Jurnal Bimbingan Konseling Islam"
                                            title="Konseling Religi: Jurnal Bimbingan Konseling Islam">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Konseling Religi: Jurnal Bimbingan Konseling Islam"
                                    class="bookshelf-journal-title">Konseling Religi: Jurnal Bimbingan Konseling Islam
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91949" class="ember-view"><a href="/libraries/603/journals/70060?sort=title"
                                id="ember91950" class="bookshelf-journal ember-view">
                                <div id="ember91951" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0100-512X.png"
                                            alt="Cover of Kriterion : Revista de Filosofia"
                                            title="Kriterion : Revista de Filosofia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kriterion : Revista de Filosofia" class="bookshelf-journal-title">Kriterion
                                    : Revista de Filosofia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91953" class="ember-view"><a href="/libraries/603/journals/70070?sort=title"
                                id="ember91954" class="bookshelf-journal ember-view">
                                <div id="ember91955" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1908-7330.png"
                                            alt="Cover of Kritike: An Online Journal of Philosophy"
                                            title="Kritike: An Online Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Kritike: An Online Journal of Philosophy" class="bookshelf-journal-title">
                                    Kritike: An Online Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91957" class="ember-view"><a href="/libraries/603/journals/70407?sort=title"
                                id="ember91958" class="bookshelf-journal ember-view">
                                <div id="ember91959" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0023-9054.png"
                                            alt="Cover of Laval Théologique et Philosophique"
                                            title="Laval Théologique et Philosophique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Laval Théologique et Philosophique" class="bookshelf-journal-title">Laval
                                    Théologique et Philosophique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91961" class="ember-view"><a href="/libraries/603/journals/70531?sort=title"
                                id="ember91962" class="bookshelf-journal ember-view">
                                <div id="ember91963" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/default-journal-cover.png"
                                            alt="Cover of Lebenswelt : Aesthetics and Philosophy of Experience"
                                            title="Lebenswelt : Aesthetics and Philosophy of Experience">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Lebenswelt : Aesthetics and Philosophy of Experience"
                                    class="bookshelf-journal-title">Lebenswelt : Aesthetics and Philosophy of Experience
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91965" class="ember-view"><a href="/libraries/603/journals/45651?sort=title"
                                id="ember91966" class="bookshelf-journal ember-view">
                                <div id="ember91967" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1718-9977.png"
                                            alt="Cover of Les ateliers de l'éthique / The Ethics Forum"
                                            title="Les ateliers de l'éthique / The Ethics Forum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Les ateliers de l'éthique / The Ethics Forum"
                                    class="bookshelf-journal-title">Les ateliers de l'éthique / The Ethics Forum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91969" class="ember-view"><a href="/libraries/603/journals/36103?sort=title"
                                id="ember91970" class="bookshelf-journal ember-view">
                                <div id="ember91971" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2101-0056.png"
                                            alt="Cover of Les études philosophiques" title="Les études philosophiques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Les études philosophiques" class="bookshelf-journal-title">Les études
                                    philosophiques</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91973" class="ember-view"><a href="/libraries/603/journals/36469?sort=title"
                                id="ember91974" class="bookshelf-journal ember-view">
                                <div id="ember91975" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0024-3639.png"
                                            alt="Cover of The Linacre Quarterly" title="The Linacre Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Linacre Quarterly" class="bookshelf-journal-title">The Linacre Quarterly
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91978" class="ember-view"><a href="/libraries/603/journals/440935?sort=title"
                                id="ember91979" class="bookshelf-journal ember-view">
                                <div id="ember91980" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2435-9084.png"
                                            alt="Cover of Linkage : Studies in Applied Philosophy of Science"
                                            title="Linkage : Studies in Applied Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Linkage : Studies in Applied Philosophy of Science"
                                    class="bookshelf-journal-title">Linkage : Studies in Applied Philosophy of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91982" class="ember-view"><a href="/libraries/603/journals/10355?sort=title"
                                id="ember91983" class="bookshelf-journal ember-view">
                                <div id="ember91984" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0269-1205.png"
                                            alt="Cover of Literature and Theology" title="Literature and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Literature and Theology" class="bookshelf-journal-title">Literature and
                                    Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91986" class="ember-view"><a href="/libraries/603/journals/16322?sort=title"
                                id="ember91987" class="bookshelf-journal ember-view">
                                <div id="ember91988" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0458-063X.png"
                                            alt="Cover of Liturgy" title="Liturgy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Liturgy" class="bookshelf-journal-title">Liturgy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91990" class="ember-view"><a href="/libraries/603/journals/103244?sort=title"
                                id="ember91991" class="bookshelf-journal ember-view">
                                <div id="ember91992" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1575-6866-f45481b1-a55b-4e4e-9b0b-3242f5aca962.png"
                                            alt="Cover of Logos : Anales del Seminario de Metafísica"
                                            title="Logos : Anales del Seminario de Metafísica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Logos : Anales del Seminario de Metafísica" class="bookshelf-journal-title">
                                    Logos : Anales del Seminario de Metafísica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91994" class="ember-view"><a href="/libraries/603/journals/10710?sort=title"
                                id="ember91995" class="bookshelf-journal ember-view">
                                <div id="ember91996" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1091-6687.png"
                                            alt="Cover of Logos: A Journal of Catholic Thought and Culture"
                                            title="Logos: A Journal of Catholic Thought and Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Logos: A Journal of Catholic Thought and Culture"
                                    class="bookshelf-journal-title">Logos: A Journal of Catholic Thought and Culture
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember91998" class="ember-view"><a href="/libraries/603/journals/71115?sort=title"
                                id="ember91999" class="bookshelf-journal ember-view">
                                <div id="ember92000" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0716-7520.png"
                                            alt="Cover of Logos: Revista de Lingüística, Literatura y Filosofía"
                                            title="Logos: Revista de Lingüística, Literatura y Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Logos: Revista de Lingüística, Literatura y Filosofía"
                                    class="bookshelf-journal-title">Logos: Revista de Lingüística, Literatura y
                                    Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92002" class="ember-view"><a href="/libraries/603/journals/177053?sort=title"
                                id="ember92003" class="bookshelf-journal ember-view">
                                <div id="ember92004" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0024-7324.png"
                                            alt="Cover of Lumen Vitae" title="Lumen Vitae">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Lumen Vitae" class="bookshelf-journal-title">Lumen Vitae</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92006" class="ember-view"><a href="/libraries/603/journals/71272?sort=title"
                                id="ember92007" class="bookshelf-journal ember-view">
                                <div id="ember92008" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0024-7499.png"
                                            alt="Cover of Lutheran Quarterly" title="Lutheran Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Lutheran Quarterly" class="bookshelf-journal-title">Lutheran Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92010" class="ember-view"><a href="/libraries/603/journals/10910?sort=title"
                                id="ember92011" class="bookshelf-journal ember-view">
                                <div id="ember92012" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1556-8547.png"
                                            alt="Cover of Magic, Ritual, and Witchcraft"
                                            title="Magic, Ritual, and Witchcraft">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Magic, Ritual, and Witchcraft" class="bookshelf-journal-title">Magic,
                                    Ritual, and Witchcraft</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92014" class="ember-view"><a href="/libraries/603/journals/71673?sort=title"
                                id="ember92015" class="bookshelf-journal ember-view">
                                <div id="ember92016" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0100-6045.png"
                                            alt="Cover of Manuscrito" title="Manuscrito">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Manuscrito" class="bookshelf-journal-title">Manuscrito</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92018" class="ember-view"><a href="/libraries/603/journals/35944?sort=title"
                                id="ember92019" class="bookshelf-journal ember-view">
                                <div id="ember92020" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1743-2200.png"
                                            alt="Cover of Material Religion: The Journal of Objects, Art and Belief"
                                            title="Material Religion: The Journal of Objects, Art and Belief">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Material Religion: The Journal of Objects, Art and Belief"
                                    class="bookshelf-journal-title">Material Religion: The Journal of Objects, Art and
                                    Belief</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92022" class="ember-view"><a href="/libraries/603/journals/72003?sort=title"
                                id="ember92023" class="bookshelf-journal ember-view">
                                <div id="ember92024" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1470-8078.png"
                                            alt="Cover of Max Weber Studies" title="Max Weber Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Max Weber Studies" class="bookshelf-journal-title">Max Weber Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92025" class="ember-view"><a href="/libraries/603/journals/72051?sort=title"
                                id="ember92026" class="bookshelf-journal ember-view">
                                <div id="ember92027" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0025-6285-11164183-e98a-4d15-9c32-ef3cd15f6f0f.png"
                                            alt="Cover of Meander" title="Meander">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Meander" class="bookshelf-journal-title">Meander</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92028" class="ember-view"><a href="/libraries/603/journals/103386?sort=title"
                                id="ember92029" class="bookshelf-journal ember-view">
                                <div id="ember92030" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0934-7453.png"
                                            alt="Cover of Mediaevistik" title="Mediaevistik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mediaevistik" class="bookshelf-journal-title">Mediaevistik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92031" class="ember-view"><a href="/libraries/603/journals/36456?sort=title"
                                id="ember92032" class="bookshelf-journal ember-view">
                                <div id="ember92033" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2046-5726.png"
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
                        <div id="ember92034" class="ember-view"><a href="/libraries/603/journals/36399?sort=title"
                                id="ember92035" class="bookshelf-journal ember-view">
                                <div id="ember92036" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1366-0691.png"
                                            alt="Cover of Medieval Sermon Studies" title="Medieval Sermon Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Medieval Sermon Studies" class="bookshelf-journal-title">Medieval Sermon
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92037" class="ember-view"><a href="/libraries/603/journals/123903?sort=title"
                                id="ember92038" class="bookshelf-journal ember-view">
                                <div id="ember92039" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0211-3473-40db99e8-31b1-4c25-8aa9-f220706e2ade.png"
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
                        <div id="ember92041" class="ember-view"><a href="/libraries/603/journals/5520?sort=title"
                                id="ember92042" class="bookshelf-journal ember-view">
                                <div id="ember92043" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0026-1068.png"
                                            alt="Cover of Metaphilosophy" title="Metaphilosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Metaphilosophy" class="bookshelf-journal-title">Metaphilosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92045" class="ember-view"><a href="/libraries/603/journals/433381?sort=title"
                                id="ember92046" class="bookshelf-journal ember-view">
                                <div id="ember92047" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2515-8279-82196b76-7eb9-4c5f-aa27-d3559e027c25.png"
                                            alt="Cover of Metaphysics" title="Metaphysics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Metaphysics" class="bookshelf-journal-title">Metaphysics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92049" class="ember-view"><a href="/libraries/603/journals/5958?sort=title"
                                id="ember92050" class="bookshelf-journal ember-view">
                                <div id="ember92051" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0815-0796.png"
                                            alt="Cover of Metascience" title="Metascience">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Metascience" class="bookshelf-journal-title">Metascience</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92053" class="ember-view"><a href="/libraries/603/journals/103449?sort=title"
                                id="ember92054" class="bookshelf-journal ember-view">
                                <div id="ember92055" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0327-0289-bf6c24d9-3421-43e2-b650-f4ffe7ba0a31.webp"
                                            alt="Cover of Méthexis" title="Méthexis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Méthexis" class="bookshelf-journal-title">Méthexis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92057" class="ember-view"><a href="/libraries/603/journals/9923?sort=title"
                                id="ember92058" class="bookshelf-journal ember-view">
                                <div id="ember92059" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0943-3058.png"
                                            alt="Cover of Method &amp; Theory in the Study of Religion"
                                            title="Method &amp; Theory in the Study of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Method &amp; Theory in the Study of Religion"
                                    class="bookshelf-journal-title">Method &amp; Theory in the Study of Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92060" class="ember-view"><a href="/libraries/603/journals/72770?sort=title"
                                id="ember92061" class="bookshelf-journal ember-view">
                                <div id="ember92062" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2167-8634.png"
                                            alt="Cover of Michigan Academician" title="Michigan Academician">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Michigan Academician" class="bookshelf-journal-title">Michigan Academician
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92064" class="ember-view"><a href="/libraries/603/journals/5562?sort=title"
                                id="ember92065" class="bookshelf-journal ember-view">
                                <div id="ember92066" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0363-6550.png"
                                            alt="Cover of Midwest Studies In Philosophy"
                                            title="Midwest Studies In Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Midwest Studies In Philosophy" class="bookshelf-journal-title">Midwest
                                    Studies In Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92067" class="ember-view"><a href="/libraries/603/journals/72999?sort=title"
                                id="ember92068" class="bookshelf-journal ember-view">
                                <div id="ember92069" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1867-030X.png"
                                            alt="Cover of Millennium" title="Millennium">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Millennium" class="bookshelf-journal-title">Millennium</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92071" class="ember-view"><a href="/libraries/603/journals/10398?sort=title"
                                id="ember92072" class="bookshelf-journal ember-view">
                                <div id="ember92073" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0026-4423.png"
                                            alt="Cover of Mind" title="Mind">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mind" class="bookshelf-journal-title">Mind</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92075" class="ember-view"><a href="/libraries/603/journals/6548?sort=title"
                                id="ember92076" class="bookshelf-journal ember-view">
                                <div id="ember92077" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0268-1064.png"
                                            alt="Cover of Mind &amp; Language" title="Mind &amp; Language">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mind &amp; Language" class="bookshelf-journal-title">Mind &amp; Language
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92079" class="ember-view"><a href="/libraries/603/journals/73114?sort=title"
                                id="ember92080" class="bookshelf-journal ember-view">
                                <div id="ember92081" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0091-8296.png"
                                            alt="Cover of Missiology" title="Missiology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Missiology" class="bookshelf-journal-title">Missiology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92083" class="ember-view"><a href="/libraries/603/journals/9833?sort=title"
                                id="ember92084" class="bookshelf-journal ember-view">
                                <div id="ember92085" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0168-9789.png"
                                            alt="Cover of Mission Studies" title="Mission Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mission Studies" class="bookshelf-journal-title">Mission Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92087" class="ember-view"><a href="/libraries/603/journals/73115?sort=title"
                                id="ember92088" class="bookshelf-journal ember-view">
                                <div id="ember92089" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0256-9507.png"
                                            alt="Cover of Missionalia" title="Missionalia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Missionalia" class="bookshelf-journal-title">Missionalia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92091" class="ember-view"><a href="/libraries/603/journals/38790?sort=title"
                                id="ember92092" class="bookshelf-journal ember-view">
                                <div id="ember92093" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1353-1425.png"
                                            alt="Cover of Modern Believing" title="Modern Believing">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modern Believing" class="bookshelf-journal-title">Modern Believing</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92095" class="ember-view"><a href="/libraries/603/journals/10411?sort=title"
                                id="ember92096" class="bookshelf-journal ember-view">
                                <div id="ember92097" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0276-1114.png"
                                            alt="Cover of Modern Judaism" title="Modern Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modern Judaism" class="bookshelf-journal-title">Modern Judaism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92099" class="ember-view"><a href="/libraries/603/journals/5614?sort=title"
                                id="ember92100" class="bookshelf-journal ember-view">
                                <div id="ember92101" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0266-7177.png"
                                            alt="Cover of Modern Theology" title="Modern Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Modern Theology" class="bookshelf-journal-title">Modern Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92103" class="ember-view"><a href="/libraries/603/journals/103534?sort=title"
                                id="ember92104" class="bookshelf-journal ember-view">
                                <div id="ember92105" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1321-2753.png"
                                            alt="Cover of Monash Bioethics Review" title="Monash Bioethics Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monash Bioethics Review" class="bookshelf-journal-title">Monash Bioethics
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92107" class="ember-view"><a href="/libraries/603/journals/33534?sort=title"
                                id="ember92108" class="bookshelf-journal ember-view">
                                <div id="ember92109" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0026-9662.png"
                                            alt="Cover of Monist" title="Monist">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monist" class="bookshelf-journal-title">Monist</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92110" class="ember-view"><a href="/libraries/603/journals/73515?sort=title"
                                id="ember92111" class="bookshelf-journal ember-view">
                                <div id="ember92112" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0254-9948.png"
                                            alt="Cover of Monumenta Serica" title="Monumenta Serica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Monumenta Serica" class="bookshelf-journal-title">Monumenta Serica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92114" class="ember-view"><a href="/libraries/603/journals/103559?sort=title"
                                id="ember92115" class="bookshelf-journal ember-view">
                                <div id="ember92116" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2194-5616.png"
                                            alt="Cover of Moral Philosophy and Politics"
                                            title="Moral Philosophy and Politics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Moral Philosophy and Politics" class="bookshelf-journal-title">Moral
                                    Philosophy and Politics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92118" class="ember-view"><a href="/libraries/603/journals/237504?sort=title"
                                id="ember92119" class="bookshelf-journal ember-view">
                                <div id="ember92120" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2148-5631.png"
                                            alt="Cover of Mütefekkir" title="Mütefekkir">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Mütefekkir" class="bookshelf-journal-title">Mütefekkir</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92122" class="ember-view"><a href="/libraries/603/journals/3940?sort=title"
                                id="ember92123" class="bookshelf-journal ember-view">
                                <div id="ember92124" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1871-4757.png"
                                            alt="Cover of NanoEthics" title="NanoEthics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="NanoEthics" class="bookshelf-journal-title">NanoEthics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92126" class="ember-view"><a href="/libraries/603/journals/10682?sort=title"
                                id="ember92127" class="bookshelf-journal ember-view">
                                <div id="ember92128" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2157-1732.png"
                                            alt="Cover of Narrative Inquiry in Bioethics"
                                            title="Narrative Inquiry in Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Narrative Inquiry in Bioethics" class="bookshelf-journal-title">Narrative
                                    Inquiry in Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92130" class="ember-view"><a href="/libraries/603/journals/365308?sort=title"
                                id="ember92131" class="bookshelf-journal ember-view">
                                <div id="ember92132" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25184628.png"
                                            alt="Cover of Neotestamentica" title="Neotestamentica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Neotestamentica" class="bookshelf-journal-title">Neotestamentica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92134" class="ember-view"><a href="/libraries/603/journals/32582?sort=title"
                                id="ember92135" class="bookshelf-journal ember-view">
                                <div id="ember92136" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1612-9520.png"
                                            alt="Cover of Neue Zeitschrift für Systematische Theologie und Religionsphilosophie"
                                            title="Neue Zeitschrift für Systematische Theologie und Religionsphilosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Neue Zeitschrift für Systematische Theologie und Religionsphilosophie"
                                    class="bookshelf-journal-title">Neue Zeitschrift für Systematische Theologie und
                                    Religionsphilosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92138" class="ember-view"><a href="/libraries/603/journals/6975?sort=title"
                                id="ember92139" class="bookshelf-journal ember-view">
                                <div id="ember92140" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1874-5490.png"
                                            alt="Cover of Neuroethics" title="Neuroethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Neuroethics" class="bookshelf-journal-title">Neuroethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92142" class="ember-view"><a href="/libraries/603/journals/7339?sort=title"
                                id="ember92143" class="bookshelf-journal ember-view">
                                <div id="ember92144" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0028-4289.png"
                                            alt="Cover of New Blackfriars" title="New Blackfriars">
                                        <!---->
                                    </div>
                                </div>
                                <div title="New Blackfriars" class="bookshelf-journal-title">New Blackfriars</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92146" class="ember-view"><a href="/libraries/603/journals/18978?sort=title"
                                id="ember92147" class="bookshelf-journal ember-view">
                                <div id="ember92148" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0028-6885.png"
                                            alt="Cover of New Testament Studies" title="New Testament Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="New Testament Studies" class="bookshelf-journal-title">New Testament Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92150" class="ember-view"><a href="/libraries/603/journals/32641?sort=title"
                                id="ember92151" class="bookshelf-journal ember-view">
                                <div id="ember92152" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-0790.png"
                                            alt="Cover of Nietzsche-Studien" title="Nietzsche-Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nietzsche-Studien" class="bookshelf-journal-title">Nietzsche-Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92153" class="ember-view"><a href="/libraries/603/journals/75172?sort=title"
                                id="ember92154" class="bookshelf-journal ember-view">
                                <div id="ember92155" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1891-8131.png"
                                            alt="Cover of Nordic Journal of Human Rights"
                                            title="Nordic Journal of Human Rights">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nordic Journal of Human Rights" class="bookshelf-journal-title">Nordic
                                    Journal of Human Rights</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92157" class="ember-view"><a href="/libraries/603/journals/119977?sort=title"
                                id="ember92158" class="bookshelf-journal ember-view">
                                <div id="ember92159" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2242-248X.png"
                                            alt="Cover of Nordic Wittgenstein Review"
                                            title="Nordic Wittgenstein Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nordic Wittgenstein Review" class="bookshelf-journal-title">Nordic
                                    Wittgenstein Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92161" class="ember-view"><a href="/libraries/603/journals/128912?sort=title"
                                id="ember92162" class="bookshelf-journal ember-view">
                                <div id="ember92163" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0029-1943.png"
                                            alt="Cover of Norsk filosofisk tidsskrift"
                                            title="Norsk filosofisk tidsskrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Norsk filosofisk tidsskrift" class="bookshelf-journal-title">Norsk
                                    filosofisk tidsskrift</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92165" class="ember-view"><a href="/libraries/603/journals/11239?sort=title"
                                id="ember92166" class="bookshelf-journal ember-view">
                                <div id="ember92167" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0029-4624.png"
                                            alt="Cover of Noûs" title="Noûs">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Noûs" class="bookshelf-journal-title">Noûs</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92169" class="ember-view"><a href="/libraries/603/journals/75447?sort=title"
                                id="ember92170" class="bookshelf-journal ember-view">
                                <div id="ember92171" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0029-4845.png"
                                            alt="Cover of Nouvelle Revue Théologique"
                                            title="Nouvelle Revue Théologique">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nouvelle Revue Théologique" class="bookshelf-journal-title">Nouvelle Revue
                                    Théologique</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92173" class="ember-view"><a href="/libraries/603/journals/75477?sort=title"
                                id="ember92174" class="bookshelf-journal ember-view">
                                <div id="ember92175" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/24705861.png"
                                            alt="Cover of Nova et Vetera" title="Nova et Vetera">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nova et Vetera" class="bookshelf-journal-title">Nova et Vetera</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92177" class="ember-view"><a href="/libraries/603/journals/33259?sort=title"
                                id="ember92178" class="bookshelf-journal ember-view">
                                <div id="ember92179" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1092-6690.png"
                                            alt="Cover of Nova Religio" title="Nova Religio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Nova Religio" class="bookshelf-journal-title">Nova Religio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92181" class="ember-view"><a href="/libraries/603/journals/9891?sort=title"
                                id="ember92182" class="bookshelf-journal ember-view">
                                <div id="ember92183" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-1009.png"
                                            alt="Cover of Novum Testamentum" title="Novum Testamentum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Novum Testamentum" class="bookshelf-journal-title">Novum Testamentum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92185" class="ember-view"><a href="/libraries/603/journals/363559?sort=title"
                                id="ember92186" class="bookshelf-journal ember-view">
                                <div id="ember92187" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2542-6583.png"
                                            alt="Cover of NTT Journal for Theology and the Study of Religion"
                                            title="NTT Journal for Theology and the Study of Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="NTT Journal for Theology and the Study of Religion"
                                    class="bookshelf-journal-title">NTT Journal for Theology and the Study of Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92189" class="ember-view"><a href="/libraries/603/journals/76220?sort=title"
                                id="ember92190" class="bookshelf-journal ember-view">
                                <div id="ember92191" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2312-3621-84a1e56e-ea38-4c3f-8332-ddac932005cd.png"
                                            alt="Cover of Old Testament Essays" title="Old Testament Essays">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Old Testament Essays" class="bookshelf-journal-title">Old Testament Essays
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92193" class="ember-view"><a href="/libraries/603/journals/290251?sort=title"
                                id="ember92194" class="bookshelf-journal ember-view">
                                <div id="ember92195" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2543-8875.png"
                                            alt="Cover of Open Philosophy" title="Open Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Open Philosophy" class="bookshelf-journal-title">Open Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92197" class="ember-view"><a href="/libraries/603/journals/76438?sort=title"
                                id="ember92198" class="bookshelf-journal ember-view">
                                <div id="ember92199" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2300-6579.png"
                                            alt="Cover of Open Theology" title="Open Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Open Theology" class="bookshelf-journal-title">Open Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92201" class="ember-view"><a href="/libraries/603/journals/37391?sort=title"
                                id="ember92202" class="bookshelf-journal ember-view">
                                <div id="ember92203" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0078-6527.png"
                                            alt="Cover of Oriens" title="Oriens">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Oriens" class="bookshelf-journal-title">Oriens</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92204" class="ember-view"><a href="/libraries/603/journals/10310?sort=title"
                                id="ember92205" class="bookshelf-journal ember-view">
                                <div id="ember92206" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2047-0770.png"
                                            alt="Cover of Oxford Journal of Law and Religion"
                                            title="Oxford Journal of Law and Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Oxford Journal of Law and Religion" class="bookshelf-journal-title">Oxford
                                    Journal of Law and Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92209" class="ember-view"><a href="/libraries/603/journals/5839?sort=title"
                                id="ember92210" class="bookshelf-journal ember-view">
                                <div id="ember92211" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0279-0750.png"
                                            alt="Cover of Pacific Philosophical Quarterly"
                                            title="Pacific Philosophical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pacific Philosophical Quarterly" class="bookshelf-journal-title">Pacific
                                    Philosophical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92213" class="ember-view"><a href="/libraries/603/journals/145812?sort=title"
                                id="ember92214" class="bookshelf-journal ember-view">
                                <div id="ember92215" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1505-6872-ccbae7c3-d95f-48a7-8592-dc73dbe9eaf6.png"
                                            alt="Cover of Paedagogia Christiana" title="Paedagogia Christiana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Paedagogia Christiana" class="bookshelf-journal-title">Paedagogia Christiana
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92216" class="ember-view"><a href="/libraries/603/journals/36356?sort=title"
                                id="ember92217" class="bookshelf-journal ember-view">
                                <div id="ember92218" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-0328.png"
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
                        <div id="ember92220" class="ember-view"><a href="/libraries/603/journals/36240?sort=title"
                                id="ember92221" class="bookshelf-journal ember-view">
                                <div id="ember92222" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2271-1880.png"
                                            alt="Cover of Pardès" title="Pardès">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pardès" class="bookshelf-journal-title">Pardès</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92224" class="ember-view"><a href="/libraries/603/journals/125198?sort=title"
                                id="ember92225" class="bookshelf-journal ember-view">
                                <div id="ember92226" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2683-9636-76fea7e6-8354-4d8d-9652-a290158baa63.png"
                                            alt="Cover of Patristica et Mediaevalia" title="Patristica et Mediaevalia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Patristica et Mediaevalia" class="bookshelf-journal-title">Patristica et
                                    Mediaevalia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92228" class="ember-view"><a href="/libraries/603/journals/125214?sort=title"
                                id="ember92229" class="bookshelf-journal ember-view">
                                <div id="ember92230" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-4749.png"
                                            alt="Cover of Pensamiento : Revista Trimestral de Investigacion e Informacion Filosofica"
                                            title="Pensamiento : Revista Trimestral de Investigacion e Informacion Filosofica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pensamiento : Revista Trimestral de Investigacion e Informacion Filosofica"
                                    class="bookshelf-journal-title">Pensamiento : Revista Trimestral de Investigacion e
                                    Informacion Filosofica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92232" class="ember-view"><a href="/libraries/603/journals/39774?sort=title"
                                id="ember92233" class="bookshelf-journal ember-view">
                                <div id="ember92234" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2041-3599.png"
                                            alt="Cover of PentecoStudies" title="PentecoStudies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="PentecoStudies" class="bookshelf-journal-title">PentecoStudies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92236" class="ember-view"><a href="/libraries/603/journals/33867?sort=title"
                                id="ember92237" class="bookshelf-journal ember-view">
                                <div id="ember92238" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2284-7308.png"
                                            alt="Cover of Perichoresis" title="Perichoresis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Perichoresis" class="bookshelf-journal-title">Perichoresis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92240" class="ember-view"><a href="/libraries/603/journals/143954?sort=title"
                                id="ember92241" class="bookshelf-journal ember-view">
                                <div id="ember92242" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2083-8018.png"
                                            alt="Cover of The Person and the Challenges. The Journal of Theology, Education, Canon Law and Social Studies Inspired by Pope John Paul II"
                                            title="The Person and the Challenges. The Journal of Theology, Education, Canon Law and Social Studies Inspired by Pope John Paul II">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Person and the Challenges. The Journal of Theology, Education, Canon Law and Social Studies Inspired by Pope John Paul II"
                                    class="bookshelf-journal-title">The Person and the Challenges. The Journal of
                                    Theology, Education, Canon Law and Social Studies Inspired by Pope John Paul II
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92244" class="ember-view"><a href="/libraries/603/journals/77539?sort=title"
                                id="ember92245" class="bookshelf-journal ember-view">
                                <div id="ember92246" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2027-5382-29090a58-ae2e-44c8-8dc8-be63249fce8f.png"
                                            alt="Cover of Persona y Bioética" title="Persona y Bioética">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Persona y Bioética" class="bookshelf-journal-title">Persona y Bioética</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92248" class="ember-view"><a href="/libraries/603/journals/104076?sort=title"
                                id="ember92249" class="bookshelf-journal ember-view">
                                <div id="ember92250" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0102-4469-de93faa9-f85e-4c2a-afc8-56b5430e27dd.png"
                                            alt="Cover of Perspectiva Teologica" title="Perspectiva Teologica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Perspectiva Teologica" class="bookshelf-journal-title">Perspectiva Teologica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92252" class="ember-view"><a href="/libraries/603/journals/17600?sort=title"
                                id="ember92253" class="bookshelf-journal ember-view">
                                <div id="ember92254" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1045-7097.png"
                                            alt="Cover of Perspectives on Political Science"
                                            title="Perspectives on Political Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Perspectives on Political Science" class="bookshelf-journal-title">
                                    Perspectives on Political Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92256" class="ember-view"><a href="/libraries/603/journals/77755?sort=title"
                                id="ember92257" class="bookshelf-journal ember-view">
                                <div id="ember92258" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1911-1576.png"
                                            alt="Cover of PhaenEx" title="PhaenEx">
                                        <!---->
                                    </div>
                                </div>
                                <div title="PhaenEx" class="bookshelf-journal-title">PhaenEx</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92260" class="ember-view"><a href="/libraries/603/journals/77813?sort=title"
                                id="ember92261" class="bookshelf-journal ember-view">
                                <div id="ember92262" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1913-4711-20fdc473-618d-4c9c-8ffb-a8fafd02e66b.png"
                                            alt="Cover of Phenomenology &amp; Practice"
                                            title="Phenomenology &amp; Practice">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Phenomenology &amp; Practice" class="bookshelf-journal-title">Phenomenology
                                    &amp; Practice</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92264" class="ember-view"><a href="/libraries/603/journals/5457?sort=title"
                                id="ember92265" class="bookshelf-journal ember-view">
                                <div id="ember92266" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1568-7759.png"
                                            alt="Cover of Phenomenology and the Cognitive Sciences"
                                            title="Phenomenology and the Cognitive Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Phenomenology and the Cognitive Sciences" class="bookshelf-journal-title">
                                    Phenomenology and the Cognitive Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92268" class="ember-view"><a href="/libraries/603/journals/77866?sort=title"
                                id="ember92269" class="bookshelf-journal ember-view">
                                <div id="ember92270" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1533-628X-6b1c351f-34a0-4fd3-9f97-4acc52ec3096.png"
                                            alt="Cover of Philosophers' Imprint" title="Philosophers' Imprint">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophers' Imprint" class="bookshelf-journal-title">Philosophers' Imprint
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92272" class="ember-view"><a href="/libraries/603/journals/1037?sort=title"
                                id="ember92273" class="bookshelf-journal ember-view">
                                <div id="ember92274" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-3893.png"
                                            alt="Cover of Philosophia" title="Philosophia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophia" class="bookshelf-journal-title">Philosophia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92276" class="ember-view"><a href="/libraries/603/journals/10415?sort=title"
                                id="ember92277" class="bookshelf-journal ember-view">
                                <div id="ember92278" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1744-6406-8055c54a-a1cd-4e70-9e6b-336e44ad8ca8.png"
                                            alt="Cover of Philosophia Mathematica" title="Philosophia Mathematica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophia Mathematica" class="bookshelf-journal-title">Philosophia
                                    Mathematica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92280" class="ember-view"><a href="/libraries/603/journals/104125?sort=title"
                                id="ember92281" class="bookshelf-journal ember-view">
                                <div id="ember92282" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8035.png"
                                            alt="Cover of Philosophia Reformata" title="Philosophia Reformata">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophia Reformata" class="bookshelf-journal-title">Philosophia Reformata
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92284" class="ember-view"><a href="/libraries/603/journals/5908?sort=title"
                                id="ember92285" class="bookshelf-journal ember-view">
                                <div id="ember92286" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8051.png"
                                            alt="Cover of Philosophical Books" title="Philosophical Books">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Books" class="bookshelf-journal-title">Philosophical Books
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92288" class="ember-view"><a href="/libraries/603/journals/16591?sort=title"
                                id="ember92289" class="bookshelf-journal ember-view">
                                <div id="ember92290" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1386-9795.png"
                                            alt="Cover of Philosophical Explorations"
                                            title="Philosophical Explorations">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Explorations" class="bookshelf-journal-title">Philosophical
                                    Explorations</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92292" class="ember-view"><a href="/libraries/603/journals/11253?sort=title"
                                id="ember92293" class="bookshelf-journal ember-view">
                                <div id="ember92294" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-806X.png"
                                            alt="Cover of The Philosophical Forum" title="The Philosophical Forum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Philosophical Forum" class="bookshelf-journal-title">The Philosophical
                                    Forum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92296" class="ember-view"><a href="/libraries/603/journals/5932?sort=title"
                                id="ember92297" class="bookshelf-journal ember-view">
                                <div id="ember92298" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0190-0536.png"
                                            alt="Cover of Philosophical Investigations"
                                            title="Philosophical Investigations">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Investigations" class="bookshelf-journal-title">Philosophical
                                    Investigations</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92300" class="ember-view"><a href="/libraries/603/journals/7280?sort=title"
                                id="ember92301" class="bookshelf-journal ember-view">
                                <div id="ember92302" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1533-6077.png"
                                            alt="Cover of Philosophical Issues" title="Philosophical Issues">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Issues" class="bookshelf-journal-title">Philosophical Issues
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92304" class="ember-view"><a href="/libraries/603/journals/16326?sort=title"
                                id="ember92305" class="bookshelf-journal ember-view">
                                <div id="ember92306" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1478-6435.png"
                                            alt="Cover of Philosophical Magazine" title="Philosophical Magazine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Magazine" class="bookshelf-journal-title">Philosophical
                                    Magazine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92308" class="ember-view"><a href="/libraries/603/journals/16836?sort=title"
                                id="ember92309" class="bookshelf-journal ember-view">
                                <div id="ember92310" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1362-3036-17493d16-33af-4c2b-a055-92849b111328.png"
                                            alt="Cover of Philosophical Magazine Letters"
                                            title="Philosophical Magazine Letters">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Magazine Letters" class="bookshelf-journal-title">
                                    Philosophical Magazine Letters</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92312" class="ember-view"><a href="/libraries/603/journals/15584?sort=title"
                                id="ember92313" class="bookshelf-journal ember-view">
                                <div id="ember92314" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0556-8641.png"
                                            alt="Cover of Philosophical Papers" title="Philosophical Papers">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Papers" class="bookshelf-journal-title">Philosophical Papers
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92316" class="ember-view"><a href="/libraries/603/journals/7393?sort=title"
                                id="ember92317" class="bookshelf-journal ember-view">
                                <div id="ember92318" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1520-8583.png"
                                            alt="Cover of Philosophical Perspectives"
                                            title="Philosophical Perspectives">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Perspectives" class="bookshelf-journal-title">Philosophical
                                    Perspectives</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92320" class="ember-view"><a href="/libraries/603/journals/17081?sort=title"
                                id="ember92321" class="bookshelf-journal ember-view">
                                <div id="ember92322" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0951-5089.png"
                                            alt="Cover of Philosophical Psychology" title="Philosophical Psychology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Psychology" class="bookshelf-journal-title">Philosophical
                                    Psychology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92324" class="ember-view"><a href="/libraries/603/journals/5944?sort=title"
                                id="ember92325" class="bookshelf-journal ember-view">
                                <div id="ember92326" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8094.png"
                                            alt="Cover of The Philosophical Quarterly"
                                            title="The Philosophical Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Philosophical Quarterly" class="bookshelf-journal-title">The
                                    Philosophical Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92328" class="ember-view"><a href="/libraries/603/journals/18288?sort=title"
                                id="ember92329" class="bookshelf-journal ember-view">
                                <div id="ember92330" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8108.png"
                                            alt="Cover of Philosophical Review" title="Philosophical Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Review" class="bookshelf-journal-title">Philosophical Review
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92332" class="ember-view"><a href="/libraries/603/journals/3853?sort=title"
                                id="ember92333" class="bookshelf-journal ember-view">
                                <div id="ember92334" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8116.png"
                                            alt="Cover of Philosophical Studies" title="Philosophical Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Studies" class="bookshelf-journal-title">Philosophical Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92336" class="ember-view"><a href="/libraries/603/journals/33528?sort=title"
                                id="ember92337" class="bookshelf-journal ember-view">
                                <div id="ember92338" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0276-2080.png"
                                            alt="Cover of Philosophical Topics" title="Philosophical Topics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Topics" class="bookshelf-journal-title">Philosophical Topics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92339" class="ember-view"><a href="/libraries/603/journals/18045?sort=title"
                                id="ember92340" class="bookshelf-journal ember-view">
                                <div id="ember92341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1364-503X.png"
                                            alt="Cover of Philosophical Transactions of the Royal Society A: Mathematical, Physical and Engineering Sciences"
                                            title="Philosophical Transactions of the Royal Society A: Mathematical, Physical and Engineering Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Transactions of the Royal Society A: Mathematical, Physical and Engineering Sciences"
                                    class="bookshelf-journal-title">Philosophical Transactions of the Royal Society A:
                                    Mathematical, Physical and Engineering Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92343" class="ember-view"><a href="/libraries/603/journals/18050?sort=title"
                                id="ember92344" class="bookshelf-journal ember-view">
                                <div id="ember92345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0962-8436.png"
                                            alt="Cover of Philosophical Transactions of the Royal Society B: Biological Sciences"
                                            title="Philosophical Transactions of the Royal Society B: Biological Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophical Transactions of the Royal Society B: Biological Sciences"
                                    class="bookshelf-journal-title">Philosophical Transactions of the Royal Society B:
                                    Biological Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92347" class="ember-view"><a href="/libraries/603/journals/36206?sort=title"
                                id="ember92348" class="bookshelf-journal ember-view">
                                <div id="ember92349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1968-391X.png"
                                            alt="Cover of Philosophie" title="Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophie" class="bookshelf-journal-title">Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92351" class="ember-view"><a href="/libraries/603/journals/148711?sort=title"
                                id="ember92352" class="bookshelf-journal ember-view">
                                <div id="ember92353" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2409-9287.png"
                                            alt="Cover of Philosophies" title="Philosophies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophies" class="bookshelf-journal-title">Philosophies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92355" class="ember-view"><a href="/libraries/603/journals/38930?sort=title"
                                id="ember92356" class="bookshelf-journal ember-view">
                                <div id="ember92357" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8159.png"
                                            alt="Cover of Philosophische Rundschau" title="Philosophische Rundschau">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophische Rundschau" class="bookshelf-journal-title">Philosophische
                                    Rundschau</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92359" class="ember-view"><a href="/libraries/603/journals/36207?sort=title"
                                id="ember92360" class="bookshelf-journal ember-view">
                                <div id="ember92361" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1283-7091.png"
                                            alt="Cover of Le philosophoire" title="Le philosophoire">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Le philosophoire" class="bookshelf-journal-title">Le philosophoire</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92363" class="ember-view"><a href="/libraries/603/journals/123950?sort=title"
                                id="ember92364" class="bookshelf-journal ember-view">
                                <div id="ember92365" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1414-2236.png"
                                            alt="Cover of Philósophos : Revista de Filosofia"
                                            title="Philósophos : Revista de Filosofia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philósophos : Revista de Filosofia" class="bookshelf-journal-title">
                                    Philósophos : Revista de Filosofia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92367" class="ember-view"><a href="/libraries/603/journals/18992?sort=title"
                                id="ember92368" class="bookshelf-journal ember-view">
                                <div id="ember92369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8191.png"
                                            alt="Cover of Philosophy" title="Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy" class="bookshelf-journal-title">Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92371" class="ember-view"><a href="/libraries/603/journals/6755?sort=title"
                                id="ember92372" class="bookshelf-journal ember-view">
                                <div id="ember92373" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8205.png"
                                            alt="Cover of Philosophy and Phenomenological Research"
                                            title="Philosophy and Phenomenological Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy and Phenomenological Research" class="bookshelf-journal-title">
                                    Philosophy and Phenomenological Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92375" class="ember-view"><a href="/libraries/603/journals/9606?sort=title"
                                id="ember92376" class="bookshelf-journal ember-view">
                                <div id="ember92377" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-3915.png"
                                            alt="Cover of Philosophy &amp; Public Affairs"
                                            title="Philosophy &amp; Public Affairs">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy &amp; Public Affairs" class="bookshelf-journal-title">Philosophy
                                    &amp; Public Affairs</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92379" class="ember-view"><a href="/libraries/603/journals/33324?sort=title"
                                id="ember92380" class="bookshelf-journal ember-view">
                                <div id="ember92381" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8213.png"
                                            alt="Cover of Philosophy and Rhetoric" title="Philosophy and Rhetoric">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy and Rhetoric" class="bookshelf-journal-title">Philosophy and
                                    Rhetoric</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92383" class="ember-view"><a href="/libraries/603/journals/8574?sort=title"
                                id="ember92384" class="bookshelf-journal ember-view">
                                <div id="ember92385" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0191-4537.png"
                                            alt="Cover of Philosophy &amp; Social Criticism"
                                            title="Philosophy &amp; Social Criticism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy &amp; Social Criticism" class="bookshelf-journal-title">
                                    Philosophy &amp; Social Criticism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92387" class="ember-view"><a href="/libraries/603/journals/2422?sort=title"
                                id="ember92388" class="bookshelf-journal ember-view">
                                <div id="ember92389" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2210-5433.png"
                                            alt="Cover of Philosophy &amp; Technology"
                                            title="Philosophy &amp; Technology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy &amp; Technology" class="bookshelf-journal-title">Philosophy
                                    &amp; Technology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92391" class="ember-view"><a href="/libraries/603/journals/6108?sort=title"
                                id="ember92392" class="bookshelf-journal ember-view">
                                <div id="ember92393" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1747-9991.png"
                                            alt="Cover of Philosophy Compass" title="Philosophy Compass">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy Compass" class="bookshelf-journal-title">Philosophy Compass</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92395" class="ember-view"><a href="/libraries/603/journals/10745?sort=title"
                                id="ember92396" class="bookshelf-journal ember-view">
                                <div id="ember92397" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8221.png"
                                            alt="Cover of Philosophy East and West" title="Philosophy East and West">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy East and West" class="bookshelf-journal-title">Philosophy East
                                    and West</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92399" class="ember-view"><a href="/libraries/603/journals/8747?sort=title"
                                id="ember92400" class="bookshelf-journal ember-view">
                                <div id="ember92401" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1747-5341.png"
                                            alt="Cover of Philosophy, Ethics, and Humanities in Medicine"
                                            title="Philosophy, Ethics, and Humanities in Medicine">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy, Ethics, and Humanities in Medicine"
                                    class="bookshelf-journal-title">Philosophy, Ethics, and Humanities in Medicine</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92403" class="ember-view"><a href="/libraries/603/journals/33566?sort=title"
                                id="ember92404" class="bookshelf-journal ember-view">
                                <div id="ember92405" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1740-3812.png"
                                            alt="Cover of Philosophy of Management" title="Philosophy of Management">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy of Management" class="bookshelf-journal-title">Philosophy of
                                    Management</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92406" class="ember-view"><a href="/libraries/603/journals/33295?sort=title"
                                id="ember92407" class="bookshelf-journal ember-view">
                                <div id="ember92408" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8248-29b58211-0d8c-479a-ab14-99e0de5f5fb1.png"
                                            alt="Cover of Philosophy of Science" title="Philosophy of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy of Science" class="bookshelf-journal-title">Philosophy of Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92410" class="ember-view"><a href="/libraries/603/journals/875?sort=title"
                                id="ember92411" class="bookshelf-journal ember-view">
                                <div id="ember92412" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-3931.png"
                                            alt="Cover of Philosophy of the Social Sciences"
                                            title="Philosophy of the Social Sciences">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy of the Social Sciences" class="bookshelf-journal-title">
                                    Philosophy of the Social Sciences</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92414" class="ember-view"><a href="/libraries/603/journals/10707?sort=title"
                                id="ember92415" class="bookshelf-journal ember-view">
                                <div id="ember92416" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1071-6076.png"
                                            alt="Cover of Philosophy, Psychiatry, &amp; Psychology"
                                            title="Philosophy, Psychiatry, &amp; Psychology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy, Psychiatry, &amp; Psychology" class="bookshelf-journal-title">
                                    Philosophy, Psychiatry, &amp; Psychology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92418" class="ember-view"><a href="/libraries/603/journals/306417?sort=title"
                                id="ember92419" class="bookshelf-journal ember-view">
                                <div id="ember92420" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2475-3025.png"
                                            alt="Cover of Philosophy, Theory, and Practice in Biology"
                                            title="Philosophy, Theory, and Practice in Biology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy, Theory, and Practice in Biology"
                                    class="bookshelf-journal-title">Philosophy, Theory, and Practice in Biology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92422" class="ember-view"><a href="/libraries/603/journals/33577?sort=title"
                                id="ember92423" class="bookshelf-journal ember-view">
                                <div id="ember92424" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8256.png"
                                            alt="Cover of Philosophy Today" title="Philosophy Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Philosophy Today" class="bookshelf-journal-title">Philosophy Today</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92426" class="ember-view"><a href="/libraries/603/journals/9809?sort=title"
                                id="ember92427" class="bookshelf-journal ember-view">
                                <div id="ember92428" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0031-8868.png"
                                            alt="Cover of Phronesis" title="Phronesis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Phronesis" class="bookshelf-journal-title">Phronesis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92430" class="ember-view"><a href="/libraries/603/journals/339282?sort=title"
                                id="ember92431" class="bookshelf-journal ember-view">
                                <div id="ember92432" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1561-4018.png"
                                            alt="Cover of Phronimon : Journal of the South African Society for Greek Philosophy and the Humanities"
                                            title="Phronimon : Journal of the South African Society for Greek Philosophy and the Humanities">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Phronimon : Journal of the South African Society for Greek Philosophy and the Humanities"
                                    class="bookshelf-journal-title">Phronimon : Journal of the South African Society for
                                    Greek Philosophy and the Humanities</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92434" class="ember-view"><a href="/libraries/603/journals/33461?sort=title"
                                id="ember92435" class="bookshelf-journal ember-view">
                                <div id="ember92436" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1930-7365.png"
                                            alt="Cover of The Pluralist" title="The Pluralist">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Pluralist" class="bookshelf-journal-title">The Pluralist</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92438" class="ember-view"><a href="/libraries/603/journals/9922?sort=title"
                                id="ember92439" class="bookshelf-journal ember-view">
                                <div id="ember92440" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0272-0965.png"
                                            alt="Cover of Pneuma" title="Pneuma">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pneuma" class="bookshelf-journal-title">Pneuma</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92442" class="ember-view"><a href="/libraries/603/journals/36362?sort=title"
                                id="ember92443" class="bookshelf-journal ember-view">
                                <div id="ember92444" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1462-317X.png"
                                            alt="Cover of Political Theology" title="Political Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Political Theology" class="bookshelf-journal-title">Political Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92447" class="ember-view"><a href="/libraries/603/journals/39750?sort=title"
                                id="ember92448" class="bookshelf-journal ember-view">
                                <div id="ember92449" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1528-0268.png"
                                            alt="Cover of Pomegranate: The International Journal of Pagan Studies"
                                            title="Pomegranate: The International Journal of Pagan Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pomegranate: The International Journal of Pagan Studies"
                                    class="bookshelf-journal-title">Pomegranate: The International Journal of Pagan
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92451" class="ember-view"><a href="/libraries/603/journals/36417?sort=title"
                                id="ember92452" class="bookshelf-journal ember-view">
                                <div id="ember92453" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1756-073X.png"
                                            alt="Cover of Practical Theology" title="Practical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Practical Theology" class="bookshelf-journal-title">Practical Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92454" class="ember-view"><a href="/libraries/603/journals/78625?sort=title"
                                id="ember92455" class="bookshelf-journal ember-view">
                                <div id="ember92456" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2081-8130.png"
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
                        <div id="ember92458" class="ember-view"><a href="/libraries/603/journals/231318?sort=title"
                                id="ember92459" class="bookshelf-journal ember-view">
                                <div id="ember92460" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-4688-95762535-5bb3-4835-b75b-64af38fe7f75.png"
                                            alt="Cover of Praxis Filosófica" title="Praxis Filosófica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Praxis Filosófica" class="bookshelf-journal-title">Praxis Filosófica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92462" class="ember-view"><a href="/libraries/603/journals/33419?sort=title"
                                id="ember92463" class="bookshelf-journal ember-view">
                                <div id="ember92464" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2161-2196.png"
                                            alt="Cover of Preternature: Critical and Historical Studies on the Preternatural"
                                            title="Preternature: Critical and Historical Studies on the Preternatural">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Preternature: Critical and Historical Studies on the Preternatural"
                                    class="bookshelf-journal-title">Preternature: Critical and Historical Studies on the
                                    Preternatural</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92466" class="ember-view"><a href="/libraries/603/journals/78789?sort=title"
                                id="ember92467" class="bookshelf-journal ember-view">
                                <div id="ember92468" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0867-5392-76db44de-9168-47be-afeb-fea65537cd46.png"
                                            alt="Cover of Principia" title="Principia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Principia" class="bookshelf-journal-title">Principia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92470" class="ember-view"><a href="/libraries/603/journals/78788?sort=title"
                                id="ember92471" class="bookshelf-journal ember-view">
                                <div id="ember92472" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1414-4247.png"
                                            alt="Cover of Principia : An International Journal of Epistemology"
                                            title="Principia : An International Journal of Epistemology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Principia : An International Journal of Epistemology"
                                    class="bookshelf-journal-title">Principia : An International Journal of Epistemology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92474" class="ember-view"><a href="/libraries/603/journals/111771?sort=title"
                                id="ember92475" class="bookshelf-journal ember-view">
                                <div id="ember92476" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1983-2109-e7cbdca0-71ab-49b7-ae20-83fb2d45251e.png"
                                            alt="Cover of Princípios : Revista de Filosofia"
                                            title="Princípios : Revista de Filosofia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Princípios : Revista de Filosofia" class="bookshelf-journal-title">
                                    Princípios : Revista de Filosofia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92478" class="ember-view"><a href="/libraries/603/journals/375822?sort=title"
                                id="ember92479" class="bookshelf-journal ember-view">
                                <div id="ember92480" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/26318334.png"
                                            alt="Cover of Pro Ecclesia : A Journal of Catholic and Evangelical Theology"
                                            title="Pro Ecclesia : A Journal of Catholic and Evangelical Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Pro Ecclesia : A Journal of Catholic and Evangelical Theology"
                                    class="bookshelf-journal-title">Pro Ecclesia : A Journal of Catholic and Evangelical
                                    Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92482" class="ember-view"><a href="/libraries/603/journals/78866?sort=title"
                                id="ember92483" class="bookshelf-journal ember-view">
                                <div id="ember92484" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1392-1126.png"
                                            alt="Cover of Problemos" title="Problemos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Problemos" class="bookshelf-journal-title">Problemos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92486" class="ember-view"><a href="/libraries/603/journals/8657?sort=title"
                                id="ember92487" class="bookshelf-journal ember-view">
                                <div id="ember92488" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0066-7374.png"
                                            alt="Cover of Proceedings of the Aristotelian Society (Hardback)"
                                            title="Proceedings of the Aristotelian Society (Hardback)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Proceedings of the Aristotelian Society (Hardback)"
                                    class="bookshelf-journal-title">Proceedings of the Aristotelian Society (Hardback)
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92490" class="ember-view"><a href="/libraries/603/journals/37434?sort=title"
                                id="ember92491" class="bookshelf-journal ember-view">
                                <div id="ember92492" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2213-4417-ac2580c0-c960-4111-b692-ecb9f5a20670.webp"
                                            alt="Cover of Proceedings of the Boston Area Colloquium of Ancient Philosophy"
                                            title="Proceedings of the Boston Area Colloquium of Ancient Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Proceedings of the Boston Area Colloquium of Ancient Philosophy"
                                    class="bookshelf-journal-title">Proceedings of the Boston Area Colloquium of Ancient
                                    Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92494" class="ember-view"><a href="/libraries/603/journals/321496?sort=title"
                                id="ember92495" class="bookshelf-journal ember-view">
                                <div id="ember92496" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2502-728X.png"
                                            alt="Cover of Psikis: Jurnal Psikologi Islami"
                                            title="Psikis: Jurnal Psikologi Islami">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Psikis: Jurnal Psikologi Islami" class="bookshelf-journal-title">Psikis:
                                    Jurnal Psikologi Islami</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92498" class="ember-view"><a href="/libraries/603/journals/79743?sort=title"
                                id="ember92499" class="bookshelf-journal ember-view">
                                <div id="ember92500" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1099-9922.png"
                                            alt="Cover of Public Integrity" title="Public Integrity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Public Integrity" class="bookshelf-journal-title">Public Integrity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92502" class="ember-view"><a href="/libraries/603/journals/182392?sort=title"
                                id="ember92503" class="bookshelf-journal ember-view">
                                <div id="ember92504" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2341-1414-22abb04d-d87f-4fcc-bd42-1710433b9ebb.png"
                                            alt="Cover of Quaderns de Filosofia" title="Quaderns de Filosofia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quaderns de Filosofia" class="bookshelf-journal-title">Quaderns de Filosofia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92505" class="ember-view"><a href="/libraries/603/journals/10913?sort=title"
                                id="ember92506" class="bookshelf-journal ember-view">
                                <div id="ember92507" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0033-5053.png"
                                            alt="Cover of Quaker History" title="Quaker History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quaker History" class="bookshelf-journal-title">Quaker History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92509" class="ember-view"><a href="/libraries/603/journals/79930?sort=title"
                                id="ember92510" class="bookshelf-journal ember-view">
                                <div id="ember92511" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1363-013X.png"
                                            alt="Cover of Quaker Studies" title="Quaker Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quaker Studies" class="bookshelf-journal-title">Quaker Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92512" class="ember-view"><a href="/libraries/603/journals/79960?sort=title"
                                id="ember92513" class="bookshelf-journal ember-view">
                                <div id="ember92514" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1314-7374.png"
                                            alt="Cover of Quanta" title="Quanta">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Quanta" class="bookshelf-journal-title">Quanta</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92516" class="ember-view"><a href="/libraries/603/journals/33529?sort=title"
                                id="ember92517" class="bookshelf-journal ember-view">
                                <div id="ember92518" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1541-4760.png"
                                            alt="Cover of Questions: Philosophy for Young People"
                                            title="Questions: Philosophy for Young People">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Questions: Philosophy for Young People" class="bookshelf-journal-title">
                                    Questions: Philosophy for Young People</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92520" class="ember-view"><a href="/libraries/603/journals/6043?sort=title"
                                id="ember92521" class="bookshelf-journal ember-view">
                                <div id="ember92522" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-0006.png"
                                            alt="Cover of Ratio" title="Ratio">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ratio" class="bookshelf-journal-title">Ratio</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92524" class="ember-view"><a href="/libraries/603/journals/6031?sort=title"
                                id="ember92525" class="bookshelf-journal ember-view">
                                <div id="ember92526" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1467-9337.png"
                                            alt="Cover of Ratio Juris" title="Ratio Juris">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ratio Juris" class="bookshelf-journal-title">Ratio Juris</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92528" class="ember-view"><a href="/libraries/603/journals/36140?sort=title"
                                id="ember92529" class="bookshelf-journal ember-view">
                                <div id="ember92530" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2104-3884.png"
                                            alt="Cover of Recherches de Science Religieuse"
                                            title="Recherches de Science Religieuse">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Recherches de Science Religieuse" class="bookshelf-journal-title">Recherches
                                    de Science Religieuse</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92531" class="ember-view"><a href="/libraries/603/journals/80617?sort=title"
                                id="ember92532" class="bookshelf-journal ember-view">
                                <div id="ember92533" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1955-2416.png"
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
                        <div id="ember92535" class="ember-view"><a href="/libraries/603/journals/164909?sort=title"
                                id="ember92536" class="bookshelf-journal ember-view">
                                <div id="ember92537" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2308-0906.png"
                                            alt="Cover of Redescriptions" title="Redescriptions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Redescriptions" class="bookshelf-journal-title">Redescriptions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92539" class="ember-view"><a href="/libraries/603/journals/80760?sort=title"
                                id="ember92540" class="bookshelf-journal ember-view">
                                <div id="ember92541" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0215-6253.png"
                                            alt="Cover of Refleksi" title="Refleksi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Refleksi" class="bookshelf-journal-title">Refleksi</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92542" class="ember-view"><a href="/libraries/603/journals/36406?sort=title"
                                id="ember92543" class="bookshelf-journal ember-view">
                                <div id="ember92544" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1357-4175.png"
                                            alt="Cover of Reformation" title="Reformation">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Reformation" class="bookshelf-journal-title">Reformation</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92545" class="ember-view"><a href="/libraries/603/journals/36361?sort=title"
                                id="ember92546" class="bookshelf-journal ember-view">
                                <div id="ember92547" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1462-2459.png"
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
                        <div id="ember92549" class="ember-view"><a href="/libraries/603/journals/303374?sort=title"
                                id="ember92550" class="bookshelf-journal ember-view">
                                <div id="ember92551" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1411-1632.png"
                                            alt="Cover of Religia" title="Religia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religia" class="bookshelf-journal-title">Religia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92553" class="ember-view"><a href="/libraries/603/journals/80873?sort=title"
                                id="ember92554" class="bookshelf-journal ember-view">
                                <div id="ember92555" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0100-8587.png"
                                            alt="Cover of Religião e Sociedade" title="Religião e Sociedade">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religião e Sociedade" class="bookshelf-journal-title">Religião e Sociedade
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92557" class="ember-view"><a href="/libraries/603/journals/262362?sort=title"
                                id="ember92558" class="bookshelf-journal ember-view">
                                <div id="ember92559" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2088-6330.png"
                                            alt="Cover of Religió : Jurnal Studi Agama-Agama"
                                            title="Religió : Jurnal Studi Agama-Agama">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religió : Jurnal Studi Agama-Agama" class="bookshelf-journal-title">Religió
                                    : Jurnal Studi Agama-Agama</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92561" class="ember-view"><a href="/libraries/603/journals/17614?sort=title"
                                id="ember92562" class="bookshelf-journal ember-view">
                                <div id="ember92563" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-721X.png"
                                            alt="Cover of Religion" title="Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion" class="bookshelf-journal-title">Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92565" class="ember-view"><a href="/libraries/603/journals/33261?sort=title"
                                id="ember92566" class="bookshelf-journal ember-view">
                                <div id="ember92567" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1052-1151.png"
                                            alt="Cover of Religion and American Culture"
                                            title="Religion and American Culture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion and American Culture" class="bookshelf-journal-title">Religion and
                                    American Culture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92569" class="ember-view"><a href="/libraries/603/journals/360099?sort=title"
                                id="ember92570" class="bookshelf-journal ember-view">
                                <div id="ember92571" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-8051-48d94b10-5012-4c06-8a11-ac3e5a1b0fb7.webp"
                                            alt="Cover of Religion &amp; Gender" title="Religion &amp; Gender">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion &amp; Gender" class="bookshelf-journal-title">Religion &amp; Gender
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92573" class="ember-view"><a href="/libraries/603/journals/39893?sort=title"
                                id="ember92574" class="bookshelf-journal ember-view">
                                <div id="ember92575" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2150-9298.png"
                                            alt="Cover of Religion and Society: Advances in Research"
                                            title="Religion and Society: Advances in Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion and Society: Advances in Research" class="bookshelf-journal-title">
                                    Religion and Society: Advances in Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92577" class="ember-view"><a href="/libraries/603/journals/9869?sort=title"
                                id="ember92578" class="bookshelf-journal ember-view">
                                <div id="ember92579" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1079-9265.png"
                                            alt="Cover of Religion and the Arts" title="Religion and the Arts">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion and the Arts" class="bookshelf-journal-title">Religion and the Arts
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92581" class="ember-view"><a href="/libraries/603/journals/9855?sort=title"
                                id="ember92582" class="bookshelf-journal ember-view">
                                <div id="ember92583" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1023-0807.png"
                                            alt="Cover of Religion and Theology" title="Religion and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion and Theology" class="bookshelf-journal-title">Religion and Theology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92585" class="ember-view"><a href="/libraries/603/journals/7349?sort=title"
                                id="ember92586" class="bookshelf-journal ember-view">
                                <div id="ember92587" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1749-8171.png"
                                            alt="Cover of Religion Compass" title="Religion Compass">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion Compass" class="bookshelf-journal-title">Religion Compass</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92589" class="ember-view"><a href="/libraries/603/journals/422990?sort=title"
                                id="ember92590" class="bookshelf-journal ember-view">
                                <div id="ember92591" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2699-9064-34907230-7a9e-4f2f-aee6-5b3b4f4df9e3.png"
                                            alt="Cover of Religion Unterrichten" title="Religion Unterrichten">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religion Unterrichten" class="bookshelf-journal-title">Religion Unterrichten
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92593" class="ember-view"><a href="/libraries/603/journals/37139?sort=title"
                                id="ember92594" class="bookshelf-journal ember-view">
                                <div id="ember92595" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2077-1444.png"
                                            alt="Cover of Religions" title="Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religions" class="bookshelf-journal-title">Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92597" class="ember-view"><a href="/libraries/603/journals/39768?sort=title"
                                id="ember92598" class="bookshelf-journal ember-view">
                                <div id="ember92599" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1751-2689.png"
                                            alt="Cover of Religions of South Asia" title="Religions of South Asia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religions of South Asia" class="bookshelf-journal-title">Religions of South
                                    Asia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92601" class="ember-view"><a href="/libraries/603/journals/321402?sort=title"
                                id="ember92602" class="bookshelf-journal ember-view">
                                <div id="ember92603" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2528-7230.png"
                                            alt="Cover of Religious : Jurnal Studi Agama-Agama dan Lintas Budaya"
                                            title="Religious : Jurnal Studi Agama-Agama dan Lintas Budaya">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religious : Jurnal Studi Agama-Agama dan Lintas Budaya"
                                    class="bookshelf-journal-title">Religious : Jurnal Studi Agama-Agama dan Lintas
                                    Budaya</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92605" class="ember-view"><a href="/libraries/603/journals/19020?sort=title"
                                id="ember92606" class="bookshelf-journal ember-view">
                                <div id="ember92607" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-4125.png"
                                            alt="Cover of Religious Studies" title="Religious Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religious Studies" class="bookshelf-journal-title">Religious Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92609" class="ember-view"><a href="/libraries/603/journals/39770?sort=title"
                                id="ember92610" class="bookshelf-journal ember-view">
                                <div id="ember92611" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0829-2922.png"
                                            alt="Cover of Religious Studies and Theology"
                                            title="Religious Studies and Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religious Studies and Theology" class="bookshelf-journal-title">Religious
                                    Studies and Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92613" class="ember-view"><a href="/libraries/603/journals/6871?sort=title"
                                id="ember92614" class="bookshelf-journal ember-view">
                                <div id="ember92615" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0319-485X.png"
                                            alt="Cover of Religious Studies Review" title="Religious Studies Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Religious Studies Review" class="bookshelf-journal-title">Religious Studies
                                    Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92617" class="ember-view"><a href="/libraries/603/journals/33563?sort=title"
                                id="ember92618" class="bookshelf-journal ember-view">
                                <div id="ember92619" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-4346.png"
                                            alt="Cover of Renascence" title="Renascence">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Renascence" class="bookshelf-journal-title">Renascence</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92621" class="ember-view"><a href="/libraries/603/journals/5890?sort=title"
                                id="ember92622" class="bookshelf-journal ember-view">
                                <div id="ember92623" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1356-4765.png"
                                            alt="Cover of Res Publica" title="Res Publica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Res Publica" class="bookshelf-journal-title">Res Publica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92625" class="ember-view"><a href="/libraries/603/journals/9881?sort=title"
                                id="ember92626" class="bookshelf-journal ember-view">
                                <div id="ember92627" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0085-5553.png"
                                            alt="Cover of Research in Phenomenology" title="Research in Phenomenology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Research in Phenomenology" class="bookshelf-journal-title">Research in
                                    Phenomenology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92629" class="ember-view"><a href="/libraries/603/journals/36249?sort=title"
                                id="ember92630" class="bookshelf-journal ember-view">
                                <div id="ember92631" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-6373.png"
                                            alt="Cover of Review &amp; Expositor" title="Review &amp; Expositor">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Review &amp; Expositor" class="bookshelf-journal-title">Review &amp;
                                    Expositor</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92633" class="ember-view"><a href="/libraries/603/journals/4958?sort=title"
                                id="ember92634" class="bookshelf-journal ember-view">
                                <div id="ember92635" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1878-5158.png"
                                            alt="Cover of Review of Philosophy and Psychology"
                                            title="Review of Philosophy and Psychology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Review of Philosophy and Psychology" class="bookshelf-journal-title">Review
                                    of Philosophy and Psychology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92637" class="ember-view"><a href="/libraries/603/journals/9908?sort=title"
                                id="ember92638" class="bookshelf-journal ember-view">
                                <div id="ember92639" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1568-4857.png"
                                            alt="Cover of Review of Rabbinic Judaism"
                                            title="Review of Rabbinic Judaism">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Review of Rabbinic Judaism" class="bookshelf-journal-title">Review of
                                    Rabbinic Judaism</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92641" class="ember-view"><a href="/libraries/603/journals/37443?sort=title"
                                id="ember92642" class="bookshelf-journal ember-view">
                                <div id="ember92643" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2214-3947.png"
                                            alt="Cover of Review of Religion and Chinese Society"
                                            title="Review of Religion and Chinese Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Review of Religion and Chinese Society" class="bookshelf-journal-title">
                                    Review of Religion and Chinese Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92645" class="ember-view"><a href="/libraries/603/journals/2579?sort=title"
                                id="ember92646" class="bookshelf-journal ember-view">
                                <div id="ember92647" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-673X.png"
                                            alt="Cover of Review of Religious Research"
                                            title="Review of Religious Research">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Review of Religious Research" class="bookshelf-journal-title">Review of
                                    Religious Research</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92649" class="ember-view"><a href="/libraries/603/journals/809?sort=title"
                                id="ember92650" class="bookshelf-journal ember-view">
                                <div id="ember92651" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1350-7303.png"
                                            alt="Cover of Reviews in Religion &amp; Theology"
                                            title="Reviews in Religion &amp; Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Reviews in Religion &amp; Theology" class="bookshelf-journal-title">Reviews
                                    in Religion &amp; Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92653" class="ember-view"><a href="/libraries/603/journals/119156?sort=title"
                                id="ember92654" class="bookshelf-journal ember-view">
                                <div id="ember92655" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2179-4960-8526c465-c726-4673-bdb1-a692b48a922c.png"
                                            alt="Cover of Revista Archai" title="Revista Archai">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Archai" class="bookshelf-journal-title">Revista Archai</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92657" class="ember-view"><a href="/libraries/603/journals/81426?sort=title"
                                id="ember92658" class="bookshelf-journal ember-view">
                                <div id="ember92659" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1983-8042-1e150da1-f021-4d87-b09c-7aaaac0e3b7b.png"
                                            alt="Cover of Revista Bioética" title="Revista Bioética">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Bioética" class="bookshelf-journal-title">Revista Bioética</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92661" class="ember-view"><a href="/libraries/603/journals/437395?sort=title"
                                id="ember92662" class="bookshelf-journal ember-view">
                                <div id="ember92663" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2526-9704-13953813-adb5-415e-849f-5b9d0216ee82.png"
                                            alt="Cover of Revista Calundu" title="Revista Calundu">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Calundu" class="bookshelf-journal-title">Revista Calundu</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92664" class="ember-view"><a href="/libraries/603/journals/391363?sort=title"
                                id="ember92665" class="bookshelf-journal ember-view">
                                <div id="ember92666" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0719-689X-fdcb94d3-7e58-4717-b3cd-8413b7f58323.png"
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
                        <div id="ember92668" class="ember-view"><a href="/libraries/603/journals/81606?sort=title"
                                id="ember92669" class="bookshelf-journal ember-view">
                                <div id="ember92670" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1900-6896.png"
                                            alt="Cover of Revista Colombiana de Bioética"
                                            title="Revista Colombiana de Bioética">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Colombiana de Bioética" class="bookshelf-journal-title">Revista
                                    Colombiana de Bioética</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92672" class="ember-view"><a href="/libraries/603/journals/81623?sort=title"
                                id="ember92673" class="bookshelf-journal ember-view">
                                <div id="ember92674" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-7450.png"
                                            alt="Cover of Revista Colombiana de Psiquiatría"
                                            title="Revista Colombiana de Psiquiatría">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Colombiana de Psiquiatría" class="bookshelf-journal-title">Revista
                                    Colombiana de Psiquiatría</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92676" class="ember-view"><a href="/libraries/603/journals/104591?sort=title"
                                id="ember92677" class="bookshelf-journal ember-view">
                                <div id="ember92678" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0718-4727-2672531b-aedf-4fb6-ba3f-3cc768055171.png"
                                            alt="Cover of Revista Cultura y Religión"
                                            title="Revista Cultura y Religión">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Cultura y Religión" class="bookshelf-journal-title">Revista Cultura
                                    y Religión</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92680" class="ember-view"><a href="/libraries/603/journals/81741?sort=title"
                                id="ember92681" class="bookshelf-journal ember-view">
                                <div id="ember92682" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1886-5887-aac12fea-d2e4-4c36-830f-0d8d9a98a670.png"
                                            alt="Cover of Revista de Bioética y Derecho"
                                            title="Revista de Bioética y Derecho">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Bioética y Derecho" class="bookshelf-journal-title">Revista de
                                    Bioética y Derecho</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92684" class="ember-view"><a href="/libraries/603/journals/224044?sort=title"
                                id="ember92685" class="bookshelf-journal ember-view">
                                <div id="ember92686" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2445-0669-a56daac2-38bf-4f25-aad8-9ee2493f14de.png"
                                            alt="Cover of Revista de Estudios Kantianos"
                                            title="Revista de Estudios Kantianos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Estudios Kantianos" class="bookshelf-journal-title">Revista de
                                    Estudios Kantianos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92687" class="ember-view"><a href="/libraries/603/journals/236752?sort=title"
                                id="ember92688" class="bookshelf-journal ember-view">
                                <div id="ember92689" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2447-5467.png"
                                            alt="Cover of Revista de Estudos Institucionais"
                                            title="Revista de Estudos Institucionais">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Estudos Institucionais" class="bookshelf-journal-title">Revista
                                    de Estudos Institucionais</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92691" class="ember-view"><a href="/libraries/603/journals/81840?sort=title"
                                id="ember92692" class="bookshelf-journal ember-view">
                                <div id="ember92693" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0034-8244-b259ffa0-6826-4f80-abf9-f4f8a968044a.png"
                                            alt="Cover of Revista de Filosofía" title="Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Filosofía" class="bookshelf-journal-title">Revista de Filosofía
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92695" class="ember-view"><a href="/libraries/603/journals/191713?sort=title"
                                id="ember92696" class="bookshelf-journal ember-view">
                                <div id="ember92697" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0718-4360-cb9cf34d-1fdc-4f93-b687-5cdeb70f7abe.png"
                                            alt="Cover of Revista de Filosofía" title="Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Filosofía" class="bookshelf-journal-title">Revista de Filosofía
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92699" class="ember-view"><a href="/libraries/603/journals/123987?sort=title"
                                id="ember92700" class="bookshelf-journal ember-view">
                                <div id="ember92701" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2317-9570.png"
                                            alt="Cover of Revista de Filosofia Moderna e Contemporânea"
                                            title="Revista de Filosofia Moderna e Contemporânea">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Filosofia Moderna e Contemporânea"
                                    class="bookshelf-journal-title">Revista de Filosofia Moderna e Contemporânea</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92703" class="ember-view"><a href="/libraries/603/journals/288950?sort=title"
                                id="ember92704" class="bookshelf-journal ember-view">
                                <div id="ember92705" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0719-4242-e876ea5c-b964-48fc-af9f-f858e2fd8f0a.png"
                                            alt="Cover of Revista de Humanidades de Valparaíso"
                                            title="Revista de Humanidades de Valparaíso">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista de Humanidades de Valparaíso" class="bookshelf-journal-title">
                                    Revista de Humanidades de Valparaíso</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92706" class="ember-view"><a href="/libraries/603/journals/309285?sort=title"
                                id="ember92707" class="bookshelf-journal ember-view">
                                <div id="ember92708" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2519-1470-b6a67a34-33a0-4b6b-8738-ad5bb5f3f7e5.png"
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
                        <div id="ember92709" class="ember-view"><a href="/libraries/603/journals/82032?sort=title"
                                id="ember92710" class="bookshelf-journal ember-view">
                                <div id="ember92711" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2179-8966.png"
                                            alt="Cover of Revista Direito e Práxis" title="Revista Direito e Práxis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Direito e Práxis" class="bookshelf-journal-title">Revista Direito e
                                    Práxis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92713" class="ember-view"><a href="/libraries/603/journals/112114?sort=title"
                                id="ember92714" class="bookshelf-journal ember-view">
                                <div id="ember92715" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1657-4702.png"
                                            alt="Cover of Revista Latinoamericana de Bioética"
                                            title="Revista Latinoamericana de Bioética">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Latinoamericana de Bioética" class="bookshelf-journal-title">Revista
                                    Latinoamericana de Bioética</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92716" class="ember-view"><a href="/libraries/603/journals/123982?sort=title"
                                id="ember92717" class="bookshelf-journal ember-view">
                                <div id="ember92718" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1659-4304.png"
                                            alt="Cover of Revista Latinoamericana de Derechos Humanos"
                                            title="Revista Latinoamericana de Derechos Humanos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Latinoamericana de Derechos Humanos"
                                    class="bookshelf-journal-title">Revista Latinoamericana de Derechos Humanos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92720" class="ember-view"><a href="/libraries/603/journals/82367?sort=title"
                                id="ember92721" class="bookshelf-journal ember-view">
                                <div id="ember92722" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2178-1176.png"
                                            alt="Cover of Revista Opinião Filosófica"
                                            title="Revista Opinião Filosófica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista Opinião Filosófica" class="bookshelf-journal-title">Revista Opinião
                                    Filosófica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92724" class="ember-view"><a href="/libraries/603/journals/109127?sort=title"
                                id="ember92725" class="bookshelf-journal ember-view">
                                <div id="ember92726" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1409-309X-2cc58500-3129-4512-a8ea-f6ca819cd1d3.png"
                                            alt="Cover of Revista PRAXIS" title="Revista PRAXIS">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revista PRAXIS" class="bookshelf-journal-title">Revista PRAXIS</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92728" class="ember-view"><a href="/libraries/603/journals/36114?sort=title"
                                id="ember92729" class="bookshelf-journal ember-view">
                                <div id="ember92730" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2102-5177.png"
                                            alt="Cover of Revue de métaphysique et de morale"
                                            title="Revue de métaphysique et de morale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue de métaphysique et de morale" class="bookshelf-journal-title">Revue de
                                    métaphysique et de morale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92732" class="ember-view"><a href="/libraries/603/journals/104697?sort=title"
                                id="ember92733" class="bookshelf-journal ember-view">
                                <div id="ember92734" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0771-5420.png"
                                            alt="Cover of Revue de Philosophie Ancienne"
                                            title="Revue de Philosophie Ancienne">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue de Philosophie Ancienne" class="bookshelf-journal-title">Revue de
                                    Philosophie Ancienne</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92736" class="ember-view"><a href="/libraries/603/journals/36190?sort=title"
                                id="ember92737" class="bookshelf-journal ember-view">
                                <div id="ember92738" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2118-4445.png"
                                            alt="Cover of Revue des sciences philosophiques et théologiques"
                                            title="Revue des sciences philosophiques et théologiques">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue des sciences philosophiques et théologiques"
                                    class="bookshelf-journal-title">Revue des sciences philosophiques et théologiques
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92740" class="ember-view"><a href="/libraries/603/journals/36173?sort=title"
                                id="ember92741" class="bookshelf-journal ember-view">
                                <div id="ember92742" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2118-4518.png"
                                            alt="Cover of Revue d'éthique et de théologie morale"
                                            title="Revue d'éthique et de théologie morale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue d'éthique et de théologie morale" class="bookshelf-journal-title">
                                    Revue d'éthique et de théologie morale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92743" class="ember-view"><a href="/libraries/603/journals/40252?sort=title"
                                id="ember92744" class="bookshelf-journal ember-view">
                                <div id="ember92745" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1768-9260.png"
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
                        <div id="ember92746" class="ember-view"><a href="/libraries/603/journals/40253?sort=title"
                                id="ember92747" class="bookshelf-journal ember-view">
                                <div id="ember92748" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0048-7988.png"
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
                        <div id="ember92749" class="ember-view"><a href="/libraries/603/journals/40254?sort=title"
                                id="ember92750" class="bookshelf-journal ember-view">
                                <div id="ember92751" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0035-2381.png"
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
                        <div id="ember92753" class="ember-view"><a href="/libraries/603/journals/309091?sort=title"
                                id="ember92754" class="bookshelf-journal ember-view">
                                <div id="ember92755" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2033-0138.png"
                                            alt="Cover of Revue Internationale de Philosophie"
                                            title="Revue Internationale de Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue Internationale de Philosophie" class="bookshelf-journal-title">Revue
                                    Internationale de Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92756" class="ember-view"><a href="/libraries/603/journals/40255?sort=title"
                                id="ember92757" class="bookshelf-journal ember-view">
                                <div id="ember92758" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0035-3620.png"
                                            alt="Cover of Revue Mabillon" title="Revue Mabillon">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue Mabillon" class="bookshelf-journal-title">Revue Mabillon</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92760" class="ember-view"><a href="/libraries/603/journals/36111?sort=title"
                                id="ember92761" class="bookshelf-journal ember-view">
                                <div id="ember92762" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2104-385X.png"
                                            alt="Cover of Revue philosophique de la France et de l'étranger"
                                            title="Revue philosophique de la France et de l'étranger">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Revue philosophique de la France et de l'étranger"
                                    class="bookshelf-journal-title">Revue philosophique de la France et de l'étranger
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92764" class="ember-view"><a href="/libraries/603/journals/32767?sort=title"
                                id="ember92765" class="bookshelf-journal ember-view">
                                <div id="ember92766" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2196-5110.png"
                                            alt="Cover of Rhizomata" title="Rhizomata">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rhizomata" class="bookshelf-journal-title">Rhizomata</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92768" class="ember-view"><a href="/libraries/603/journals/19641?sort=title"
                                id="ember92769" class="bookshelf-journal ember-view">
                                <div id="ember92770" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1358-2461.png"
                                            alt="Cover of Royal Institute of Philosophy Supplements"
                                            title="Royal Institute of Philosophy Supplements">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Royal Institute of Philosophy Supplements" class="bookshelf-journal-title">
                                    Royal Institute of Philosophy Supplements</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92772" class="ember-view"><a href="/libraries/603/journals/187908?sort=title"
                                id="ember92773" class="bookshelf-journal ember-view">
                                <div id="ember92774" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0209-0872.png"
                                            alt="Cover of Ruch Biblijny i Liturgiczny / Biblical and Liturgical Movement"
                                            title="Ruch Biblijny i Liturgiczny / Biblical and Liturgical Movement">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ruch Biblijny i Liturgiczny / Biblical and Liturgical Movement"
                                    class="bookshelf-journal-title">Ruch Biblijny i Liturgiczny / Biblical and
                                    Liturgical Movement</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92776" class="ember-view"><a href="/libraries/603/journals/175658?sort=title"
                                id="ember92777" class="bookshelf-journal ember-view">
                                <div id="ember92778" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2545-3173-91a4f022-7a81-4083-9a14-a53070d5bfd3.png"
                                            alt="Cover of Ruch Filozoficzny" title="Ruch Filozoficzny">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Ruch Filozoficzny" class="bookshelf-journal-title">Ruch Filozoficzny</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92780" class="ember-view"><a href="/libraries/603/journals/36104?sort=title"
                                id="ember92781" class="bookshelf-journal ember-view">
                                <div id="ember92782" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1144-0821.png"
                                            alt="Cover of Rue Descartes" title="Rue Descartes">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rue Descartes" class="bookshelf-journal-title">Rue Descartes</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92784" class="ember-view"><a href="/libraries/603/journals/36487?sort=title"
                                id="ember92785" class="bookshelf-journal ember-view">
                                <div id="ember92786" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1470-4994.png"
                                            alt="Cover of Rural Theology" title="Rural Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Rural Theology" class="bookshelf-journal-title">Rural Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92788" class="ember-view"><a href="/libraries/603/journals/39867?sort=title"
                                id="ember92789" class="bookshelf-journal ember-view">
                                <div id="ember92790" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1357-1559.png"
                                            alt="Cover of Sartre Studies International"
                                            title="Sartre Studies International">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sartre Studies International" class="bookshelf-journal-title">Sartre Studies
                                    International</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92792" class="ember-view"><a href="/libraries/603/journals/32671?sort=title"
                                id="ember92793" class="bookshelf-journal ember-view">
                                <div id="ember92794" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1869-7577.png"
                                            alt="Cover of SATS" title="SATS">
                                        <!---->
                                    </div>
                                </div>
                                <div title="SATS" class="bookshelf-journal-title">SATS</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92796" class="ember-view"><a href="/libraries/603/journals/17234?sort=title"
                                id="ember92797" class="bookshelf-journal ember-view">
                                <div id="ember92798" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0901-8328.png"
                                            alt="Cover of Scandinavian Journal of the Old Testament"
                                            title="Scandinavian Journal of the Old Testament">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scandinavian Journal of the Old Testament" class="bookshelf-journal-title">
                                    Scandinavian Journal of the Old Testament</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92800" class="ember-view"><a href="/libraries/603/journals/3050?sort=title"
                                id="ember92801" class="bookshelf-journal ember-view">
                                <div id="ember92802" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1353-3452.png"
                                            alt="Cover of Science and Engineering Ethics"
                                            title="Science and Engineering Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Science and Engineering Ethics" class="bookshelf-journal-title">Science and
                                    Engineering Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92803" class="ember-view"><a href="/libraries/603/journals/19083?sort=title"
                                id="ember92804" class="bookshelf-journal ember-view">
                                <div id="ember92805" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0269-8897.png"
                                            alt="Cover of Science in Context" title="Science in Context">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Science in Context" class="bookshelf-journal-title">Science in Context</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92807" class="ember-view"><a href="/libraries/603/journals/84098?sort=title"
                                id="ember92808" class="bookshelf-journal ember-view">
                                <div id="ember92809" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2300-7648-6c261e5b-bb23-41b2-b400-352ecbf8538f.png"
                                            alt="Cover of Scientia et Fides" title="Scientia et Fides">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scientia et Fides" class="bookshelf-journal-title">Scientia et Fides</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92811" class="ember-view"><a href="/libraries/603/journals/363561?sort=title"
                                id="ember92812" class="bookshelf-journal ember-view">
                                <div id="ember92813" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2516-6298.png"
                                            alt="Cover of Scottish Church History" title="Scottish Church History">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scottish Church History" class="bookshelf-journal-title">Scottish Church
                                    History</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92815" class="ember-view"><a href="/libraries/603/journals/19070?sort=title"
                                id="ember92816" class="bookshelf-journal ember-view">
                                <div id="ember92817" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0036-9306.png"
                                            alt="Cover of Scottish Journal of Theology"
                                            title="Scottish Journal of Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scottish Journal of Theology" class="bookshelf-journal-title">Scottish
                                    Journal of Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92819" class="ember-view"><a href="/libraries/603/journals/104852?sort=title"
                                id="ember92820" class="bookshelf-journal ember-view">
                                <div id="ember92821" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1817-7565-81cb7494-7822-4022-800e-23608d60d9d9.png"
                                            alt="Cover of Scrinium" title="Scrinium">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scrinium" class="bookshelf-journal-title">Scrinium</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92823" class="ember-view"><a href="/libraries/603/journals/84194?sort=title"
                                id="ember92824" class="bookshelf-journal ember-view">
                                <div id="ember92825" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0582-3226.png"
                                            alt="Cover of Scripta Instituti Donneriani Aboensis"
                                            title="Scripta Instituti Donneriani Aboensis">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scripta Instituti Donneriani Aboensis" class="bookshelf-journal-title">
                                    Scripta Instituti Donneriani Aboensis</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92827" class="ember-view"><a href="/libraries/603/journals/84200?sort=title"
                                id="ember92828" class="bookshelf-journal ember-view">
                                <div id="ember92829" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2362-4868-9bb2fabf-c270-426d-970b-8d861e16f47d.png"
                                            alt="Cover of Scripta Mediaevalia" title="Scripta Mediaevalia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scripta Mediaevalia" class="bookshelf-journal-title">Scripta Mediaevalia
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92831" class="ember-view"><a href="/libraries/603/journals/84206?sort=title"
                                id="ember92832" class="bookshelf-journal ember-view">
                                <div id="ember92833" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0254-1807.png"
                                            alt="Cover of Scriptura : Journal for Contextual Hermeneutics in Southern Africa"
                                            title="Scriptura : Journal for Contextual Hermeneutics in Southern Africa">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Scriptura : Journal for Contextual Hermeneutics in Southern Africa"
                                    class="bookshelf-journal-title">Scriptura : Journal for Contextual Hermeneutics in
                                    Southern Africa</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92835" class="ember-view"><a href="/libraries/603/journals/367156?sort=title"
                                id="ember92836" class="bookshelf-journal ember-view">
                                <div id="ember92837" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2589-2517-386dbf6b-12c0-4f0b-8b92-e51995d718bd.webp"
                                            alt="Cover of Secular Studies" title="Secular Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Secular Studies" class="bookshelf-journal-title">Secular Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92839" class="ember-view"><a href="/libraries/603/journals/37951?sort=title"
                                id="ember92840" class="bookshelf-journal ember-view">
                                <div id="ember92841" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2053-6712.png"
                                            alt="Cover of Secularism and Nonreligion"
                                            title="Secularism and Nonreligion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Secularism and Nonreligion" class="bookshelf-journal-title">Secularism and
                                    Nonreligion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92843" class="ember-view"><a href="/libraries/603/journals/37471?sort=title"
                                id="ember92844" class="bookshelf-journal ember-view">
                                <div id="ember92845" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0037-0894.png"
                                            alt="Cover of Sefarad" title="Sefarad">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sefarad" class="bookshelf-journal-title">Sefarad</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92847" class="ember-view"><a href="/libraries/603/journals/157488?sort=title"
                                id="ember92848" class="bookshelf-journal ember-view">
                                <div id="ember92849" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1644-3365.png"
                                            alt="Cover of Semina Scientiarum" title="Semina Scientiarum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Semina Scientiarum" class="bookshelf-journal-title">Semina Scientiarum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92851" class="ember-view"><a href="/libraries/603/journals/10743?sort=title"
                                id="ember92852" class="bookshelf-journal ember-view">
                                <div id="ember92853" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1534-5165.png"
                                            alt="Cover of Shofar: An Interdisciplinary Journal of Jewish Studies"
                                            title="Shofar: An Interdisciplinary Journal of Jewish Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Shofar: An Interdisciplinary Journal of Jewish Studies"
                                    class="bookshelf-journal-title">Shofar: An Interdisciplinary Journal of Jewish
                                    Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92855" class="ember-view"><a href="/libraries/603/journals/17313?sort=title"
                                id="ember92856" class="bookshelf-journal ember-view">
                                <div id="ember92857" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1744-8727.png"
                                            alt="Cover of Sikh Formations" title="Sikh Formations">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sikh Formations" class="bookshelf-journal-title">Sikh Formations</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92859" class="ember-view"><a href="/libraries/603/journals/342443?sort=title"
                                id="ember92860" class="bookshelf-journal ember-view">
                                <div id="ember92861" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1063-2042-a120e51b-36d1-4664-a0b5-691405c71685.webp"
                                            alt="Cover of Simone de Beauvoir Studies"
                                            title="Simone de Beauvoir Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Simone de Beauvoir Studies" class="bookshelf-journal-title">Simone de
                                    Beauvoir Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92863" class="ember-view"><a href="/libraries/603/journals/2334?sort=title"
                                id="ember92864" class="bookshelf-journal ember-view">
                                <div id="ember92865" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0037-7686.png"
                                            alt="Cover of Social Compass" title="Social Compass">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Compass" class="bookshelf-journal-title">Social Compass</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92867" class="ember-view"><a href="/libraries/603/journals/16960?sort=title"
                                id="ember92868" class="bookshelf-journal ember-view">
                                <div id="ember92869" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0269-1728.png"
                                            alt="Cover of Social Epistemology" title="Social Epistemology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Epistemology" class="bookshelf-journal-title">Social Epistemology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92871" class="ember-view"><a href="/libraries/603/journals/19063?sort=title"
                                id="ember92872" class="bookshelf-journal ember-view">
                                <div id="ember92873" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0265-0525.png"
                                            alt="Cover of Social Philosophy and Policy"
                                            title="Social Philosophy and Policy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Philosophy and Policy" class="bookshelf-journal-title">Social
                                    Philosophy and Policy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92875" class="ember-view"><a href="/libraries/603/journals/9760?sort=title"
                                id="ember92876" class="bookshelf-journal ember-view">
                                <div id="ember92877" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1874-8937.png"
                                            alt="Cover of Social Sciences and Missions"
                                            title="Social Sciences and Missions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Sciences and Missions" class="bookshelf-journal-title">Social
                                    Sciences and Missions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92879" class="ember-view"><a href="/libraries/603/journals/33520?sort=title"
                                id="ember92880" class="bookshelf-journal ember-view">
                                <div id="ember92881" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0037-802X.png"
                                            alt="Cover of Social Theory and Practice"
                                            title="Social Theory and Practice">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Social Theory and Practice" class="bookshelf-journal-title">Social Theory
                                    and Practice</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92882" class="ember-view"><a href="/libraries/603/journals/85148?sort=title"
                                id="ember92883" class="bookshelf-journal ember-view">
                                <div id="ember92884" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2272-9054.png"
                                            alt="Cover of Société, Droit et Religion"
                                            title="Société, Droit et Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Société, Droit et Religion" class="bookshelf-journal-title">Société, Droit
                                    et Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92886" class="ember-view"><a href="/libraries/603/journals/38831?sort=title"
                                id="ember92887" class="bookshelf-journal ember-view">
                                <div id="ember92888" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2044-0138.png"
                                            alt="Cover of Somatechnics" title="Somatechnics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Somatechnics" class="bookshelf-journal-title">Somatechnics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92890" class="ember-view"><a href="/libraries/603/journals/4516?sort=title"
                                id="ember92891" class="bookshelf-journal ember-view">
                                <div id="ember92892" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0038-1527.png"
                                            alt="Cover of Sophia" title="Sophia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sophia" class="bookshelf-journal-title">Sophia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92894" class="ember-view"><a href="/libraries/603/journals/33417?sort=title"
                                id="ember92895" class="bookshelf-journal ember-view">
                                <div id="ember92896" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0038-1861.png"
                                            alt="Cover of Soundings: An Interdisciplinary Journal"
                                            title="Soundings: An Interdisciplinary Journal">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Soundings: An Interdisciplinary Journal" class="bookshelf-journal-title">
                                    Soundings: An Interdisciplinary Journal</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92897" class="ember-view"><a href="/libraries/603/journals/85361?sort=title"
                                id="ember92898" class="bookshelf-journal ember-view">
                                <div id="ember92899" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1999-7639.png"
                                            alt="Cover of South African Journal of Bioethics and Law"
                                            title="South African Journal of Bioethics and Law">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South African Journal of Bioethics and Law" class="bookshelf-journal-title">
                                    South African Journal of Bioethics and Law</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92901" class="ember-view"><a href="/libraries/603/journals/34499?sort=title"
                                id="ember92902" class="bookshelf-journal ember-view">
                                <div id="ember92903" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0258-0136.png"
                                            alt="Cover of South African Journal of Philosophy"
                                            title="South African Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South African Journal of Philosophy" class="bookshelf-journal-title">South
                                    African Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92904" class="ember-view"><a href="/libraries/603/journals/366678?sort=title"
                                id="ember92905" class="bookshelf-journal ember-view">
                                <div id="ember92906" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25739476.png"
                                            alt="Cover of South Asian Review" title="South Asian Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South Asian Review" class="bookshelf-journal-title">South Asian Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92909" class="ember-view"><a href="/libraries/603/journals/18280?sort=title"
                                id="ember92910" class="bookshelf-journal ember-view">
                                <div id="ember92911" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0038-2876.png"
                                            alt="Cover of South Atlantic Quarterly" title="South Atlantic Quarterly">
                                        <!---->
                                    </div>
                                </div>
                                <div title="South Atlantic Quarterly" class="bookshelf-journal-title">South Atlantic
                                    Quarterly</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92913" class="ember-view"><a href="/libraries/603/journals/2560?sort=title"
                                id="ember92914" class="bookshelf-journal ember-view">
                                <div id="ember92915" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0038-4283.png"
                                            alt="Cover of The Southern Journal of Philosophy"
                                            title="The Southern Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="The Southern Journal of Philosophy" class="bookshelf-journal-title">The
                                    Southern Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92917" class="ember-view"><a href="/libraries/603/journals/243531?sort=title"
                                id="ember92918" class="bookshelf-journal ember-view">
                                <div id="ember92919" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2458-9675.png"
                                            alt="Cover of Spiritual Psychology and Counseling"
                                            title="Spiritual Psychology and Counseling">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Spiritual Psychology and Counseling" class="bookshelf-journal-title">
                                    Spiritual Psychology and Counseling</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92921" class="ember-view"><a href="/libraries/603/journals/10780?sort=title"
                                id="ember92922" class="bookshelf-journal ember-view">
                                <div id="ember92923" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1533-1709.png"
                                            alt="Cover of Spiritus: A Journal of Christian Spirituality"
                                            title="Spiritus: A Journal of Christian Spirituality">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Spiritus: A Journal of Christian Spirituality"
                                    class="bookshelf-journal-title">Spiritus: A Journal of Christian Spirituality</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92925" class="ember-view"><a href="/libraries/603/journals/17560?sort=title"
                                id="ember92926" class="bookshelf-journal ember-view">
                                <div id="ember92927" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1751-1321.png"
                                            alt="Cover of Sport, Ethics and Philosophy"
                                            title="Sport, Ethics and Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Sport, Ethics and Philosophy" class="bookshelf-journal-title">Sport, Ethics
                                    and Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92929" class="ember-view"><a href="/libraries/603/journals/86089?sort=title"
                                id="ember92930" class="bookshelf-journal ember-view">
                                <div id="ember92931" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1971-8543-6c982efd-6675-4885-b427-ae1769597c6d.png"
                                            alt="Cover of Stato : Chiese e Pluralismo Confessionale"
                                            title="Stato : Chiese e Pluralismo Confessionale">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Stato : Chiese e Pluralismo Confessionale" class="bookshelf-journal-title">
                                    Stato : Chiese e Pluralismo Confessionale</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92933" class="ember-view"><a href="/libraries/603/journals/37394?sort=title"
                                id="ember92934" class="bookshelf-journal ember-view">
                                <div id="ember92935" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0585-5292.png"
                                            alt="Cover of Studia Islamica" title="Studia Islamica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Islamica" class="bookshelf-journal-title">Studia Islamica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92937" class="ember-view"><a href="/libraries/603/journals/86291?sort=title"
                                id="ember92938" class="bookshelf-journal ember-view">
                                <div id="ember92939" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1506-9729-60844817-8126-4d21-95a6-e437f1993138.png"
                                            alt="Cover of Studia Judaica" title="Studia Judaica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Judaica" class="bookshelf-journal-title">Studia Judaica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92940" class="ember-view"><a href="/libraries/603/journals/86287?sort=title"
                                id="ember92941" class="bookshelf-journal ember-view">
                                <div id="ember92942" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0039-3185.png"
                                            alt="Cover of Studia Leibnitiana" title="Studia Leibnitiana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Leibnitiana" class="bookshelf-journal-title">Studia Leibnitiana</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92944" class="ember-view"><a href="/libraries/603/journals/369563?sort=title"
                                id="ember92945" class="bookshelf-journal ember-view">
                                <div id="ember92946" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25174797.png"
                                            alt="Cover of Studia Liturgica" title="Studia Liturgica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Liturgica" class="bookshelf-journal-title">Studia Liturgica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92948" class="ember-view"><a href="/libraries/603/journals/2876?sort=title"
                                id="ember92949" class="bookshelf-journal ember-view">
                                <div id="ember92950" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0039-3215.png"
                                            alt="Cover of Studia Logica" title="Studia Logica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Logica" class="bookshelf-journal-title">Studia Logica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92952" class="ember-view"><a href="/libraries/603/journals/91129?sort=title"
                                id="ember92953" class="bookshelf-journal ember-view">
                                <div id="ember92954" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0137-2432-d304d0fe-7d65-4566-95e8-9330e4daf660.png"
                                            alt="Cover of Studia Religiologica" title="Studia Religiologica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Religiologica" class="bookshelf-journal-title">Studia Religiologica
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92956" class="ember-view"><a href="/libraries/603/journals/16938?sort=title"
                                id="ember92957" class="bookshelf-journal ember-view">
                                <div id="ember92958" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0039-338X.png"
                                            alt="Cover of Studia Theologica - Nordic Journal of Theology"
                                            title="Studia Theologica - Nordic Journal of Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia Theologica - Nordic Journal of Theology"
                                    class="bookshelf-journal-title">Studia Theologica - Nordic Journal of Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92960" class="ember-view"><a href="/libraries/603/journals/145842?sort=title"
                                id="ember92961" class="bookshelf-journal ember-view">
                                <div id="ember92962" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2083-1978-751ff95c-82a3-436a-b134-66da2352c165.png"
                                            alt="Cover of Studia z Historii Filozofii"
                                            title="Studia z Historii Filozofii">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studia z Historii Filozofii" class="bookshelf-journal-title">Studia z
                                    Historii Filozofii</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92964" class="ember-view"><a href="/libraries/603/journals/86389?sort=title"
                                id="ember92965" class="bookshelf-journal ember-view">
                                <div id="ember92966" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2372-9988.png"
                                            alt="Cover of Studies in Chinese Religions"
                                            title="Studies in Chinese Religions">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Chinese Religions" class="bookshelf-journal-title">Studies in
                                    Chinese Religions</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92968" class="ember-view"><a href="/libraries/603/journals/3957?sort=title"
                                id="ember92969" class="bookshelf-journal ember-view">
                                <div id="ember92970" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0953-9468.png"
                                            alt="Cover of Studies in Christian Ethics"
                                            title="Studies in Christian Ethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Christian Ethics" class="bookshelf-journal-title">Studies in
                                    Christian Ethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92972" class="ember-view"><a href="/libraries/603/journals/1115?sort=title"
                                id="ember92973" class="bookshelf-journal ember-view">
                                <div id="ember92974" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0925-9392.png"
                                            alt="Cover of Studies in East European Thought"
                                            title="Studies in East European Thought">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in East European Thought" class="bookshelf-journal-title">Studies in
                                    East European Thought</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92975" class="ember-view"><a href="/libraries/603/journals/5079?sort=title"
                                id="ember92976" class="bookshelf-journal ember-view">
                                <div id="ember92977" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0039-3681.png"
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
                        <div id="ember92978" class="ember-view"><a href="/libraries/603/journals/5099?sort=title"
                                id="ember92979" class="bookshelf-journal ember-view">
                                <div id="ember92980" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1355-2198.png"
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
                        <div id="ember92981" class="ember-view"><a href="/libraries/603/journals/7468?sort=title"
                                id="ember92982" class="bookshelf-journal ember-view">
                                <div id="ember92983" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1369-8486.png"
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
                        <div id="ember92985" class="ember-view"><a href="/libraries/603/journals/143996?sort=title"
                                id="ember92986" class="bookshelf-journal ember-view">
                                <div id="ember92987" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0860-150X.png"
                                            alt="Cover of Studies in Logic, Grammar and Rhetoric"
                                            title="Studies in Logic, Grammar and Rhetoric">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Logic, Grammar and Rhetoric" class="bookshelf-journal-title">
                                    Studies in Logic, Grammar and Rhetoric</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92989" class="ember-view"><a href="/libraries/603/journals/7457?sort=title"
                                id="ember92990" class="bookshelf-journal ember-view">
                                <div id="ember92991" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0008-4298.png"
                                            alt="Cover of Studies in Religion/Sciences Religieuses"
                                            title="Studies in Religion/Sciences Religieuses">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Religion/Sciences Religieuses" class="bookshelf-journal-title">
                                    Studies in Religion/Sciences Religieuses</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92992" class="ember-view"><a href="/libraries/603/journals/364907?sort=title"
                                id="ember92993" class="bookshelf-journal ember-view">
                                <div id="ember92994" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2187-1590.png"
                                            alt="Cover of Studies in Science and Technology"
                                            title="Studies in Science and Technology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in Science and Technology" class="bookshelf-journal-title">Studies
                                    in Science and Technology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember92996" class="ember-view"><a href="/libraries/603/journals/38798?sort=title"
                                id="ember92997" class="bookshelf-journal ember-view">
                                <div id="ember92998" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1354-9901.png"
                                            alt="Cover of Studies in World Christianity"
                                            title="Studies in World Christianity">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Studies in World Christianity" class="bookshelf-journal-title">Studies in
                                    World Christianity</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93000" class="ember-view"><a href="/libraries/603/journals/3889?sort=title"
                                id="ember93001" class="bookshelf-journal ember-view">
                                <div id="ember93002" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0039-7857.png"
                                            alt="Cover of Synthese" title="Synthese">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Synthese" class="bookshelf-journal-title">Synthese</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93004" class="ember-view"><a href="/libraries/603/journals/6321?sort=title"
                                id="ember93005" class="bookshelf-journal ember-view">
                                <div id="ember93006" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1368-4868.png"
                                            alt="Cover of Teaching Theology &amp; Religion"
                                            title="Teaching Theology &amp; Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teaching Theology &amp; Religion" class="bookshelf-journal-title">Teaching
                                    Theology &amp; Religion</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93008" class="ember-view"><a href="/libraries/603/journals/18420?sort=title"
                                id="ember93009" class="bookshelf-journal ember-view">
                                <div id="ember93010" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0090-6514.png"
                                            alt="Cover of Telos" title="Telos">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Telos" class="bookshelf-journal-title">Telos</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93012" class="ember-view"><a href="/libraries/603/journals/224862?sort=title"
                                id="ember93013" class="bookshelf-journal ember-view">
                                <div id="ember93014" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2342-7256-56abede6-e62b-4475-ae56-5d61882cf90d.png"
                                            alt="Cover of Temenos : Nordic Journal of Comparative Religion"
                                            title="Temenos : Nordic Journal of Comparative Religion">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Temenos : Nordic Journal of Comparative Religion"
                                    class="bookshelf-journal-title">Temenos : Nordic Journal of Comparative Religion
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93016" class="ember-view"><a href="/libraries/603/journals/87368?sort=title"
                                id="ember93017" class="bookshelf-journal ember-view">
                                <div id="ember93018" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0103-314X.png"
                                            alt="Cover of Teocomunicação" title="Teocomunicação">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teocomunicação" class="bookshelf-journal-title">Teocomunicação</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93020" class="ember-view"><a href="/libraries/603/journals/87371?sort=title"
                                id="ember93021" class="bookshelf-journal ember-view">
                                <div id="ember93022" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2236-9937.png"
                                            alt="Cover of Teoliterária : Revista Brasileira de Literaturas e Teologias"
                                            title="Teoliterária : Revista Brasileira de Literaturas e Teologias">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teoliterária : Revista Brasileira de Literaturas e Teologias"
                                    class="bookshelf-journal-title">Teoliterária : Revista Brasileira de Literaturas e
                                    Teologias</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93024" class="ember-view"><a href="/libraries/603/journals/143932?sort=title"
                                id="ember93025" class="bookshelf-journal ember-view">
                                <div id="ember93026" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1731-5638-72e290f4-c4ff-4492-8a41-b56cb718fe64.png"
                                            alt="Cover of Teologia i Człowiek" title="Teologia i Człowiek">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teologia i Człowiek" class="bookshelf-journal-title">Teologia i Człowiek
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93028" class="ember-view"><a href="/libraries/603/journals/130841?sort=title"
                                id="ember93029" class="bookshelf-journal ember-view">
                                <div id="ember93030" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1893-0263.png"
                                            alt="Cover of Teologisk Tidsskrift" title="Teologisk Tidsskrift">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Teologisk Tidsskrift" class="bookshelf-journal-title">Teologisk Tidsskrift
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93032" class="ember-view"><a href="/libraries/603/journals/110186?sort=title"
                                id="ember93033" class="bookshelf-journal ember-view">
                                <div id="ember93034" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0082-3767-609316db-fdc3-4d7d-bd85-4760b310d235.webp"
                                            alt="Cover of Textus : A Journal on Textual Criticism of the Hebrew Bible"
                                            title="Textus : A Journal on Textual Criticism of the Hebrew Bible">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Textus : A Journal on Textual Criticism of the Hebrew Bible"
                                    class="bookshelf-journal-title">Textus : A Journal on Textual Criticism of the
                                    Hebrew Bible</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93036" class="ember-view"><a href="/libraries/603/journals/87542?sort=title"
                                id="ember93037" class="bookshelf-journal ember-view">
                                <div id="ember93038" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0212-8365-98a09ac7-a858-4551-af60-667a2d79ca59.png"
                                            alt="Cover of Thémata : Revista de Filosofía"
                                            title="Thémata : Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Thémata : Revista de Filosofía" class="bookshelf-journal-title">Thémata :
                                    Revista de Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93040" class="ember-view"><a href="/libraries/603/journals/430118?sort=title"
                                id="ember93041" class="bookshelf-journal ember-view">
                                <div id="ember93042" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2664-2980-4f1cbcbf-107f-4e3a-a00b-751bd3e35ae7.png"
                                            alt="Cover of Theologia Viatorum" title="Theologia Viatorum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theologia Viatorum" class="bookshelf-journal-title">Theologia Viatorum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93044" class="ember-view"><a href="/libraries/603/journals/87543?sort=title"
                                id="ember93045" class="bookshelf-journal ember-view">
                                <div id="ember93046" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-3649-93d1e451-6b37-497c-809b-8645111460ab.png"
                                            alt="Cover of Theologica Xaveriana" title="Theologica Xaveriana">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theologica Xaveriana" class="bookshelf-journal-title">Theologica Xaveriana
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93048" class="ember-view"><a href="/libraries/603/journals/87549?sort=title"
                                id="ember93049" class="bookshelf-journal ember-view">
                                <div id="ember93050" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1937-8904.png"
                                            alt="Cover of Theological Librarianship" title="Theological Librarianship">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theological Librarianship" class="bookshelf-journal-title">Theological
                                    Librarianship</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93052" class="ember-view"><a href="/libraries/603/journals/35967?sort=title"
                                id="ember93053" class="bookshelf-journal ember-view">
                                <div id="ember93054" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-5639.png"
                                            alt="Cover of Theological Studies" title="Theological Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theological Studies" class="bookshelf-journal-title">Theological Studies
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93056" class="ember-view"><a href="/libraries/603/journals/364553?sort=title"
                                id="ember93057" class="bookshelf-journal ember-view">
                                <div id="ember93058" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0285-4848.png"
                                            alt="Cover of Theological Studies in Japan"
                                            title="Theological Studies in Japan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theological Studies in Japan" class="bookshelf-journal-title">Theological
                                    Studies in Japan</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93060" class="ember-view"><a href="/libraries/603/journals/38929?sort=title"
                                id="ember93061" class="bookshelf-journal ember-view">
                                <div id="ember93062" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-5698.png"
                                            alt="Cover of Theologische Rundschau" title="Theologische Rundschau">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theologische Rundschau" class="bookshelf-journal-title">Theologische
                                    Rundschau</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93064" class="ember-view"><a href="/libraries/603/journals/6909?sort=title"
                                id="ember93065" class="bookshelf-journal ember-view">
                                <div id="ember93066" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-571X.png"
                                            alt="Cover of Theology" title="Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theology" class="bookshelf-journal-title">Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93068" class="ember-view"><a href="/libraries/603/journals/16402?sort=title"
                                id="ember93069" class="bookshelf-journal ember-view">
                                <div id="ember93070" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1474-6700.png"
                                            alt="Cover of Theology and Science" title="Theology and Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theology and Science" class="bookshelf-journal-title">Theology and Science
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93072" class="ember-view"><a href="/libraries/603/journals/36365?sort=title"
                                id="ember93073" class="bookshelf-journal ember-view">
                                <div id="ember93074" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1355-8358.png"
                                            alt="Cover of Theology &amp; Sexuality" title="Theology &amp; Sexuality">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theology &amp; Sexuality" class="bookshelf-journal-title">Theology &amp;
                                    Sexuality</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93076" class="ember-view"><a href="/libraries/603/journals/7504?sort=title"
                                id="ember93077" class="bookshelf-journal ember-view">
                                <div id="ember93078" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-5736.png"
                                            alt="Cover of Theology Today" title="Theology Today">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theology Today" class="bookshelf-journal-title">Theology Today</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93080" class="ember-view"><a href="/libraries/603/journals/2824?sort=title"
                                id="ember93081" class="bookshelf-journal ember-view">
                                <div id="ember93082" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1386-7415.png"
                                            alt="Cover of Theoretical Medicine and Bioethics"
                                            title="Theoretical Medicine and Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theoretical Medicine and Bioethics" class="bookshelf-journal-title">
                                    Theoretical Medicine and Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93084" class="ember-view"><a href="/libraries/603/journals/39891?sort=title"
                                id="ember93085" class="bookshelf-journal ember-view">
                                <div id="ember93086" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-5817.png"
                                            alt="Cover of Theoria" title="Theoria">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theoria" class="bookshelf-journal-title">Theoria</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93088" class="ember-view"><a href="/libraries/603/journals/87565?sort=title"
                                id="ember93089" class="bookshelf-journal ember-view">
                                <div id="ember93090" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0495-4548.png"
                                            alt="Cover of Theoria : An International Journal for Theory, History and Foundations of Science"
                                            title="Theoria : An International Journal for Theory, History and Foundations of Science">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theoria : An International Journal for Theory, History and Foundations of Science"
                                    class="bookshelf-journal-title">Theoria : An International Journal for Theory,
                                    History and Foundations of Science</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93092" class="ember-view"><a href="/libraries/603/journals/885?sort=title"
                                id="ember93093" class="bookshelf-journal ember-view">
                                <div id="ember93094" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0040-5825.png"
                                            alt="Cover of Theoria (Wiley)" title="Theoria (Wiley)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Theoria (Wiley)" class="bookshelf-journal-title">Theoria (Wiley)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93096" class="ember-view"><a href="/libraries/603/journals/19789?sort=title"
                                id="ember93097" class="bookshelf-journal ember-view">
                                <div id="ember93098" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1477-1756.png"
                                            alt="Cover of Think" title="Think">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Think" class="bookshelf-journal-title">Think</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93100" class="ember-view"><a href="/libraries/603/journals/152284?sort=title"
                                id="ember93101" class="bookshelf-journal ember-view">
                                <div id="ember93102" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/24733725.png"
                                            alt="Cover of Thomist : A Speculative Quarterly Review"
                                            title="Thomist : A Speculative Quarterly Review">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Thomist : A Speculative Quarterly Review" class="bookshelf-journal-title">
                                    Thomist : A Speculative Quarterly Review</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93104" class="ember-view"><a href="/libraries/603/journals/12365?sort=title"
                                id="ember93105" class="bookshelf-journal ember-view">
                                <div id="ember93106" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2161-2234.png"
                                            alt="Cover of Thought : A Journal of Philosophy"
                                            title="Thought : A Journal of Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Thought : A Journal of Philosophy" class="bookshelf-journal-title">Thought :
                                    A Journal of Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93108" class="ember-view"><a href="/libraries/603/journals/149579?sort=title"
                                id="ember93109" class="bookshelf-journal ember-view">
                                <div id="ember93110" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1901-9580.png"
                                            alt="Cover of Tidsskrift for Islamforskning"
                                            title="Tidsskrift for Islamforskning">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tidsskrift for Islamforskning" class="bookshelf-journal-title">Tidsskrift
                                    for Islamforskning</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93112" class="ember-view"><a href="/libraries/603/journals/18254?sort=title"
                                id="ember93113" class="bookshelf-journal ember-view">
                                <div id="ember93114" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0887-9982.png"
                                            alt="Cover of Tikkun" title="Tikkun">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tikkun" class="bookshelf-journal-title">Tikkun</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93116" class="ember-view"><a href="/libraries/603/journals/87821?sort=title"
                                id="ember93117" class="bookshelf-journal ember-view">
                                <div id="ember93118" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0188-6649-e88f255e-af7f-409e-bce1-abef4e5d17ec.png"
                                            alt="Cover of Tópicos : Revista de Filosofía"
                                            title="Tópicos : Revista de Filosofía">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tópicos : Revista de Filosofía" class="bookshelf-journal-title">Tópicos :
                                    Revista de Filosofía</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93120" class="ember-view"><a href="/libraries/603/journals/3606?sort=title"
                                id="ember93121" class="bookshelf-journal ember-view">
                                <div id="ember93122" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0167-7411.png"
                                            alt="Cover of Topoi" title="Topoi">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Topoi" class="bookshelf-journal-title">Topoi</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93124" class="ember-view"><a href="/libraries/603/journals/38755?sort=title"
                                id="ember93125" class="bookshelf-journal ember-view">
                                <div id="ember93126" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0826-9831.png"
                                            alt="Cover of Toronto Journal of Theology"
                                            title="Toronto Journal of Theology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Toronto Journal of Theology" class="bookshelf-journal-title">Toronto Journal
                                    of Theology</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93128" class="ember-view"><a href="/libraries/603/journals/87844?sort=title"
                                id="ember93129" class="bookshelf-journal ember-view">
                                <div id="ember93130" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2255-3827-ba75f4d1-9fa1-4fb3-af25-2afacc7255e6.png"
                                            alt="Cover of Torres de Lucca" title="Torres de Lucca">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Torres de Lucca" class="bookshelf-journal-title">Torres de Lucca</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93131" class="ember-view"><a href="/libraries/603/journals/105359?sort=title"
                                id="ember93132" class="bookshelf-journal ember-view">
                                <div id="ember93133" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1018-8185.png"
                                            alt="Cover of Torture" title="Torture">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Torture" class="bookshelf-journal-title">Torture</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93135" class="ember-view"><a href="/libraries/603/journals/33542?sort=title"
                                id="ember93136" class="bookshelf-journal ember-view">
                                <div id="ember93137" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/10571027-c6146271-be80-4bf5-9343-59a58021cc67.png"
                                            alt="Cover of Tradition and Discovery : The Polanyi Society Periodical"
                                            title="Tradition and Discovery : The Polanyi Society Periodical">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Tradition and Discovery : The Polanyi Society Periodical"
                                    class="bookshelf-journal-title">Tradition and Discovery : The Polanyi Society
                                    Periodical</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93139" class="ember-view"><a href="/libraries/603/journals/110584?sort=title"
                                id="ember93140" class="bookshelf-journal ember-view">
                                <div id="ember93141" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0778-8304.png"
                                            alt="Cover of Trajecta. Religion, Culture and Society in the Low Countries"
                                            title="Trajecta. Religion, Culture and Society in the Low Countries">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Trajecta. Religion, Culture and Society in the Low Countries"
                                    class="bookshelf-journal-title">Trajecta. Religion, Culture and Society in the Low
                                    Countries</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93144" class="ember-view"><a href="/libraries/603/journals/33357?sort=title"
                                id="ember93145" class="bookshelf-journal ember-view">
                                <div id="ember93146" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0009-1774.png"
                                            alt="Cover of Transactions of the Charles S. Peirce Society"
                                            title="Transactions of the Charles S. Peirce Society">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Transactions of the Charles S. Peirce Society"
                                    class="bookshelf-journal-title">Transactions of the Charles S. Peirce Society</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93148" class="ember-view"><a href="/libraries/603/journals/88085?sort=title"
                                id="ember93149" class="bookshelf-journal ember-view">
                                <div id="ember93150" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0101-3173.png"
                                            alt="Cover of Trans/Form/Ação : Revista de Filosofia da UNESP"
                                            title="Trans/Form/Ação : Revista de Filosofia da UNESP">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Trans/Form/Ação : Revista de Filosofia da UNESP"
                                    class="bookshelf-journal-title">Trans/Form/Ação : Revista de Filosofia da UNESP
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93152" class="ember-view"><a href="/libraries/603/journals/7202?sort=title"
                                id="ember93153" class="bookshelf-journal ember-view">
                                <div id="ember93154" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0265-3788.png"
                                            alt="Cover of Transformation: An International Journal of Holistic Mission Studies"
                                            title="Transformation: An International Journal of Holistic Mission Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Transformation: An International Journal of Holistic Mission Studies"
                                    class="bookshelf-journal-title">Transformation: An International Journal of Holistic
                                    Mission Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93156" class="ember-view"><a href="/libraries/603/journals/36238?sort=title"
                                id="ember93157" class="bookshelf-journal ember-view">
                                <div id="ember93158" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2259-3799.png"
                                            alt="Cover of Transversalités" title="Transversalités">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Transversalités" class="bookshelf-journal-title">Transversalités</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93160" class="ember-view"><a href="/libraries/603/journals/225109?sort=title"
                                id="ember93161" class="bookshelf-journal ember-view">
                                <div id="ember93162" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2148-5917.png"
                                            alt="Cover of Türkiye Biyoetik Dergisi / Turkish Journal of Bioethics"
                                            title="Türkiye Biyoetik Dergisi / Turkish Journal of Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Türkiye Biyoetik Dergisi / Turkish Journal of Bioethics"
                                    class="bookshelf-journal-title">Türkiye Biyoetik Dergisi / Turkish Journal of
                                    Bioethics</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93164" class="ember-view"><a href="/libraries/603/journals/88838?sort=title"
                                id="ember93165" class="bookshelf-journal ember-view">
                                <div id="ember93166" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0120-5323-1f397c5e-9f96-408c-87e5-3ce2f6585258.png"
                                            alt="Cover of Universitas Philosophica" title="Universitas Philosophica">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Universitas Philosophica" class="bookshelf-journal-title">Universitas
                                    Philosophica</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93168" class="ember-view"><a href="/libraries/603/journals/10932?sort=title"
                                id="ember93169" class="bookshelf-journal ember-view">
                                <div id="ember93170" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0735-8318.png"
                                            alt="Cover of U.S. Catholic Historian" title="U.S. Catholic Historian">
                                        <!---->
                                    </div>
                                </div>
                                <div title="U.S. Catholic Historian" class="bookshelf-journal-title">U.S. Catholic
                                    Historian</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93172" class="ember-view"><a href="/libraries/603/journals/133972?sort=title"
                                id="ember93173" class="bookshelf-journal ember-view">
                                <div id="ember93174" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1796-4407.png"
                                            alt="Cover of Uskonnontutkija" title="Uskonnontutkija">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Uskonnontutkija" class="bookshelf-journal-title">Uskonnontutkija</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93176" class="ember-view"><a href="/libraries/603/journals/19164?sort=title"
                                id="ember93177" class="bookshelf-journal ember-view">
                                <div id="ember93178" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0953-8208.png"
                                            alt="Cover of Utilitas" title="Utilitas">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Utilitas" class="bookshelf-journal-title">Utilitas</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93180" class="ember-view"><a href="/libraries/603/journals/33330?sort=title"
                                id="ember93181" class="bookshelf-journal ember-view">
                                <div id="ember93182" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1045-991X.png"
                                            alt="Cover of Utopian Studies" title="Utopian Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Utopian Studies" class="bookshelf-journal-title">Utopian Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93184" class="ember-view"><a href="/libraries/603/journals/37089?sort=title"
                                id="ember93185" class="bookshelf-journal ember-view">
                                <div id="ember93186" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1609-9982.png"
                                            alt="Cover of Verbum et Ecclesia" title="Verbum et Ecclesia">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Verbum et Ecclesia" class="bookshelf-journal-title">Verbum et Ecclesia</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93187" class="ember-view"><a href="/libraries/603/journals/296501?sort=title"
                                id="ember93188" class="bookshelf-journal ember-view">
                                <div id="ember93189" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1991-6434.png"
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
                        <div id="ember93190" class="ember-view"><a href="/libraries/603/journals/89287?sort=title"
                                id="ember93191" class="bookshelf-journal ember-view">
                                <div id="ember93192" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1991-640X.png"
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
                        <div id="ember93194" class="ember-view"><a href="/libraries/603/journals/9885?sort=title"
                                id="ember93195" class="bookshelf-journal ember-view">
                                <div id="ember93196" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0042-4935.png"
                                            alt="Cover of Vetus Testamentum" title="Vetus Testamentum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vetus Testamentum" class="bookshelf-journal-title">Vetus Testamentum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93198" class="ember-view"><a href="/libraries/603/journals/319984?sort=title"
                                id="ember93199" class="bookshelf-journal ember-view">
                                <div id="ember93200" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2550-0643.png"
                                            alt="Cover of Vidyottama Sanatana : International Journal of Hindu Science and Religious Studies"
                                            title="Vidyottama Sanatana : International Journal of Hindu Science and Religious Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vidyottama Sanatana : International Journal of Hindu Science and Religious Studies"
                                    class="bookshelf-journal-title">Vidyottama Sanatana : International Journal of Hindu
                                    Science and Religious Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93202" class="ember-view"><a href="/libraries/603/journals/9901?sort=title"
                                id="ember93203" class="bookshelf-journal ember-view">
                                <div id="ember93204" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0042-6032.png"
                                            alt="Cover of Vigiliae Christianae" title="Vigiliae Christianae">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vigiliae Christianae" class="bookshelf-journal-title">Vigiliae Christianae
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93205" class="ember-view"><a href="/libraries/603/journals/9895?sort=title"
                                id="ember93206" class="bookshelf-journal ember-view">
                                <div id="ember93207" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0042-7543.png"
                                            alt="Cover of Vivarium" title="Vivarium">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Vivarium" class="bookshelf-journal-title">Vivarium</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93209" class="ember-view"><a href="/libraries/603/journals/421392?sort=title"
                                id="ember93210" class="bookshelf-journal ember-view">
                                <div id="ember93211" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2691-4875-f27e2ca6-3453-48ce-8146-4afb727de0d1.png"
                                            alt="Cover of Voices in Bioethics" title="Voices in Bioethics">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Voices in Bioethics" class="bookshelf-journal-title">Voices in Bioethics
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93213" class="ember-view"><a href="/libraries/603/journals/89744?sort=title"
                                id="ember93214" class="bookshelf-journal ember-view">
                                <div id="ember93215" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0852-7172.png"
                                            alt="Cover of Walisongo : Jurnal Penelitian Sosial Keagamaan"
                                            title="Walisongo : Jurnal Penelitian Sosial Keagamaan">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Walisongo : Jurnal Penelitian Sosial Keagamaan"
                                    class="bookshelf-journal-title">Walisongo : Jurnal Penelitian Sosial Keagamaan</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93217" class="ember-view"><a href="/libraries/603/journals/162106?sort=title"
                                id="ember93218" class="bookshelf-journal ember-view">
                                <div id="ember93219" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2527-3213.png"
                                            alt="Cover of Wawasan : Jurnal Ilmiah Agama dan Sosial Budaya"
                                            title="Wawasan : Jurnal Ilmiah Agama dan Sosial Budaya">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Wawasan : Jurnal Ilmiah Agama dan Sosial Budaya"
                                    class="bookshelf-journal-title">Wawasan : Jurnal Ilmiah Agama dan Sosial Budaya
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93221" class="ember-view"><a href="/libraries/603/journals/139959?sort=title"
                                id="ember93222" class="bookshelf-journal ember-view">
                                <div id="ember93223" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0043-2040-3ed2afa6-f32c-4c46-aecf-fab18b2543a8.png"
                                            alt="Cover of Wege zum Menschen : Zeitschrift für Seelsorge und Beratung, heilendes und soziales Handeln"
                                            title="Wege zum Menschen : Zeitschrift für Seelsorge und Beratung, heilendes und soziales Handeln">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Wege zum Menschen : Zeitschrift für Seelsorge und Beratung, heilendes und soziales Handeln"
                                    class="bookshelf-journal-title">Wege zum Menschen : Zeitschrift für Seelsorge und
                                    Beratung, heilendes und soziales Handeln</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93225" class="ember-view"><a href="/libraries/603/journals/105681?sort=title"
                                id="ember93226" class="bookshelf-journal ember-view">
                                <div id="ember93227" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2291-1723.png"
                                            alt="Cover of Wesley and Methodist Studies"
                                            title="Wesley and Methodist Studies">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Wesley and Methodist Studies" class="bookshelf-journal-title">Wesley and
                                    Methodist Studies</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93229" class="ember-view"><a href="/libraries/603/journals/131101?sort=title"
                                id="ember93230" class="bookshelf-journal ember-view">
                                <div id="ember93231" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0084-005X.png"
                                            alt="Cover of Wiener Studien" title="Wiener Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Wiener Studien" class="bookshelf-journal-title">Wiener Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93233" class="ember-view"><a href="/libraries/603/journals/269986?sort=title"
                                id="ember93234" class="bookshelf-journal ember-view">
                                <div id="ember93235" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1868-7458.png"
                                            alt="Cover of Wittgenstein - Studien" title="Wittgenstein - Studien">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Wittgenstein - Studien" class="bookshelf-journal-title">Wittgenstein -
                                    Studien</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93237" class="ember-view"><a href="/libraries/603/journals/16313?sort=title"
                                id="ember93238" class="bookshelf-journal ember-view">
                                <div id="ember93239" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0260-4027.png"
                                            alt="Cover of World Futures" title="World Futures">
                                        <!---->
                                    </div>
                                </div>
                                <div title="World Futures" class="bookshelf-journal-title">World Futures</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93241" class="ember-view"><a href="/libraries/603/journals/9871?sort=title"
                                id="ember93242" class="bookshelf-journal ember-view">
                                <div id="ember93243" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1363-5247.png"
                                            alt="Cover of Worldviews: Global Religions, Culture, and Ecology"
                                            title="Worldviews: Global Religions, Culture, and Ecology">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Worldviews: Global Religions, Culture, and Ecology"
                                    class="bookshelf-journal-title">Worldviews: Global Religions, Culture, and Ecology
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93245" class="ember-view"><a href="/libraries/603/journals/32570?sort=title"
                                id="ember93246" class="bookshelf-journal ember-view">
                                <div id="ember93247" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1612-961X.png"
                                            alt="Cover of Zeitschrift für Antikes Christentum"
                                            title="Zeitschrift für Antikes Christentum">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Antikes Christentum" class="bookshelf-journal-title">
                                    Zeitschrift für Antikes Christentum</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93249" class="ember-view"><a href="/libraries/603/journals/32571?sort=title"
                                id="ember93250" class="bookshelf-journal ember-view">
                                <div id="ember93251" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-0103.png"
                                            alt="Cover of Zeitschrift für die Alttestamentliche Wissenschaft"
                                            title="Zeitschrift für die Alttestamentliche Wissenschaft">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für die Alttestamentliche Wissenschaft"
                                    class="bookshelf-journal-title">Zeitschrift für die Alttestamentliche Wissenschaft
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93253" class="ember-view"><a href="/libraries/603/journals/32578?sort=title"
                                id="ember93254" class="bookshelf-journal ember-view">
                                <div id="ember93255" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1613-009X.png"
                                            alt="Cover of Zeitschrift für die Neutestamentliche Wissenschaft und Kunde der Älteren Kirche"
                                            title="Zeitschrift für die Neutestamentliche Wissenschaft und Kunde der Älteren Kirche">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für die Neutestamentliche Wissenschaft und Kunde der Älteren Kirche"
                                    class="bookshelf-journal-title">Zeitschrift für die Neutestamentliche Wissenschaft
                                    und Kunde der Älteren Kirche</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93257" class="ember-view"><a href="/libraries/603/journals/344198?sort=title"
                                id="ember93258" class="bookshelf-journal ember-view">
                                <div id="ember93259" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/25220071.png"
                                            alt="Cover of Zeitschrift für Ethik und Moralphilosophie / Journal for Ethics and Moral Philosophy"
                                            title="Zeitschrift für Ethik und Moralphilosophie / Journal for Ethics and Moral Philosophy">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Ethik und Moralphilosophie / Journal for Ethics and Moral Philosophy"
                                    class="bookshelf-journal-title">Zeitschrift für Ethik und Moralphilosophie / Journal
                                    for Ethics and Moral Philosophy</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93261" class="ember-view"><a href="/libraries/603/journals/137733?sort=title"
                                id="ember93262" class="bookshelf-journal ember-view">
                                <div id="ember93263" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2197-912X.png"
                                            alt="Cover of Zeitschrift für Evangelische Ethik"
                                            title="Zeitschrift für Evangelische Ethik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Evangelische Ethik" class="bookshelf-journal-title">
                                    Zeitschrift für Evangelische Ethik</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93265" class="ember-view"><a href="/libraries/603/journals/133141?sort=title"
                                id="ember93266" class="bookshelf-journal ember-view">
                                <div id="ember93267" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2194-5632-43097b08-1307-427c-8d56-54628e162112.png"
                                            alt="Cover of Zeitschrift für Kritische Sozialtheorie und Philosophie"
                                            title="Zeitschrift für Kritische Sozialtheorie und Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Kritische Sozialtheorie und Philosophie"
                                    class="bookshelf-journal-title">Zeitschrift für Kritische Sozialtheorie und
                                    Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93269" class="ember-view"><a href="/libraries/603/journals/131419?sort=title"
                                id="ember93270" class="bookshelf-journal ember-view">
                                <div id="ember93271" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1867-1845.png"
                                            alt="Cover of Zeitschrift für Kulturphilosophie"
                                            title="Zeitschrift für Kulturphilosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Kulturphilosophie" class="bookshelf-journal-title">
                                    Zeitschrift für Kulturphilosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93273" class="ember-view"><a href="/libraries/603/journals/32585?sort=title"
                                id="ember93274" class="bookshelf-journal ember-view">
                                <div id="ember93275" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1612-9776.png"
                                            alt="Cover of Zeitschrift für Neuere Theologiegeschichte (Journal for the History of Modern Theology)"
                                            title="Zeitschrift für Neuere Theologiegeschichte (Journal for the History of Modern Theology)">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Neuere Theologiegeschichte (Journal for the History of Modern Theology)"
                                    class="bookshelf-journal-title">Zeitschrift für Neuere Theologiegeschichte (Journal
                                    for the History of Modern Theology)</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93277" class="ember-view"><a href="/libraries/603/journals/91047?sort=title"
                                id="ember93278" class="bookshelf-journal ember-view">
                                <div id="ember93279" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0044-3301.png"
                                            alt="Cover of Zeitschrift für philosophische Forschung"
                                            title="Zeitschrift für philosophische Forschung">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für philosophische Forschung" class="bookshelf-journal-title">
                                    Zeitschrift für philosophische Forschung</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93281" class="ember-view"><a href="/libraries/603/journals/91107?sort=title"
                                id="ember93282" class="bookshelf-journal ember-view">
                                <div id="ember93283" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2409-9961.png"
                                            alt="Cover of Zeitschrift für Praktische Philosophie"
                                            title="Zeitschrift für Praktische Philosophie">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Praktische Philosophie" class="bookshelf-journal-title">
                                    Zeitschrift für Praktische Philosophie</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93285" class="ember-view"><a href="/libraries/603/journals/284563?sort=title"
                                id="ember93286" class="bookshelf-journal ember-view">
                                <div id="ember93287" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2510-1218.png"
                                            alt="Cover of Zeitschrift für Religion, Gesellschaft und Politik"
                                            title="Zeitschrift für Religion, Gesellschaft und Politik">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Religion, Gesellschaft und Politik"
                                    class="bookshelf-journal-title">Zeitschrift für Religion, Gesellschaft und Politik
                                </div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93288" class="ember-view"><a href="/libraries/603/journals/32738?sort=title"
                                id="ember93289" class="bookshelf-journal ember-view">
                                <div id="ember93290" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2194-508X.png"
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
                        <div id="ember93292" class="ember-view"><a href="/libraries/603/journals/38922?sort=title"
                                id="ember93293" class="bookshelf-journal ember-view">
                                <div id="ember93294" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0044-3549.png"
                                            alt="Cover of Zeitschrift für Theologie und Kirche"
                                            title="Zeitschrift für Theologie und Kirche">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zeitschrift für Theologie und Kirche" class="bookshelf-journal-title">
                                    Zeitschrift für Theologie und Kirche</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93296" class="ember-view"><a href="/libraries/603/journals/5907?sort=title"
                                id="ember93297" class="bookshelf-journal ember-view">
                                <div id="ember93298" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0591-2385.png"
                                            alt="Cover of Zygon" title="Zygon">
                                        <!---->
                                    </div>
                                </div>
                                <div title="Zygon" class="bookshelf-journal-title">Zygon</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93299" class="ember-view"><a href="/libraries/603/journals/427354?sort=title"
                                id="ember93300" class="bookshelf-journal ember-view">
                                <div id="ember93301" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2423-9461.png"
                                            alt="Cover of アジア・文化・歴史" title="アジア・文化・歴史">
                                        <!---->
                                    </div>
                                </div>
                                <div title="アジア・文化・歴史" class="bookshelf-journal-title">アジア・文化・歴史</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93302" class="ember-view"><a href="/libraries/603/journals/436857?sort=title"
                                id="ember93303" class="bookshelf-journal ember-view">
                                <div id="ember93304" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2434-5814.png"
                                            alt="Cover of グローバル・コンサーン" title="グローバル・コンサーン">
                                        <!---->
                                    </div>
                                </div>
                                <div title="グローバル・コンサーン" class="bookshelf-journal-title">グローバル・コンサーン</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93306" class="ember-view"><a href="/libraries/603/journals/388470?sort=title"
                                id="ember93307" class="bookshelf-journal ember-view">
                                <div id="ember93308" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0919-4622.png"
                                            alt="Cover of シェリング年報" title="シェリング年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="シェリング年報" class="bookshelf-journal-title">シェリング年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93310" class="ember-view"><a href="/libraries/603/journals/93310?sort=title"
                                id="ember93311" class="bookshelf-journal ember-view">
                                <div id="ember93312" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0914-8604.png"
                                            alt="Cover of パーリ学仏教文化学" title="パーリ学仏教文化学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="パーリ学仏教文化学" class="bookshelf-journal-title">パーリ学仏教文化学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93314" class="ember-view"><a href="/libraries/603/journals/441053?sort=title"
                                id="ember93315" class="bookshelf-journal ember-view">
                                <div id="ember93316" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2436-1755.png"
                                            alt="Cover of プラジュニャーカラグプタ研究" title="プラジュニャーカラグプタ研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="プラジュニャーカラグプタ研究" class="bookshelf-journal-title">プラジュニャーカラグプタ研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93318" class="ember-view"><a href="/libraries/603/journals/435672?sort=title"
                                id="ember93319" class="bookshelf-journal ember-view">
                                <div id="ember93320" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2185-3207.png"
                                            alt="Cover of プロセス思想" title="プロセス思想">
                                        <!---->
                                    </div>
                                </div>
                                <div title="プロセス思想" class="bookshelf-journal-title">プロセス思想</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93322" class="ember-view"><a href="/libraries/603/journals/92697?sort=title"
                                id="ember93323" class="bookshelf-journal ember-view">
                                <div id="ember93324" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1342-7350.png"
                                            alt="Cover of 仙台白百合女子大学紀要" title="仙台白百合女子大学紀要">
                                        <!---->
                                    </div>
                                </div>
                                <div title="仙台白百合女子大学紀要" class="bookshelf-journal-title">仙台白百合女子大学紀要</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93325" class="ember-view"><a href="/libraries/603/journals/374490?sort=title"
                                id="ember93326" class="bookshelf-journal ember-view">
                                <div id="ember93327" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2434-4699.png"
                                            alt="Cover of 倫理学年報" title="倫理学年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="倫理学年報" class="bookshelf-journal-title">倫理学年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93328" class="ember-view"><a href="/libraries/603/journals/334892?sort=title"
                                id="ember93329" class="bookshelf-journal ember-view">
                                <div id="ember93330" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0387-7485.png"
                                            alt="Cover of 倫理学研究" title="倫理学研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="倫理学研究" class="bookshelf-journal-title">倫理学研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93331" class="ember-view"><a href="/libraries/603/journals/93716?sort=title"
                                id="ember93332" class="bookshelf-journal ember-view">
                                <div id="ember93333" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1340-5543.png"
                                            alt="Cover of 四日市大学論集" title="四日市大学論集">
                                        <!---->
                                    </div>
                                </div>
                                <div title="四日市大学論集" class="bookshelf-journal-title">四日市大学論集</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93335" class="ember-view"><a href="/libraries/603/journals/130212?sort=title"
                                id="ember93336" class="bookshelf-journal ember-view">
                                <div id="ember93337" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1346-8219.png"
                                            alt="Cover of 宗教と倫理" title="宗教と倫理">
                                        <!---->
                                    </div>
                                </div>
                                <div title="宗教と倫理" class="bookshelf-journal-title">宗教と倫理</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93339" class="ember-view"><a href="/libraries/603/journals/92466?sort=title"
                                id="ember93340" class="bookshelf-journal ember-view">
                                <div id="ember93341" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1342-4726.png"
                                            alt="Cover of 宗教と社会" title="宗教と社会">
                                        <!---->
                                    </div>
                                </div>
                                <div title="宗教と社会" class="bookshelf-journal-title">宗教と社会</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93343" class="ember-view"><a href="/libraries/603/journals/277722?sort=title"
                                id="ember93344" class="bookshelf-journal ember-view">
                                <div id="ember93345" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0289-7105.png"
                                            alt="Cover of 宗教哲学研究" title="宗教哲学研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="宗教哲学研究" class="bookshelf-journal-title">宗教哲学研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93347" class="ember-view"><a href="/libraries/603/journals/298766?sort=title"
                                id="ember93348" class="bookshelf-journal ember-view">
                                <div id="ember93349" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2435-9416.png"
                                            alt="Cover of 宗教学論集" title="宗教学論集">
                                        <!---->
                                    </div>
                                </div>
                                <div title="宗教学論集" class="bookshelf-journal-title">宗教学論集</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93350" class="ember-view"><a href="/libraries/603/journals/73030?sort=title"
                                id="ember93351" class="bookshelf-journal ember-view">
                                <div id="ember93352" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1349-6905.png"
                                            alt="Cover of 心の諸問題論叢" title="心の諸問題論叢">
                                        <!---->
                                    </div>
                                </div>
                                <div title="心の諸問題論叢" class="bookshelf-journal-title">心の諸問題論叢</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93354" class="ember-view"><a href="/libraries/603/journals/374493?sort=title"
                                id="ember93355" class="bookshelf-journal ember-view">
                                <div id="ember93356" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2432-4337.png"
                                            alt="Cover of 政治哲学" title="政治哲学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="政治哲学" class="bookshelf-journal-title">政治哲学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93357" class="ember-view"><a href="/libraries/603/journals/353858?sort=title"
                                id="ember93358" class="bookshelf-journal ember-view">
                                <div id="ember93359" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2432-6240.png"
                                            alt="Cover of 敬心・研究ジャーナル" title="敬心・研究ジャーナル">
                                        <!---->
                                    </div>
                                </div>
                                <div title="敬心・研究ジャーナル" class="bookshelf-journal-title">敬心・研究ジャーナル</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93360" class="ember-view"><a href="/libraries/603/journals/271139?sort=title"
                                id="ember93361" class="bookshelf-journal ember-view">
                                <div id="ember93362" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1882-0093.png"
                                            alt="Cover of 時間学研究" title="時間学研究">
                                        <!---->
                                    </div>
                                </div>
                                <div title="時間学研究" class="bookshelf-journal-title">時間学研究</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93364" class="ember-view"><a href="/libraries/603/journals/92796?sort=title"
                                id="ember93365" class="bookshelf-journal ember-view">
                                <div id="ember93366" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0286-5661.png"
                                            alt="Cover of 智山学報" title="智山学報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="智山学報" class="bookshelf-journal-title">智山学報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93367" class="ember-view"><a href="/libraries/603/journals/441057?sort=title"
                                id="ember93368" class="bookshelf-journal ember-view">
                                <div id="ember93369" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2435-8010.png"
                                            alt="Cover of 未来共創" title="未来共創">
                                        <!---->
                                    </div>
                                </div>
                                <div title="未来共創" class="bookshelf-journal-title">未来共創</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93371" class="ember-view"><a href="/libraries/603/journals/92962?sort=title"
                                id="ember93372" class="bookshelf-journal ember-view">
                                <div id="ember93373" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1882-5273.png"
                                            alt="Cover of 東京未来大学研究紀要" title="東京未来大学研究紀要">
                                        <!---->
                                    </div>
                                </div>
                                <div title="東京未来大学研究紀要" class="bookshelf-journal-title">東京未来大学研究紀要</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93374" class="ember-view"><a href="/libraries/603/journals/62033?sort=title"
                                id="ember93375" class="bookshelf-journal ember-view">
                                <div id="ember93376" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0387-2890.png"
                                            alt="Cover of 法哲学年報" title="法哲学年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="法哲学年報" class="bookshelf-journal-title">法哲学年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93378" class="ember-view"><a href="/libraries/603/journals/243228?sort=title"
                                id="ember93379" class="bookshelf-journal ember-view">
                                <div id="ember93380" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1343-4063.png"
                                            alt="Cover of 生命倫理" title="生命倫理">
                                        <!---->
                                    </div>
                                </div>
                                <div title="生命倫理" class="bookshelf-journal-title">生命倫理</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93382" class="ember-view"><a href="/libraries/603/journals/443411?sort=title"
                                id="ember93383" class="bookshelf-journal ember-view">
                                <div id="ember93384" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/1884-3476.png"
                                            alt="Cover of 経営哲学" title="経営哲学">
                                        <!---->
                                    </div>
                                </div>
                                <div title="経営哲学" class="bookshelf-journal-title">経営哲学</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93386" class="ember-view"><a href="/libraries/603/journals/402197?sort=title"
                                id="ember93387" class="bookshelf-journal ember-view">
                                <div id="ember93388" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0919-7982.png"
                                            alt="Cover of 西日本哲学年報" title="西日本哲学年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="西日本哲学年報" class="bookshelf-journal-title">西日本哲学年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93390" class="ember-view"><a href="/libraries/603/journals/397801?sort=title"
                                id="ember93391" class="bookshelf-journal ember-view">
                                <div id="ember93392" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/2188-1995.png"
                                            alt="Cover of 西田哲学会年報" title="西田哲学会年報">
                                        <!---->
                                    </div>
                                </div>
                                <div title="西田哲学会年報" class="bookshelf-journal-title">西田哲学会年報</div>
                            </a></div>
                    </li>
                    <li class="bookshelf-journal-list-item">
                        <div id="ember93393" class="ember-view"><a href="/libraries/603/journals/92783?sort=title"
                                id="ember93394" class="bookshelf-journal ember-view">
                                <div id="ember93395" class="journal-cover __771d8 ember-view">
                                    <div class="image-container">
                                        <img src="<?=ASSETS?>images/Philosophy/0915-9347.png"
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