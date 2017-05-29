@extends('layout.qmaster')
@section('desc', 'Take the survey and you will know what career fits you the most!')
@section('title', 'survey')
@section('Heading')
      <div class="col s12 splash">
        <div class="card-panel #212121 grey darken-4">
          <h1 class="white-text animated bounceInDown">
            ការស្វែងយល់ពីជំនាញ
          </h1>
        </div>
      </div>
@endsection
@section('Instruction')
<div class="col s12 instruction">
    <div class="card-panel">
      <h2 class="animated bounceInLeft">ចង់​សម្រេច​ចិត្ត​ប្រកប​ដោយ​ភាព ត្រឹមត្រូវឬ?</h2>
      <h3 class="animated bounceInUp">ចូរមានភាពស្មោះត្រង់ ចំពោះខ្លួនអ្នក</h3>
      <div class="AlignRight animated bounceInRight">
      <a href="#id0" class="waves-effect waves-light btn pulse #0d47a1 blue darken-3 animated bounInRight" onclick="@verbatim$('.collapsible').collapsible('open', 0);@endverbatim"><i class="material-icons left"></i>ចាប់ផ្តើម</a>
    </div>
    </div>
  </div>
@endsection


@section('Question')
<div class="col s12 question">
  <form method="POST" action="/SU"><!--skill understanding -> SU-->
    {!! csrf_field() !!}
  <div class="card-panel">
    <?php
      // $secNum = 0;
      $ansNum = 0;
      $total = 0;
    ?>

    <ul class="collapsible popout" data-collapsible="accordion">
      @for($secNum = 0; $secNum < 16; $secNum++)
      <?php
        $idlist = "id".$secNum;
      ?>
      <li class="animated zoomIn">
        <div class="collapsible-header" id="<?php echo "$idlist" ?>">{{$questions[$secNum][0]->q_desc}}</div>
        <div class="collapsible-body"><span>
          <b>តើអ្នកមានជំនាញយ៉ាងណាចំពោះកិច្ចការខាងក្រោមនេះ?</b><br><br>
          <table class="striped">
          @foreach($answers[$secNum] as $answer)
          <tr>
            <td class="PaddingLeft">{{$answer->ans_desc}}</td><!-- i just delete <li></li>-->
            <?php
              $nameradio = "ans". $ansNum;
            ?>
            <td class="MinWidth AlignRight">
              @for($i=0; $i<4; $i++)
              <?php $idradio = "id".$ansNum. $i; ?>
              <input class="with-gap" name="<?php echo "$nameradio" ?>" value="{{$i}}" type="radio" id="<?php echo "$idradio" ?>" />
              <label for="<?php echo "$idradio" ?>">{{$i}}</label>
              @endfor
            </td>
          </tr>
          <?php
            // if(isset($_POST['$nameradio']) && !empty($_POST['$nameradio']))
            // {
            //   $Q1A1 = $_POST['$nameradio'];
            // }
            // $total = $total + 1;

            // Print ($total);
            $ansNum = $ansNum +1;
          ?>
          @endforeach
        </table>
      </span>
      <div class="AlignRight">
        <?php
          $num = $secNum+1;
          $idlistnext = "survey#id".$num;
         ?>
      <a onclick="@verbatim$('.collapsible').collapsible('open', <?php echo "$num";?>);@endverbatim" href="<?php echo "$idlistnext";?>" class="waves-effect waves-light btn pulse #0d47a1 blue darken-3"><i class="material-icons left"></i>បន្ទាប់</a>
    </div>
        </div>
      </li>
      @endfor
    </ul>


    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
  </div>

</form>
  </div>
@endsection
