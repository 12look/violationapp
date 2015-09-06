<div class="row">    
<br>
<div class="col-md-6 col-sm-12 text-center">
  <iframe width="400" height="300" src="{{ $violation->url }}" frameborder="0" allowfullscreen></iframe>
</div>
<div class="col-md-6 col-sm-12">
  <h3 id="date">{{ date('d.m.Y', strtotime($violation->created_at)) }}</h3><h3><span class="label label-primary"><a href="{{ route('search.results', ['query' => $violation->number]) }}">{{ $violation->number }}</a>, {{ $violation->region }} rus</span></h3>
  <div class="row">
    <div class="col-xs-9">
      <p class="desc">{{ $violation->description }}</p>
      <small style="font-family:courier,'new courier';" class="text-muted"><a href="#" class="text-muted">Перейти к нарушению</a></small>
    </div>
  </div>
  <br><br>
</div>
</div>
<hr>