                <h1 id="pageTitle">L’équipe Blog-e-Boulga</h1>
                <p id="pagePresentation">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum facilisis massa nec maximus. Ut convallis fringilla finibus. Praesent convallis placerat risus. Morbi luctus commodo magna rhoncus lobortis. Morbi dignissim id ante a imperdiet. Nam elementum lorem quis. <br /><br />Ut consectetur urna quis condimentum elementum. Aenean consectetur nisl ut velit viverra semper. Praesent congue ornare lorem, non mollis est mollis non. Curabitur urna sapien, feugiat vel consequat eu, elementum non enim. Morbi vel mauris metus. Maecenas consectetur congue turpis eu gravida. Integer imperdiet tincidunt tortor. Pellentesque gravida lorem vel luctus convallis. Aliquam erat volutpat.
                </p>
                <?php foreach($dataAuthorList as $key => $author): ?>
                <figure class="separationAbout">
                    <img class="longSeparation" src="/inc/assets/img/separation.svg" alt="separation">
                    <img class="smallSeparation" src="/inc/assets/img/small_separation.svg" alt="small separation">
                </figure>
                <article>
                    <figure class="profil">
                        <img src=" <?= $author->img ?>" alt="Lucas Boillot">
                    </figure>
                    <img class="firstquote" src="/inc/assets/img/quote.svg" alt="quote">
                    <aside>
                        <p>
                            <?= $author->fullDescription ?><span> <img src="/inc/assets/img/entypo_quote.svg" alt="endquote"> </span>
                        </p>
                    </aside>
                    <h2><?= $author->authorFirstName ?> <?= $author->authorLastName ?></h2>
                    <div class="website">
                        <a href="#"><img src="/inc/assets/img/myWebSite.svg" alt="Site web personnel"> Mon Site</a>
                    </div>
                    <a class="linkedinProfil" href="#"><img src="/inc/assets/img/linkedin.svg" alt="Profil Linkedin"> Mon profil Linkedin</a>
                    <a class="githubProfil" href="#"><img src="/inc/assets/img/github.svg" alt="Profil Github"> Mon espace Github</a>
                </article>
               <? endforeach ; ?>