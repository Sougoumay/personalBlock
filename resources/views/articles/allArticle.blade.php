@extends('layouts.main_layouts')
@section('main')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Articles </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Typography</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Articles</h5>
                                    @foreach($articles as $article)
                                        <a href="{{route('viewArticle',$article->id)}}">
                                            <h1 class="card-title">{{$article->title}}</h1>
                                            <div class="align-content-around">
                                                <img src="{{asset('/1').'/'.$article->image}}"/>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center">
                                    {!! $articles->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
@endsection
