  <div class="scrollbar-sidebar ps ps--active-y">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">

                            <?php if ($rank >= 5 && $rank >= rmin && $rank != null)
                            {
                                ?>
                                   
                                   <li class="app-sidebar__heading">Moderadores</li>
                               <li>
                                <a href="salsa-conversas-de-quarto">
                                    <i class="metismenu-icon pe-7s-display1">
                                    </i>Conversas de quarto
                                </a>

                                <a href="salsa-banir-usuario">
                                    <i class="metismenu-icon pe-7s-close">
                                    </i>Banir um usuário
                                </a>

                                <a href="salsa-desbanir-usuario">
                                    <i class="metismenu-icon pe-7s-smile">
                                    </i>Desbanir um usuário
                                </a>

                                <a href="salsa-contas-fakes">
                                    <i class="metismenu-icon pe-7s-users">
                                    </i>Contas fakes
                                </a>

                                <a href="salsa-premiar-usuario">
                                    <i class="metismenu-icon pe-7s-joy">
                                    </i>Premiar usuário
                                </a>
                            </li>

                        <?php } ?>

                         <?php if ($rank >= 7 && $rank >= rmin && $rank != null)
                            {
                                ?>

                            <li class="app-sidebar__heading">Administradores</li>
                               <li>
                                <a href="salsa-publicar-noticias">
                                    <i class="metismenu-icon pe-7s-note2">
                                    </i>Publicar uma notícia
                                </a>
                                <a href="salsa-noticias">
                                    <i class="metismenu-icon pe-7s-print">
                                    </i>Notícias publicadas
                                </a>
                                <a href="salsa-dar-emblema-usuario">
                                    <i class="metismenu-icon pe-7s-photo">
                                    </i> Dar emblema
                                </a>
                                <a href="salsa-remover-emblema-usuario">
                                    <i class="metismenu-icon pe-7s-safe">
                                    </i> Remover emblema
                                </a>
                                <a href="salsa-dar-pontos-de-promocao">
                                    <i class="metismenu-icon pe-7s-cup">
                                    </i> Dar pontos de promoção
                                </a>
                                <a href="salsa-remover-promocao-ativa">
                                    <i class="metismenu-icon pe-7s-wallet">
                                    </i> Remover promoção ativa
                                </a>

                             

                                

                              
                            </li>
                        <?php } ?>
                        


                        <?php if ($rank >= 8 && $rank >= rmin && $rank != null)
                            {
                                ?>

                            <li class="app-sidebar__heading">Gerentes</li>
                               <li>
                                <a href="salsa-dar-cargo">
                                    <i class="metismenu-icon pe-7s-add-user">
                                    </i>Dar cargo
                                </a>
                             
                               

                             

                                

                              
                            </li>
                        <?php } ?>









                            
                           
                        </ul>
                    </div>