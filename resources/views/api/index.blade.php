<!DOCTYPE html>
<!-- saved from url=(0043)https://flysystem.thephpleague.com/v2/docs/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>{{config('app.name')}} Documentation</title>
    <meta name="description" content="Filesystem abstraction library for PHP.">
    <script type="text/javascript" async="" src="{{publicPath()}}/api/apiDoc_files/analytics.js"></script><script async="" src="{{publicPath()}}/api/apiDoc_files/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-46050814-3');
    </script>
    <!--<base href="https://flysystem.thephpleague.com/">--><base href=".">
    <link rel="stylesheet" href="{{publicPath()}}/api/apiDoc_files/docsearch.min.css">
    <link rel="stylesheet" href="{{publicPath()}}/api/apiDoc_files/styles.38c6185a8578394bce5d.css">
</head>
<body class="min-h-screen text-base text-indigo-body-text min-w-full pt-12 leading-normal bg-indigo-lightest">
<div class="pb-1 fixed z-10 top-0 w-screen bg-white border-indigo-lighter border-b">
    <div class="max-w-2xl mx-auto px-4 py-2">
        <div class="flex items-center flex-no-shrink top-0">
            <a href="{{publicPath()}}/doc" class="flex items-center h-10">
                <img class="h-10 w-10 mr-3" width="30" height="30" src="{{publicPath()}}/api/apiDoc_files/flysystem.svg">
                <span class="pr-2 font-normal overflow-hidden font-heading text-3xl text-indigo-darkest -sm:hidden">
{{config('app.name')}} Documentation
<sup class="text-xs relative text-indigo" style="top: -20px;">1.0.0</sup>
</span>
            </a>
            <div class="flex-grow"></div>
            <div class="flex-no-shrink flex-no-grow h-10 px-4 relative">
                <!--<span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                    <input id="global-search" class="focus:outline-0 h-10 py-2 pl-8 pr-2 text-indigo-darker rounded bg-indigo-lightest focus:border-indigo-light focus:bg-white focus:placeholder-none max-w-xs w-full appearance-none ds-input" type="text" placeholder="Search the docs" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
                    <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>
                <span class="pointer-events-none absolute inset-y-0 left-0 pl-6 flex items-center">
<svg class="fill-current pointer-events-none text-indigo-light w-4 h-4 border-transparent border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path></svg>
</span>-->
            </div>
            <a href="https://flysystem.thephpleague.com/#" id="menu-toggle" class="block md:hidden h-8 w-8 border p-1 border-transparent text-grey hover:text-grey menu-closed">
                <svg class="menu-closed:shown fill-current h-full w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
                <svg class="menu-closed:hidden fill-current h-full w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
<main class="mx-auto max-w-2xl px-4 py-2">
    <div class="flex flex-grow">
        <nav role="navigation" id="navigation" class="md:w-4/14 w-full lg:relative hidden md:block font-heading pt-2">
            <menu class="pl-0 mt-0">

                <ul class="list-reset mb-6 block pr-6">
                    <li class="block">
                        <a class="leading-loose block w-full rounded text-md text-white bg-indigo pl-2 -ml-2">Endpoints</a>
                    </li>
                </ul>
                <div style="position:absolute; margin-top: -20px;">
                    @foreach(($postman['item'] ?? []) as $key => $value )
                        <h2 class="tracking-wide mb-0 mt-0 text-xs leading-loose tracking-wide text-indigo-light uppercase">
                            {{$value['name']}}</h2>
                        <!--<ul class="list-reset mb-6 block pr-6">
                            <li class="block">
                                <a class="leading-loose block w-full rounded text-md text-indigo-darkest" href="https://flysystem.thephpleague.com/v2/docs/what-is-new/">New In V2</a>
                            </li>

                        </ul>-->
                    @endforeach
                </div>

            </menu>
        </nav>
        <article id="article" role="main" class="max-w-full md:block md:w-10/14">
            <h1 class="mb-4">Http request behavior guidelines.</h1>
            <h2 id="about-flysystem">Introduce</h2>
            <p>The roadmap to follow in order to reach our API resource is very simple.Simply follow the instructions below.
                The request url map is located on the left menu.</p>

            <h2 id="getting-started">Api Authenticate</h2>
            <p>The header keys that must be sent are below.The Authorization value <b>(except for the login service)</b> is required for every request.
                There is a token key in the response returned when the user logs in. </p>
            <table>
                <thead>
                <tr>
                    <th style="width:200px;">Header Key</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                @foreach($headers as $header)
                    <tr>
                        <td><code class="language-plaintext highlighter-rouge">{{$header['key']}}</code></td>
                        <td>{{$header['description']}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Api Request</span>
wget --no-check-certificate --quiet \
  --method GET \
  --timeout=0 \
  --header 'Authorization: Bearer TheTakenToken' \
  --header 'Apikey: theGivenHash' \
  --header 'Content-Type: application/json' \
  --header 'Accept-Language: en' \
   'http://baseUrl/user'
</code></pre></div></div>


            <h2 id="getting-started">Success Sample Response</h2>

            <p>The following is the standard response capsule.This is a successful response.</p>
            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Any Endpoint Response</span>
{
    "status": true,
    "code": 200,
    "cache": false,
    "isAvailableData": true,
    "client": "admin",
    "env": "local",
    "responseCode": 2837728881,
    "resource": [
        {

        }
    ]
}
</code></pre></div></div>

            <h2 id="getting-started">Meta Keys</h2>

            <table>
                <thead>
                <tr>
                    <th>Key</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">status</code></td>
                    <td>Boolean</td>
                    <td>tells if the http request was successful.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">code</code></td>
                    <td>Integer</td>
                    <td>returns the http code(200,201,400,500)</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">resource</code></td>
                    <td>array</td>
                    <td>it is the key where the real data is stored for the client.</td>
                </tr>

                </tbody>
            </table>

            <h2 id="getting-started">Http Codes</h2>

            <table>
                <thead>
                <tr>
                    <th>Code</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">200</code></td>
                    <td>it shows that the response was successful.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">400</code></td>
                    <td>it shows that the response failed on the client side. the error should be fixed by looking at the ErrorMessage key.</td>
                </tr>

                <tr>
                    <td><code class="language-plaintext highlighter-rouge">500</code></td>
                    <td>it shows that the response failed on the server side.the client cannot do anything. The error must be fixed by the service provider.</td>
                </tr>

                </tbody>
            </table>

            <h2 id="getting-started">Error Sample Response</h2>

            <p>As seen in the error response, the status value is returned false.In this case, the errorMessage value will be the key that tells the source of the error for the client.
                <b>Notice that the errorMessage key is not returned in the resource key.</b></p>
            <div class="language-php highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="c1">// Default Any Endpoint Response</span>
{
    "status": false,
    "code": 400,
    "client": "admin",
    "env": "production",
    "responseCode": 2877334582,
    "errorInput": null,
    "exception": "InvalidException",
    "errorMessage": "Field is required",
    "endpoint": "baseUrl/user",
    "rules": [
        null
    ]
}
</code></pre></div></div>



        </article>
    </div>
</main>
<footer class="bg-indigo-darkest text-white">
</footer>
<script type="text/javascript" src="{{publicPath()}}/api/apiDoc_files/docs.38c6185a8578394bce5d.js"></script>
<script type="text/javascript" src="{{publicPath()}}/api/apiDoc_files/docsearch.min.js"></script>
<script type="text/javascript"> docsearch({
        apiKey: 'be7daf2d7afded0acb0589a0e304a423',
        indexName: 'filesystem_thephpleague',
        inputSelector: '#global-search',
        debug: false
    });
</script>


</body></html>
