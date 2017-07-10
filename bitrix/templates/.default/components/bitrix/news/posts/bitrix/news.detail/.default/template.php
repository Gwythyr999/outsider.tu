<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
<header class="site-header" role="banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="post-title"><?=$arResult["NAME"]?></h1>
                <h4 class="category"><?
                    $id = $arItem["IBLOCK_SECTION_ID"];
                    $res = CIBlockSection::GetByID($id);
                    if($ar_res = $res->GetNext())
                        echo $ar_res['NAME'];
                    ?>
                </h4>
                <time class="meta"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></time>
            </div>
        </div>
    </div>
</header>
<main class="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- Post -->
                <article class="post">
                    <figure class="figure overhang">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                             alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                             title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                             class="full-width" />
                    </figure>
                    <section class="post-content">
                        <?echo $arResult["DETAIL_TEXT"];?>
                    </section>
                    <ul class="tags-list">
                        <li><a href="#" class="btn btn-default btn-xs">Design</a></li>
                        <li><a href="#" class="btn btn-default btn-xs">Inspiration</a></li>
                        <li><a href="#" class="btn btn-default btn-xs">Woman</a></li>
                        <li><a href="#" class="btn btn-default btn-xs">Photography</a></li>
                        <li><a href="#" class="btn btn-default btn-xs">Fashion</a></li>
                    </ul>
                </article>
                <!-- Comments -->
                <article class="comments">
                    <h4>3 Comments</h4>
                    <ul class="comments-list">
                        <li>
                            <a href="#" class="avatar"><img src="img/avatars/avatar1.jpg" alt="avatar"></a>
                            <div class="comment">
                                <h6><a href="#" class="author">John McClane</a></h6>
                                <ul class="meta-list">
                                    <li><time class="meta">November 23, 2014</time></li>
                                    <li><time class="meta" data-text="At">6:35 pm</time></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.</p>
                                <a href="#" class="btn btn-default btn-sm">Reply</a>
                            </div>
                            <ul>
                                <li>
                                    <a href="#" class="avatar"><img src="img/avatars/avatar2.jpg" alt="avatar"></a>
                                    <div class="comment">
                                        <h6><a href="#" class="author">Patricia Graham</a></h6>
                                        <ul class="meta-list">
                                            <li><time class="meta">November 23, 2014</time></li>
                                            <li><time class="meta" data-text="At">6:35 pm</time></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.</p>
                                        <a href="#" class="btn btn-default btn-sm">Reply</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="avatar"><img src="img/avatars/avatar3.jpg" alt="avatar"></a>
                            <div class="comment">
                                <h6><a href="#" class="author">Daniel Willis</a></h6>
                                <ul class="meta-list">
                                    <li><time class="meta">November 23, 2014</time></li>
                                    <li><time class="meta" data-text="At">6:35 pm</time></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia saepe rem libero?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fusce nec mollis odio. Quisque vel enim malesuada, euismod felis ut, rhoncus magna.</p>
                                <a href="#" class="btn btn-default btn-sm">Reply</a>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="leave-reply">
                                <button id="comment-fade" class="btn btn-default">Leave a Reply</button>
                                <form action="php/contact-form.php" id="reply-form" class="reply-form">
                                    <div class="alert alert-success hidden" id="contact-alert-success">
                                        <strong>Success!</strong> Thank you for your message. Reply will be in a while!
                                    </div>
                                    <div class="alert alert-danger hidden" id="contact-alert-error">
                                        <strong>Error!</strong> Something went wrong sending your message.
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="name"></label>
                                        <input type="text" class="form-control" value="" placeholder="Name" data-msg-required="Please enter your name." name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email"></label>
                                        <input type="email" value="" placeholder="E-mail" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="message"></label>
                                        <textarea placeholder="Enter your message..." data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message"></textarea>
                                    </div>
                                    <input type="submit" value="Send Message" class="btn btn-default" data-loading-text="Loading...">
                                </form>
                            </div>
                        </div>
                    </div>

                </article>
                <!-- Pagination -->
                <nav class="blog-nav">
                    <ul class="block-pagination" role="menubar" aria-label="Pagination">
                        <li class="previous">
                            <a href="#">
                                <span class="hidden-xs">Previous article</span>
                                <span class="visible-xs">Previous</span>
                                <hgroup class="hgroup hidden-xs">
                                    <h5 class="post-title"><small>Bottles battle</small></h5>
                                    <h6 class="category"><small>Adventure</small></h6>
                                </hgroup>
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="next">
                            <a href="#">
                                <span class="hidden-xs">Next article</span>
                                <span class="visible-xs">Next</span>
                                <hgroup class="hgroup hidden-xs">
                                    <h5 class="post-title"><small>Flight around coast</small></h5>
                                    <h6 class="category"><small>Adventure</small></h6>
                                </hgroup>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Scroll top -->
    <a class="scroll-top icon icon-arrow-up"></a>
</main>
    <?endif;?>
