<!-- Portfolio -->
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="row push50">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>Our Work</h2>
                <h3>
                    <span class="filter label label-default" data-filter="all">ALL</span>
                    <span class="filter label label-default" data-filter="bw">B&amp;W</span>
                    <span class="filter label label-default" data-filter="nature">Nature</span>
                    <span class="filter label label-default" data-filter="portraits">Portraits</span>
                </h3>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="gallery">

                <ul id="Grid" class="gcontainer">
                  @foreach($works as $item)
                  
                    <li class="col-md-4 col-sm-4 col-xs-12 mix {{$item->categorie}}" data-cat="graphics">
                        <a data-toggle="modal" data-target="#portrait1" class="mix-cover">
                            <img class="horizontal" src="{{asset('storage/'.$item->image)}}" alt="placeholder">
                            <span class="overlay"><span class="valign"></span><span class="title">Portrait
                                    1</span></span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="w-100 text-center">{{$works->links()}}</div>
               
                <!-- Load Photo in Modal -->
                <div class="modal fade" id="portrait1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Portrait 1</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="Portrait1" src="img/portrait1.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="portrait2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Portrait 2</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="Portrait1" src="img/portrait2.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="portrait3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Portrait 3</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="Portrait1" src="img/portrait3.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="portrait4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Portrait 4</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="Portrait1" src="img/portrait4.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="portrait5" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Portrait 5</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="Portrait1" src="img/portrait5.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="nature" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Nature</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="nature" src="img/nature.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="nature1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Nature 1</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="nature" src="asset{{asset("img/nature1.jpg")}}" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <div class="modal fade" id="forest" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Forest</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="forest" src="img/forest.jpg" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade" id="bw1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                                <h4 class="modal-title text-center">Black and White</h4>
                            </div>
                            <div class="modal-body">
                                <img class="thumbnail" alt="forest" src="{{asset('img/bw1.jpg')}}" />
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


                <!-- /Load Photo in Modal -->
            </div>
        </div>
    </div>
</div>
<!-- /Portfolio -->
