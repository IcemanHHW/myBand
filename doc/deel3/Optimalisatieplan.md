# Optimalisatieplan

### Inhoud:
* CrossBrowser compatibility
* Seo rapport
* Security

## Crossbrowser compatibility

MY Band is crossbrowser getest met de meest gebruikte browsers (Chrome, Safari en Firefox).
Er zijn meerdere versies van de browsers getest en op de meeste versies werkt alles van MY Band goed. Er zijn een paar oudere versies van Firefox waarbij bepaalde onderdelen niet helemaal lekker werken of erg lang duren. Daarmee worden dan echt de oude versies bedoelt, bijvoorbeeld versie 7.0.1.

Er wordt er niet voor gezorgd dat MY Band op die versies goed draaitIedereenof bijna iedereen die Firefox gebruikt heeft een van de recentere versies waar de site wel goed op draait.

Ook wordt er geen ondersteuning aangeboden aan browsers als IE en Lynx, omdat diebrowsers niet veel gebruikt worden. Als er problemen voorkomen op MY Band met die browsers zullen we die niet oplossen.

[link naar screenshot van de crossbrowser test](http://imgur.com/a/bi694)


## Seo rapport

#### Wat moet er gebeuren?
De website moet goed vindbaar zijn op Google, Bing, Yahoo en overige zoekmachines. 
 
#### Hoe wordt dit gerealiseerd?
Er wordt goed gekeken naar de site structuur. De website moet goed leesbaar zijn voor de Googlebot, dus worden er alt-tags gebruikt bij de afbeeldingen. Hierdoor kan de Googlebot zien waar de afbeelding over gaat.

het is ook belangrijk dat er gekeken wordt naar de keywords die op de site gezet gaan worden. Het moeten duidelijke keywords zijn, zodat de Googlebot kan zien waar hij naar moet zoeken. Welke keywords gebruikt gaan worden wordt later beschreven in dit document.

#### Welke keywords en beschrijving komen er op de site?
###### Keywords:
MY Band,One Piece,One Piece Theories, One Piece Video's, One Piece anime, One Piece manga, One Piece, discussions, Goda, Oda

###### Beschrijving:
On MY Band you can find pretty much everything that’s One Piece related.


## Security

| Likelyhood    |               |               | Consequences  |               |               |
|:-------------:|:-------------:|:-------------:|:-------------:|:-------------:|:-------------:|
|               |Insignificant  |Minor          |Moderate       |Major          |Catastrophic   |
|Almost certain |               |               |Forced Access  |               |               |
|     Likely    |               |  CSRF         |Unvalidated redirects or forwards|               |               |
|     Moderate  |SQL Injection  |               |Sensitive Data Exposure|Sensitive date exposure|               |
|     Unlikely  |Insufficient Attack Protection|Underprotected APIs|               |               |               |
|    Rare       |               |               |Using Components with Known Vulnerabilities|               |               |
