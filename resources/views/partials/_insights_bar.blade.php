<div class="col-xl-3 col-lg-4">
   <div class="sticky-cls blog-sidebar blog-right">
      <div class="filter-cards">
         {{-- <div class="advance-card mb-5">
            <div class="search-bar">
                  <input type="text" placeholder="Search here..">
                  <i class="fas fa-search"></i>
            </div>
         </div> --}}

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
