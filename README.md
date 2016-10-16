Droide AjaxProccess
=====================

## Requirements
- PHP >= 5.4
- JQuery >= 2.2.x


## installation

(TODO)

## Basic Usage

```javascript
  $(document).ready(function(){
       $('#my-div').droideProcess({getUrl:'acoes_segundo.php',event:'load'});
 });
```

## Advanced Usage
```javascript
$(document).ready(function(){
  $('#my-div').droideProcess({getUrl:'acoes.php',elementClick:'#teste',timeout:4500});
});
```
## General Options

|      Option         |       Description                               |       Default      |
|---                  |---                                              |---                 |
|  getUrl             | Your php file                                   | 0                  |
| elementClick        | Element that will trigger the load proccess     | [data-ajaxproc]    |
| event               | Define if your load process is on click or load | click              |
| method              | Method to send request                          | post               |
| timeout             | set Timeout to your request                     | null               |
| textTimeout         | callback if timeout exceds the limit            | <p class="text-danger">Ops! Seu processo esgotou o tempo de execução.</p>|
|

## Report
- Report any issue [One the Github](https://github.com/androidealp/droide-AjaxProccess/issues)
