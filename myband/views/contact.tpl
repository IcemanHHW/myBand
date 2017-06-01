<div id="wrapper">
  <div id="content">
      <h3>About me</h3>
      <p>
        My name is IcemanHHW / Ice / Icy, whatever you wanna call me. And is you can guess I’m a fan of One Piece. <br /> I started watching the anime in April 2015 and fell in love with it almost immediately. <br /> I watched around 6 episodes every
        night and got up to date with the anime at the beginning of July. <br /> After I got up to date with it I watched the new episode every week and I still do that to this day. <br /><br /> At the beginning of February 2016 I started with reading
        the manga. It was a bit confusing at the beginning <br /> I got up to date with the manga in 2/3 months and I must say that I loved every minute of it. <br /> Just like with the anime, whenever a new chapter drops I read it immediately <br />        and after that discuss the new chapter in a One Piece related chat I’m in. <br /> <br /> But enough about me, let’s talk about the site for a bit. <br /> One this site you can find pretty much everything that’s One Piece related. <br /> And with
        that I mean news about new episodes / chapters, theories, news about new merchandise and other news. <br /> So is this a news site? Yes and no, yes this site has news but it’s mainly an overview site that has links <br /> to the site where you
        can read / watch the content that the news item is talking about. <br /> <br /> And that's pretty much it. Enjoy your stay on this site :)
      </p>
      <h3>Contact information</h3>
      <p>
        If you have any questions or comments you can contact me on: <br />
        Twitter: <a href="https://twitter.com/IcemanHHW">@IcemanHHW </a> <br />
        Reddit: <a href="https://www.reddit.com/user/IcemanHHW/">IcemanHHW </a> <br />
        E-mail: 22617@ma-web.nl <br/>
      </p>

      <img id="image" src="img/figurine.jpg" alt="only OP figurine I got so far" />
      <div id="myModal" class="modal">

        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <img class="modal-content" id="img01">

        <div id="caption"></div>
      </div>

  </div>

  <div id="sidebar">
    <h3>Pictures of the week:</h3> {foreach from=$result_list2 item=image}
    <img class="grow" src="{$image.image}" alt="{$image.alt}" /> <br /> {/foreach}

  </div>
</div>
<script>

var modal = document.getElementById('myModal');

var img = document.getElementById('image');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}


var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
  modal.style.display = "none";
}

</script>
</div>
