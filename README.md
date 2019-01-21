# PHP-Random-Generator</br></br>
###### Generates passwords, API keys, Nouns, Adjectives & Names
###### This was orignally made for personal and internal use. Will be updated with more features</br></br>

###### ranname.php
What can it do
- Generates random names, Adjectives & nouns
- Supports Male & female names with last names

Options:
?type=FFN For Female First Name
?type=MFN For Male First Name
?type=LN For Last Name
?type=FN For Female Name
?type=MN For Male Name
?type=A For Randome adjectives
?type=N For Random Nouns
?type=help Basically shows this
?num=(number here) Can be mixed with api or pass will return how many you ask for

###### ranpass.php:
What can it do
- Supports creating high level secure password and standard api keys. More to come
- Can be read by postman
- 100% secure?
- 0 logs kept
- Keep things internal don't risk personal & private data


Options:
- ?type=pass For password generation
- ?type=api For API generation
- ?type=help basically says this README
- ?num=(number here) Can be mixed with api or pass will return how many you ask for


Usage:</br>
You can use POSTMAN to test this. This will reply 5 API users & passwords
```JSON
https://duckduckblow.com/ranpass.php?type=api&num=5
{
    "APIUser1": "69b8ebae-0686-4f60-a435-f16f6638c382",
    "APIPass1": "23802008-306b-4810-a730-8c659dded57a",
    "APIUser2": "1c46081e-209b-424e-99a8-8d6a1b4d5260",
    "APIPass2": "b2a120ad-8e10-4646-ab27-c81ab5517b74",
    "APIUser3": "aaa60e90-e85c-43b2-802b-c27d0b347702",
    "APIPass3": "47593e4a-1b37-42c9-a37d-777ce6da661d",
    "APIUser4": "c9860ed6-01a0-4e70-9986-89c66cd3f891",
    "APIPass4": "a26f0a0a-069f-425b-bfab-b2bf6bd5bb37",
    "APIUser5": "c4dc8f9a-1725-46af-a3b1-97f0b8ff1f45",
    "APIPass5": "55355667-6aaa-4c70-b5a4-91c892bc2dc4"
}
```
