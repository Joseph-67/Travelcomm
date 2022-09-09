<x-app-layout>
    <section class="doc_banner_are search-banner-light">
                <div class="container">
                    <div class="doc_banner_content">
                        <div class="row">
                        <div class="col-lg-7 col-md-8 ">
            <div class="blog_comment_box topic_comment">
               


                <form class="get_quote_form row" action="{{route('roles-store')}}" method="post" enctype="multipart/form-data">
                    <!-- display validation error message -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @include('components.shared.feedback')

                    @csrf

                    
                    <small> Add Role's here</small>
                    <div class="col-md-12 form-group">
                        <input type="text" placeholder="" class="form-control" id="name" name="title"  required>
                        <label class="floating-label">Title</label>
                    </div>
                  
                    <!-- <div class="col-md-12 form-group">
                        <input type="text" placeholder="" class="form-control" id="name" name="guard"  required>
                        <label class="floating-label">Guard</label>
                    </div> -->
                  

                 
                   

                    <div class="col-md-12 form-group">
                        <button class="btn action_btn thm_btn" type="submit"> Store</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
    </section>
    @section('script')
    
    @endsection
</x-app-layout>
</html> -->


