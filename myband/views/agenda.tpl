<div id="wrapper">
    <div id="content">
      <article>
        <h3>Placeholder</h3>
        <p>18 May 2017</p>
        <p>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <br /> Aenean commodo ligula eget dolor. Aenean massa. <br /> Cum sociis natoque penatibus et magnis dis parturient montes,nascetur ridiculus mus.
        </p>
      </article>
    </div>
    <div id="sidebar">
      <h3>Pictures of the week:</h3>

        {foreach from=$result_list2 item=image}
          <img class="grow" src="{$image.image}" alt="{$image.alt}" /> <br />
        {/foreach}

    </div>
    </div>
  </div>
