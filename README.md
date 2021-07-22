#leedom-captcha


For support TP6 framework to use api model captcha.  
It can be return the custom captcha data;
---
**NOTICE:** *If you already installed the* `topthink/think-captcha` *you should remove it first!* 

#### remove `topthink/think-captcha:`
`composer remove topthink/think-captcha`

```
eg: return a json response
    {
        "base64": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAA+BAMAAACcvUmpAAAAG1BMVEXz+/6MAii/fpOYIUKlQF3Mna2yX3jZvMjm2+PG163yAAAACXBIWXMAAA7EAAAOxAGVKw4bAAACDElEQVRYhe2WwW/TMBSHrWadfeTXtFmPiQaCIwYhONY9TDu2GivXWQi048KQ4BjYJP5tnqc2iR23SQjbyd8peXH82fHzcxgLBAKBQCDwaIjLJ5CsJ08gyR5bUhjJbFgfm7fLmwOPuZoPl9wDmBaN8I+dWMjpcInCmcIHJyg0cL29zpGS5GSIQ2DOhIqdaE7TM30bRjgZKuFYMBZh5ZjxYoNke6fi4j/MhAab2mZJ3+92F7zDFdPzIRKmaRZc2RI2utnqH5SYDZUcI175n+hdRq1R9JOcYulELhD790m5y4+x0M96OI4oa941LP6aocuwnPSSZPgqaR1L+HRlgqmnqUCZUTlkH4maUerUBs6NkcPXxRFe7y7HqK67SGgBf6E+XPO29Cwrl6iWSveSZIlZx1o6aapbZbLW+CbxvrqLzJbtTESf39p6d0g+XTS6GH8GkqK6Fz0kgmpqQpLaTIQyZcrOYfGcQm+Kekh1l+QpjXzBvtff51Rwz61WG0nF/5X9przqLKHtJVTiRv/Y81gD8Uu3TT3t2yQzk5npwTZUgb8UbpBjT+nxkE/MSddShrJGSTAja3j3Epm2uuUkpVQ4d0K/H47gjoxN7qu245q2YWpH8sb5fIgMy4+enecwcqt/ZOdzC2NZnd0HuPf9v3RnJD3L2uR2T/XviPjZqVnWY6X/GXHd3iYQCAQCe/kLeZlAHy8EvPIAAAAASUVORK5CYII=",
        "key": "$2y$10$3IL1VgxvnVrvQNcb12zNT.WFfmicBfyMQFE/S/1poM48oKzh03yr2",
        "code": "ss2y",
        "md5": "398c76a34d6adb0e6cdda01259ddb88f"
    }

    //base64 => the pic url
    //key => the ID key
    //md5 => the key's crypto
    //code => pic's resault (not safe )
```
---

##About the `code`
> The response of `code` is the captcha's content,  
> so return the `code` is not safe.  
> You can change the `.env` file to return 0, eg:  
>> [APP]  
>> APP_STATUS = dev


##Install
`composer require leedom/leedom-captcha`

##In api model
>use leedom\captcha\facade\CaptchaApi;  
>  
>$data = CaptchaApi::create();  
```
{
        "base64": "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAAA+BAMAAACcvUmpAAAAG1BMVEXz+/6MAii/fpOYIUKlQF3Mna2yX3jZvMjm2+PG163yAAAACXBIWXMAAA7EAAAOxAGVKw4bAAACDElEQVRYhe2WwW/TMBSHrWadfeTXtFmPiQaCIwYhONY9TDu2GivXWQi048KQ4BjYJP5tnqc2iR23SQjbyd8peXH82fHzcxgLBAKBQCDwaIjLJ5CsJ08gyR5bUhjJbFgfm7fLmwOPuZoPl9wDmBaN8I+dWMjpcInCmcIHJyg0cL29zpGS5GSIQ2DOhIqdaE7TM30bRjgZKuFYMBZh5ZjxYoNke6fi4j/MhAab2mZJ3+92F7zDFdPzIRKmaRZc2RI2utnqH5SYDZUcI175n+hdRq1R9JOcYulELhD790m5y4+x0M96OI4oa941LP6aocuwnPSSZPgqaR1L+HRlgqmnqUCZUTlkH4maUerUBs6NkcPXxRFe7y7HqK67SGgBf6E+XPO29Cwrl6iWSveSZIlZx1o6aapbZbLW+CbxvrqLzJbtTESf39p6d0g+XTS6GH8GkqK6Fz0kgmpqQpLaTIQyZcrOYfGcQm+Kekh1l+QpjXzBvtff51Rwz61WG0nF/5X9przqLKHtJVTiRv/Y81gD8Uu3TT3t2yQzk5npwTZUgb8UbpBjT+nxkE/MSddShrJGSTAja3j3Epm2uuUkpVQ4d0K/H47gjoxN7qu245q2YWpH8sb5fIgMy4+enecwcqt/ZOdzC2NZnd0HuPf9v3RnJD3L2uR2T/XviPjZqVnWY6X/GXHd3iYQCAQCe/kLeZlAHy8EvPIAAAAASUVORK5CYII=",
        "key": "$2y$10$3IL1VgxvnVrvQNcb12zNT.WFfmicBfyMQFE/S/1poM48oKzh03yr2",
        "code": "ss2y",
        "md5": "398c76a34d6adb0e6cdda01259ddb88f"
    }
```

##Check captcha
>CaptchaApi::check($code,$key);  
> `code => user input; key => response's key`  
>notice : use cache, depends on what driver you choise  


## At last
```$xslt
also support original topthink/think-captcha
```