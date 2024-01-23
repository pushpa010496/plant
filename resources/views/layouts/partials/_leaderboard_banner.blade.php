
@if(!empty($banner1314))
      <div class="container">
        <div class="row">
          @php
          $count =0;
          
          @endphp

          @foreach($banner1314 as $k=>$homebanner12)   
            @foreach($homebanner12->pagesCount as $j=>$pcount)
              @if($homebanner12->positions[0]->id == 14 and $pcount->id == $page_all)
                @php $count++;  @endphp
              @endif  
            @endforeach
          @endforeach

          @if($count == 1)

          <?php $column=12 ?>             
          @else
          <?php $column=6 ?>
          @endif
        </div>
      </div>
@endif
