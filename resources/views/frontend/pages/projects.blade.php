@extends('frontend.inc.master')
@section('title', '  page Projects')
@section('content')


    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="assets/img/bg/bread-bg.png">
        <div class="container">
            <div class="ori-breadcrumb-content text-center ul-li">
                <h1>Services</h1>
                <ul>
                    <li><a href="{{ url('/') }}">DesignArabia</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>

    <!-- Start of Blog section
      ============================================= -->
    <section id="ori-blog-1" class="ori-blog-section-1 position-relative">
        <div class="container">
            <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">
                <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">

                </div>
            </div>
            <div class="ori-blog-content-1">
                <div class="row">
                    @foreach( $projects as  $project)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

                            <div class="ori-blog-inner-item">
                                <a  href="{{ route('Project', $project->id) }}">
                                    <div class="blog-inner-img">
                                        <img style="width: 415px;height: 274px;object-fit: cover;" src="{{ url('public/projects/' . $project->image) }}" alt="">

                                    </div>
                                    <div class="blog-inner-text">
                                        <h3><a href="{{ route('Project', $project->id) }}">{{$project->project_name}}</a></h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="line_animation">
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
            <div class="line_area"></div>
        </div>
    </section>
    <!-- End of Blog section
        ============================================= -->


@endsection
