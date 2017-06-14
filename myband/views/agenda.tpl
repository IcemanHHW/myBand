<div id="wrapper">
    <div id="articles">
        {foreach from=$result_list3 item=agenda}
            <article>
                <p class="thick">Date: {$agenda.date}</p>
                <p>Where: {$agenda.place}</p>
                <p>Info: {$agenda.info} </p> <br />
                <br />
            </article>
        {/foreach}
    </div>

    <div id="sidebar">
      <h3>Pictures of the week:</h3>

        {foreach from=$result_list2 item=image}
          <img class="grow" src="{$image.image}" alt="{$image.alt}" /> <br />
        {/foreach}

    </div>
    </div>
  </div>
