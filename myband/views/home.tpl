<div id="wrapper" >
    <div id="articles">


        {foreach from=$result_list item=article}
            <article>
                <h3>{$article.title }</h3>
                <p>{$article.date}</p>
                <p class="thick">{$article.headline}</p>
                <content> {$article.content} </content> <br />
                <img class="grow"  src="{$article.image}" alt="{$article.alt}" />
                <br /><br />
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
