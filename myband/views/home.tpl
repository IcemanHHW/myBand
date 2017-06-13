<div id="wrapper" >
    <div id="articles">
      <p id="pagenumber" class="thick">Page {$page}</p>
      <table id="pagechanger">
        <tr>
          <td id="left">
            {if $page gt 1}
            <a href="?url=home&page={$page-1}">Previous</a>
            {/if}
          </td>
          <td id="right">
            {if $page lt $number_of_pages}
            <a href="?url=home&page={$page+1}">Next</a>
            {/if}
          </td>
        </tr>
      </table>

        {foreach from=$result item=article}
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
    <br />
    <a href="/myband/feed/">RSS-feed of this site</a><br />
      <h3>Pictures of the week:</h3>

       {foreach from=$result_list2 item=image}
       <img class="grow" src="{$image.image}" alt="{$image.alt}" /> <br />
        {/foreach}

    </div>
  </div>
