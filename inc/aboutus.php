<section class="cover">
  <span class="ar"></span>
</section>
<section style=padding-bottom:300px;>
  <h2>
    Rólunk
  </h2>
  <p>Eddig eltöltött közös indőnkről, és egyben rólunk, néhány jellemző kép és gondolat.</p>
  
  <h3>London</h3>
  <ul>
    <li>
      <div class="dot"><img src=img/1/1.jpg /></div>
      <p class="comment bride">Első "hivatalos" közös utazásunk - most akkor már együtt vagyunk? :) Eat, Live, Love - innen a mottónk</p>
    </li>
    <li>
      <div class="dot"><img src=img/1/2.jpg /></div>
    </li>
    <li>
      <div class="dot"><img src=img/1/3.jpg /></div>
      <p class="comment groom">Viszem Őt minél magasabbra, hogy megszédüljön.</p>
    </li>
  </ul>
  <h3>MEC vitorlázás</h3>
  <ul>
    <li class="">
      <div class="dot"><img src=img/2/1.jpg /></div>
      <p class="comment bride">Az MEC álompárja :D</p>
      <p class="comment groom">Senki se tudta, de mégis mindenki.</p>
    </li>
  </ul>
  <h3>Olaszország</h3>
  <ul>
    <li class="">
      <div class="dot"><img src=img/3/1.jpg /></div>
      <p class="comment bride">Pizza és frutti di mare minden mennyiségben</p>
    </li>
    <li>
      <div class="dot"><img src=img/3/2.jpg /></div>
      <p class="comment groom">"Sharing the shrimps is love" - ahogy Pedró mondja</p>
    </li>
    <li>
      <div class="dot"><img src=img/3/3.jpg /></div>
      <p class="comment groom">Mindig kitalálod, hogy mire gndolok?</p>
    </li>
  </ul>
  <h3>Erdély</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/4/1.jpg /></div>
      <p class="comment bride">Megmutattam neki, mi fán terem az erdélyi lány</p>
    </li>
    <li>
      <div class="dot"><img src=img/4/2.jpg /></div>
      <p class="comment groom">Innetől már a fenyvesek nekem is a kedvencem.</p>
    </li>
    <li>
      <div class="dot"><img src=img/4/3.jpg /></div>
      <p class="comment groom">Nézd mennyi kanyar van mögöttünk, s vagy előttünk!</p>
    </li>
  </ul>
  <h3>Buri esküvő</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/5/1.jpg /></div>
      <p class="comment bride">Ekkor már tudhatta? :) #whoisnext</p>
      <p class="comment groom">Tudta bizony, de csak reménykedett.</p>
    </li>
  </ul>
  <h3>Karácsony</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/6/1.jpg /></div>
      <p class="comment bride">Szeretünk alkotni, együtt különösen <3</p>
    </li>
    <li>
      <div class="dot"><img src=img/6/2.jpg /></div>
      <p class="comment groom">Konyhában is egymás körül forgunk.</p>
    </li>
  </ul>
  <h3>Snowboard</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/7/1.jpg /></div>
      <p class="comment bride">"Tanuló beleszeret az oktatójába" tipikus esete<3</p>
    </li>
    <li>
      <div class="dot"><img src=img/7/2.jpg /></div>
      <p class="comment groom">Ilyen ügyes tanítványom még sose volt. :)</p>
    </li>
  </ul>
  
  
  
  
  
  <h3>Málta</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/10/1.jpg /></div>
      <p class="comment bride">Kedvenc helyem lett - EVER. Legcsodásabb reggelre itt ébredtem. <3 Menyasszony lettem :D :D :D Wááááá</p>
    </li>
    <li>
      <div class="dot"><img src=img/10/2.jpg /></div>
      <p class="comment groom">Úgy meglepődtünk, hogy először azt sem tudtuk melyik ujjra mi való ;)</p>
    </li>
  </ul>
  
  
  
  <h3>Visegrád - Nagyvillám</h3>
  <ul >
    <li class="">
      <div class="dot"><img src=img/13/1.jpg /></div>
      <p class="comment bride">Szülők barátkozása könnyen ment - "Hagyjuk őket, ránk itt már nincs is szükség!" :)</p>
      <p class="comment groom">Ti már találkoztatok valamikor?</p>
    </li>
  </ul>
  
  
  
  
  
</section>
<script>
  var st;
  var list;
  var previous_index;
  
  list = $('section ul li');
  
  $(document).on("scroll", onScroll);
  
  $('.dot').on("click", onClick);
  
  function onClick(event){
    //console.log(clicked_li);
    list.removeClass('show');
    $(this).parent().addClass('show');

  }
  
  function onScroll(event){
    //console.log(event);
    //console.log( ($(window).scrollTop() + $(window).height())/$(document).height());
    //console.log( $(window).scrollTop());
    start = 260;
    st = $(window).scrollTop();
    if (st > start) {
      index = Math.floor((st-start)/94);
      if (index>= list.length-1) index = list.length-1;
      //console.log(index);     
    }
    if (index !=previous_index) {
      list.removeClass('show');
      list.eq(index).addClass('show');
      console.log(index);  
      ga('send', 'event', 'aboutus', 'scroll', 'position '+index);
    }
    previous_index = index;

  }
</script>