@extends('layouts.admin')
@section('content')
@if($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{$message}}</p>
        <p class="mb-0"></p>
    </div>
    @endif
    @if($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <p>{{$message}}</p>
        <p class="mb-0"></p>
    </div>
    @endif
  <link rel="stylesheet" href="{{asset('css\survey\survey_css.css')}}">
  <div class="card p-5">
    <div class="container-fluid">
    <span class="card-title">Câu trả lời của bạn</span>
    <div class="title">{{ $survey->survey_name }}</div><br/>
    <div class="description">{{ $survey->survey_description }}</div><br/>
    Người tạo: <a href="">{{ $survey->users->name }}</a><br><br>
    <div style="color:red">*Bắt buộc</div>
      
    <form method="POST" action="{{route('survey.update_answer',$survey)}}" id="boolean" class="required" onsubmit="return validateForm()" name="boolean">
      @csrf
      <br>
        
      @forelse ($questions as  $question)
      
      {{-- {{dd($answer)}} --}}
        <div class="input-field col s12" id="question_mandatory">
        {{-- Tiêu đề câu hỏi --}}
        <br><div class="question_title" id="question" style="font-weight: 300;color:black"> {{ $question->question_title }}
          {{-- đánh dâu câu hỏi bắt buộc --}}
          @if($question->question_mandatory=='1')
            <label style="color:red">*</label>
          @endif
        </div>
        {{-- hiển thị kiểu Text --}}
        @if($question->question_type === 'Text')
          @if($question->question_mandatory=='1')
            <input id="answer" class="text" type="text" name="{{$question->question_id}}[answer]"  placeholder="Câu trả lời của bạn" 
            @foreach($answer as $ques=>$ans)
              @if($ques==$question->question_id) value="{{$ans['answer']}}" @endif 
            @endforeach required>
          @else
            <input id="answer" class="text" type="text" name="{{$question->question_id}}[answer]" placeholder="Câu trả lời của bạn" 
            @foreach($answer as $ques=>$ans)
            @if($ques==$question->question_id) value="{{$ans['answer']}}" @endif 
            @endforeach>
          @endif
        {{-- hiển thị kiểu Textarea --}}
        @elseif($question->question_type === 'Textarea')
        @if($question->question_mandatory=='1')
            <input id="answer" class="materialize-textarea" name="{{$question->question_id}}[answer]" placeholder="Câu trả lời của bạn" 
            @foreach($answer as $ques=>$ans)
            @if($ques==$question->question_id) value="{{$ans['answer']}}" @endif 
            @endforeach required>
            <p id="error" ></p>
            @else   
            <input id="answer" class="materialize-textarea" name="{{$question->question_id}}[answer]" placeholder="Câu trả lời của bạn" @if($ques==$question->question_id) value="{{$ans['answer']}}" @endif>
            @endif
        {{-- hiển thị kiểu Radio --}}
        @elseif($question->question_type === 'Radio')
          <?php $option = json_decode($question->question_option, true); ?>
          @foreach ($option as $item=>$value)
          {{-- @foreach ($ans as $ans2) @endforeach --}}
            @if(is_array($value))
              {{-- nếu là câu hỏi bắt buộc trả lời --}}
              @if($question->question_mandatory==1)
              {{-- div bắt lỗi required --}}
                <div class="form-group radio">
                  @foreach ($value as $item1=>$value1)
                  {{-- div css --}}
                  <div class="ra">
                    <input name="{{$question->question_id}}[]" type="Radio" id="{{ $item1 }}" value="{{$value1}}" required
                    @foreach($answer as $ques=>$ans)
                    @foreach($ans as $ans2)
                    @if($ques==$question->question_id &&  $value1==$ans2) checked 
                    @endif 
                    @endforeach
                    @endforeach />


                    <label >{{ $value1 }}</label> <br>
                  </div>
                   @endforeach
                </div>
              {{-- câu hỏi không bắt buộc trả lời --}}
              @else 
              <div class="form-group radio">
                @foreach ($value as $item1=>$value1)
                <div class="ra">
                  <input name="{{$question->question_id}}[]" type="Radio" id="{{ $item1 }}" value="{{$value1}}"
                  @foreach($answer as $ques=>$ans)
                  @foreach($ans as $ans2)
                    @if($ques==$question->question_id &&  $value1==$ans2) checked 
                    @endif
                    @endforeach
                    @endforeach />
                  <label >{{ $value1 }}</label> <br>
                </div>
                @endforeach
              </div>
              @endif
              
            @endif
          @endforeach
        {{-- hiển thị kiểu Checkbox --}}
        @elseif($question->question_type === 'Checkbox')
          <?php $option = json_decode($question->question_option, true); ?>
          @foreach ($option as $item=>$value)
            @if(is_array($value))
              @if($question->question_mandatory==1)
                <div class="form-group check">
                  @foreach ($value as $item1=>$value1)
                  <div class="ch">
                      <input name="{{$question->question_id}}[]" type="Checkbox" id="{{ $item1 }}" value="{{$value1}}" required
                    @foreach($answer as $ques=>$ans)
                    @foreach($ans as $ans2)
                    @if($ques==$question->question_id &&  $value1==$ans2) checked 
                    @endif 
                    @endforeach
                    @endforeach />
                      <label >{{ $value1 }}</label> <br>
                  </div>
                  @endforeach
                </div>
              @else 
              <div class="form-group check">
                @foreach ($value as $item1=>$value1)
                <div class="ch">
                  <input name="{{$question->question_id}}[]" type="Checkbox" id="{{ $item1 }}" value="{{$value1}}" required
                  @foreach($answer as $ques=>$ans)
                    @foreach($ans as $ans2)
                      @if($ques==$question->question_id &&  $value1==$ans2) 
                      @endif 
                    @endforeach
                    @endforeach />
                  <label >{{ $value1 }}</label> <br>
                </div>
                @endforeach
              </div>
              @endif
            @endif
          @endforeach
        @endif
        </div>
        @empty
        <span class='flow-text center-align'>Chưa có câu hỏi</span><br>
       @endforelse

    <div class="form-group">
      <button type="submit" class="btn btn-success">Gửi</button>
    </div>

  <script>
  $(function(){
    var requiredCheckboxes = $('.check :checkbox[required]');
    requiredCheckboxes.ready(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
    
  });

  // $(function(){
  //   var requiredRadioes = $('.radio :radio[required]');
  //   requiredRadioes.on(function(){
  //       if(requiredRadioes.is(':checked')) {
  //         requiredRadioes.removeAttr('required');
  //       } else {
  //         requiredRadioes.attr('required', 'required');
  //       }
  //   });
  //   requiredRadioes.change(function(){
  //       if(requiredRadioes.is(':checked')) {
  //         requiredRadioes.removeAttr('required');
  //       } else {
  //         requiredRadioes.attr('required', 'required');
  //       }
  //   });
  // });
</script>
@endsection