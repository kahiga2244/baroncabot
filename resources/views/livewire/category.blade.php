<div class="row">
   <div class="col-xl-9 col-lg-8">
      <div class="blog-grid row mt-0">
         @foreach ($blogs as $blog)
            <div class="col-md-6">
               <div class="blog-wrap wow fadeInUp">
                  <div class="blog-image">
                     <div>
                        @if($blog->thumbnail)
                           <img src="{!! Helpers::backend() !!}/media/posts/{!! $blog->thumbnail !!}" class="bg-img img-fluid" alt="">
                        @else
                           <img src="{!! asset('assets/images/placeholder.png') !!}" class="bg-img img-fluid" alt="">
                        @endif
                     </div>
                     <div class="blog-label">
                        <div>
                           <h3>{!! date('d', strtotime($blog->created_at)) !!}</h3>
                           <span>{!! date('M', strtotime($blog->created_at)) !!}</span>
                        </div>
                     </div>
                  </div>
                  <div class="blog-details">
                     <div>
                        <h3><a href="{!! route('blog.details',$blog->url) !!}">{!! $blog->title !!}</a></h3>
                        <p class="font-roboto">{!! substr($blog->synopsis, 0,250) !!} {!! strlen($blog->synopsis) > 250 ? "..." : "" !!}</p>
                        <a href="{!! route('blog.details',$blog->url) !!}">read more</a>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>
      {{-- <nav class="theme-pagination">
         <ul class="pagination">
            <li class="page-item">
               <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                  <span aria-hidden="true">«</span>
                  <span class="sr-only">Previous</span>
               </a>
            </li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item">
               <a class="page-link" href="javascript:void(0)" aria-label="Next">
                  <span aria-hidden="true">»</span>
                  <span class="sr-only">Next</span>
               </a>
            </li>
         </ul>
      </nav> --}}
   </div>
   <div class="col-xl-3 col-lg-4">
      <div class="sticky-cls blog-sidebar blog-right">
         <div class="filter-cards">
            <div class="advance-card mb-5">
               <div class="search-bar">
                  <input type="text" placeholder="Search here.." wire:model="search">
                  <i class="fas fa-search"></i>
               </div>
            </div>

            <div class="advance-card mb-5">
               <h6>Category</h6>
               <div class="category-property">
                  <ul>
                     @foreach($categories as $category)
                        <li>
                           <a href="{!! route('blog.category',$category->url) !!}"><i class="fas fa-arrow-right me-2"></i>{!! $category->name !!}
                              {{-- <span class="float-end">(15)</span> --}}
                           </a>
                        </li>
                     @endforeach
                  </ul>
               </div>
            </div>

            {{-- <div class="advance-card mb-5">
               <h6>Popular Tags</h6>
               <div class="tags">
                  <ul>
                     <li>
                        <a href="javascript:void(0)">UK</a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">Africa</a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">Kenya</a>
                     </li>
                     <li>
                        <a href="javascript:void(0)">UAE</a>
                     </li>
                  </ul>
               </div>
            </div> --}}
         </div>
      </div>
   </div>
</div>
