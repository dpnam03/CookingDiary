@extends('master')
@section('content')
<section id="mu-slider">
    <div class="container">
     <div class="mu-slider-are"> 

      <!-- Top slider -->
      <div class="mu-top-slider"   style="margin-top: 60px">
        <!-- Top slider single slide -->
        @foreach($slide as $sl)
        <div class="mu-top-slider-single">
          <img style="border-radius: 2%" src="upload/slide/{{ $sl->image }}" alt="img" width="2200px" height="400px">
          <!-- Top slider content -->
          <div class="mu-top-slider-content">
            <div class="title">
              <h1 class="mt2 mb1 center" style="color: orange">Ăn gì hôm nay? Nấu ngay món ngon</h1>
            </div>
            <form method="get" action="{{ route('search') }}">
              <div class="search-container">
                <span>
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" name="key" value="{{ $result }}" class="form-control" placeholder="Ví dụ: kim chi, cupcake, soup, sinh tố..">
              </div>
            </form>
            {{-- <span class="mu-slider-small-title">Chào mừng bạn đến</span> --}}
            {{-- <h2 class="mu-slider-title">Cooking Diary</h2> --}}
            <p></p>           
            {{-- <a href="#mu-reservation" class="mu-readmore-btn mu-reservation-btn">BOOK A TABLE</a> --}}
          </div>
          <!-- / Top slider content -->
        </div>
        @endforeach
      </div>
    </div>
    </div>
  </section>
  <!-- End slider  -->
{{-- <section id="mu-gallery"> --}}
  <div class="product_area deals_product mb-50">
        <section id="mu-gallery">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="mu-title" style="height: 40px">
                         <h2>{{ count($recipes2) }} công thức làm <span style="color:red">"{{ $result }}"</span> ngon </h2>
                      </div>
                  </div>
              </div> 
              <div class="row">
                  <div class="product_carousel product_column4 owl-carousel">
                    @foreach($recipes2 as $re)
                    <div class="col-lg-3">
                          <article class="single_product">
                              <figure>
                               <div class="product_name" style="height: 40px">
                                   <h4><a href="{{ route('recipes', $re->id) }}"><strong>{{ $re->name }}</strong></a></h4>
                               </div>

                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('recipes', $re->id)}}"><img style="border-radius: 10px" src="upload/dish/{{ $re->dish->image }}" alt=""></a>
                                    <div>
                                      <span class="label_like"><span class="nlike">{{$re->number_like}}</span><a class="like" idRecipe = "{{$re->id}}"> <i class="far fa-thumbs-up"></i> </a> 
                                        <input class="check_like" type="hidden" value="false">
                                        </span>
                                        <span><i class="far fa-clock"></i> {{ $re->time }}p</span>
                                        <span class="label_sale"><strong> </strong>
                                          
                                          @if($re->level == 1)<i style="color: green" class="fas fa-bolt"></i> {{ "Dễ" }}
                                          @elseif($re->level == 2)<i style="color: yellow" class="fas fa-bolt"></i> {{ "Trung bình" }}
                                          @else <i style="color: red" class="fas fa-bolt"></i> {{ "Khó" }}</span>
                                          @endif
                                        <span class="label_sale"><strong> <i style="color:blue" class="fas fa-user-friends"></i>  </strong>{{ $re->eater }} người</span> 
                                    </div>
                                    <div>
                                                                                
                                    </div>
                                    <div class="quick_button">
                                        <a href="{{route('recipes', $re->id)}}" title="quick view"><i style="color:green" class="fas fa-book-open"></i><strong> Học nấu ngay </strong><i style="color:green" class="fas fa-book-open"></i></a>
                                        <span>{{$re->number_view}} lượt xem</i></span>
                                    </div>
                                </div>
                                <!--<div class="price_box" style="height: 100px;">-->
                                <!--    <span class="claimedRight" maxlength="20"><strong><i style="color:yellow" class="fas fa-lightbulb"></i> Mô tả: </strong>{{ $re->dish->note }}</span>-->
                                <!--</div>-->
                                <div class="price_box">
                                    <span><strong><i style="color:blue" class="fas fa-user-tie"></i> Công thức bởi: </strong>{{$re->user->name}}</span>
                                </div>
                                <div class="price_box product-des">
                                    <span class="font-weight-bold" id="NOTE" value="formatText({{$re->dish->note}})">Mô tả: </span><span>{{$re->dish->note}} </span>
                                </div>
                            </figure>
                          </article>
                    </div> 
                    @endforeach
                  </div>
              </div>
              {{-- <div class="row">{{ $recipes->links() }}</div> --}}
          </div>
        </section>
  </div>
{{-- </section> --}}
  <div class="product_area deals_product mb-50" >
      <section id="mu-gallery" style="margin-top: -200px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mu-title" style="height: 40px">
                       <h2>Các công thức khác của Cooking Diary</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="product_carousel product_column4 owl-carousel">
                  @foreach($recipes1 as $re)
                  <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                               <div class="product_name" style="height: 40px">
                                   <h4><a href="{{ route('recipes', $re->id) }}"><strong>{{ $re->name }}</strong></a></h4>
                               </div>

                                <div class="product_thumb">
                                    <a class="primary_img" href="{{route('recipes', $re->id)}}"><img style="border-radius: 10px" src="upload/dish/{{ $re->dish->image }}" alt=""></a>
                                    <div>
                                        <span class="label_like"><span class="nlike">{{$re->number_like}}</span><a class="like" idRecipe = "{{$re->id}}"> <i class="far fa-thumbs-up"></i> </a> 
                                        <input class="check_like" type="hidden" value="false">
                                        <span><i class="far fa-clock"></i> {{ $re->time }}p</span>
                                        <span class="label_sale"><strong> </strong>
                                          
                                          @if($re->level == 1)<i style="color: green" class="fas fa-bolt"></i> {{ "Dễ" }}
                                          @elseif($re->level == 2)<i style="color: yellow" class="fas fa-bolt"></i> {{ "Trung bình" }}
                                          @else <i style="color: red" class="fas fa-bolt"></i> {{ "Khó" }}</span>
                                          @endif
                                        <span class="label_sale"><strong> <i style="color:blue" class="fas fa-user-friends"></i>  </strong>{{ $re->eater }} người</span> 
                                    </div>
                                    <div>
                                                                                
                                    </div>
                                    <div class="quick_button">
                                        <a href="{{route('recipes', $re->id)}}" title="quick view"><i style="color:green" class="fas fa-book-open"></i><strong> Học nấu ngay </strong><i style="color:green" class="fas fa-book-open"></i></a>
                                        <span style="color: #636e72">{{$re->number_view}} lượt xem</i></span>
                                    </div>
                                </div>
                                <!--<div class="price_box" style="height: 100px;">-->
                                <!--    <span class="claimedRight" maxlength="20"><strong><i style="color:yellow" class="fas fa-lightbulb"></i> Mô tả: </strong>{{ $re->dish->note }}</span>-->
                                <!--</div>-->
                                <div class="price_box">
                                    <span><strong><i style="color:blue" class="fas fa-user-tie"></i> Công thức bởi: </strong>{{$re->user->name}}</span>
                                </div>
                                <div class="price_box product-des">
                                    <span class="font-weight-bold" id="NOTE" value="formatText({{$re->dish->note}})">Mô tả: </span><span>{{$re->dish->note}} </span>
                                </div>
                            </figure>
                        </article>
                  </div> 
                  @endforeach
                </div>
            </div>
            {{-- <div class="row">{{ $recipes->links() }}</div> --}}
        </div>
      </section>
    </div>

  <!-- Start Map section -->
  @include('map')
  <!-- End Map section -->
  
@endsection
@section('script')
  <script type="text/javascript">
    function formatText(){
       var result;
       result = this.substr(0,10);

       return result;

    }
      // var no = document.getElementById('NOTE').value;
    
      // document.getElementById('NOTE').innerHTML= no.substrc(0,10);
    
    $('.like').click(function(){
      var focus1 = $(this).closest('.label_like');
      var getInput = $(focus1.find('.check_like')).val();
      {{-- console.log($(this)) --}}
      if(getInput=='false'){
        //$('.check_like').val(true);     
        var focus2 = $(focus1.find('.nlike')).text();
        var focus3 = $(focus1.find('.check_like'));
        focus3.val(true)
        typeof focus2
        focus2 = Number(focus2) + 1
        $(focus1.find('.nlike')).text(focus2);
        var focus4 = $(this).find('i')
        focus4.css({"color" : "red"})
        //alert(focus2)
      }   
      if(getInput=='true'){  
        var focus2 = $(focus1.find('.nlike')).text();
        var focus3 = $(focus1.find('.check_like'));
        focus3.val(false)
        typeof focus2
        focus2 = Number(focus2) - 1
        $(focus1.find('.nlike')).text(focus2);
        var focus4 = $(this).find('i')
        focus4.css({"color" : ""})
        //alert(focus2)
      }   
      //alert($(this).attr('idRecipe'))
      console.log($(focus1.find('.nlike')).text())
      console.log($(this).attr('idRecipe'))
      $.post('recipesLike/'+$(this).attr('idRecipe'),{number_like : $(focus1.find('.nlike')).text(),"_token": "{{ csrf_token() }}"},function(data){
          console.log(data);
      })
    })
  </script>
@endsection