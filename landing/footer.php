<!DOCTYPE html>

<?php
session_start();

/* if admin is logged in, redirect to admin home page */
if (isset($_SESSION['accountType'])) {
  if ($_SESSION['accountType'] == 'Admin'){
    header("Location: admin.html");
  }
}
?>



<html lang="english">
  <head>
    <title>exported project</title>
    <meta property="twitter:card" content="summary_large_image" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <style>
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6 {  margin: 0;  padding: 0;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}
    </style>
    <style>
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./frame10304132.css" rel="stylesheet" />

           
                       
           
            <!-- FOOTER -->
            <div class="frame10304132-footer334982">
              <div class="frame10304132-group1897334983">
                <div class="frame10304132-group85334984">
                  <span class="frame10304132-text31">
                    <span>
                      Follow and connect with us to spread the word about
                    </span>
                    <br />
                    <span>e-learning and help us educate others.</span>
                  </span>
                </div>
              </div>
              <div class="frame10304132-facebook334986">
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABWSURBVHgB7dcxFYBADATRXR5CcIIFJIAzpOAECzgIKe4s5IqbaVL+ly5xRNySdhW2tnnZflRQLvkuGhAoKCgoKCgoKCjoDGi/8I+8vDcV5cRO1f4y3w+fphESrr+w5QAAAABJRU5ErkJggg=="
                  alt="Rectangle155334987"
                  class="frame10304132-image14"
                />
                <div class="frame10304132-facebok334988">
                  <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAQSURBVHgBAQUA+v8A////oAmcA56AsfxXAAAAAElFTkSuQmCC"
                    alt="Rectangle13334989"
                    class="frame10304132-image15"
                  />
                  <img
                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nNycgaGVpZ2h0PScxMycgdmlld0JveD0nMCAwIDcgMTMnIGZpbGw9J25vbmUnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+CjxnIGNsaXAtcGF0aD0ndXJsKCNjbGlwMF8zM180OTkwKSc+CjxwYXRoIGQ9J00xLjY4MTAzIDEyLjU0NDNWNi42ODA2SDAuMDg1OTk4NVY0LjU2OTM5SDEuNjgxMDNWMi43NjYxNEMxLjY4MTAzIDEuMzQ5MTMgMi42MjMyMSAwLjA0Nzg1MTYgNC43OTQyMiAwLjA0Nzg1MTZDNS42NzMyMiAwLjA0Nzg1MTYgNi4zMjMyMSAwLjEyOTc2NiA2LjMyMzIxIDAuMTI5NzY2TDYuMjcxOTkgMi4xMDEyOEM2LjI3MTk5IDIuMTAxMjggNS42MDkxMSAyLjA5NTAxIDQuODg1NzUgMi4wOTUwMUM0LjEwMjg1IDIuMDk1MDEgMy45Nzc0MiAyLjQ0NTcyIDMuOTc3NDIgMy4wMjc4MlY0LjU2OTM5SDYuMzM0MjJMNi4yMzE2NyA2LjY4MDZIMy45Nzc0MlYxMi41NDQzSDEuNjgxMDMnIGZpbGw9J3doaXRlJy8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0nY2xpcDBfMzNfNDk5MCc+CjxyZWN0IHdpZHRoPSc2LjI0ODIyJyBoZWlnaHQ9JzEyLjQ5NjQnIGZpbGw9J3doaXRlJyB0cmFuc2Zvcm09J3RyYW5zbGF0ZSgwLjA4NTk5ODUgMC4wNDc4NTE2KScvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                    alt="facebooklogo334990"
                    class="frame10304132-image16"
                  />
                </div>
              </div>
              <div class="frame10304132-twetter334992">
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAQSURBVHgBAQUA+v8A////oAmcA56AsfxXAAAAAElFTkSuQmCC"
                  alt="Rectangle14334993"
                  class="frame10304132-image17"
                />
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABYSURBVHgB7dZBDYAwEETRgSAAB1QCUrCKApCCBRRst0krodtD/08me3zXXczskZQU16eC+g4F5E4q3qoBgYKCgoKCgoKCgs6AbvVe/nn/6t/e0Nt3Kq43AwxNGJjGq0sIAAAAAElFTkSuQmCC"
                  alt="Rectangle156334994"
                  class="frame10304132-image18"
                />
                <img
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMTcnIGhlaWdodD0nMTMnIHZpZXdCb3g9JzAgMCAxNyAxMycgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPGcgY2xpcC1wYXRoPSd1cmwoI2NsaXAwXzMzXzQ5OTUpJz4KPHBhdGggZD0nTTE2LjMzNzkgMS41NjkyM0MxNS43NDI1IDEuODIzMTUgMTUuMTExMSAxLjk4OTgyIDE0LjQ2NDUgMi4wNjM3QzE1LjEzOCAxLjY3NTA2IDE1LjY1NTEgMS4wNTk2MiAxNS44OTg2IDAuMzI2MzM5QzE1LjI1ODQgMC42OTIxMzUgMTQuNTU3OSAwLjk0OTg2MiAxMy44Mjc1IDEuMDg4MzhDMTMuMjMyNSAwLjQ3ODA5IDEyLjM4NDkgMC4wOTY2Nzk3IDExLjQ0NjggMC4wOTY2Nzk3QzkuNjQ1NDcgMC4wOTY2Nzk3IDguMTg1MDUgMS41MDI3NCA4LjE4NTA1IDMuMjM2OTNDOC4xODUwNSAzLjQ4MzA5IDguMjEzOTMgMy43MjI3NCA4LjI2OTUxIDMuOTUyNjRDNS41NTg4MiAzLjgyMTYzIDMuMTU1NTMgMi41NzE0NSAxLjU0NjgyIDAuNjcxNTE2QzEuMjY2MTIgMS4xMzUzMiAxLjEwNTI4IDEuNjc0ODIgMS4xMDUyOCAyLjI1MDI1QzEuMTA1MjggMy4zMzk3NyAxLjY4MTE0IDQuMzAwOTIgMi41NTYyNiA0Ljg2NDFDMi4wMzgzMSA0Ljg0ODQ4IDEuNTMxNzYgNC43MTM3OSAxLjA3ODg5IDQuNDcxMjdDMS4wNzg3IDQuNDg0NDIgMS4wNzg3IDQuNDk3NTggMS4wNzg3IDQuNTEwNzlDMS4wNzg3IDYuMDMyMzEgMi4yMDI5NyA3LjMwMTU2IDMuNjk1IDcuNTkwMDZDMy4yMTQ3MSA3LjcxNTgyIDIuNzEwOTEgNy43MzQyMyAyLjIyMjEgNy42NDM4N0MyLjYzNzEyIDguODkxNDggMy44NDE2OCA5Ljc5OTM2IDUuMjY4ODcgOS44MjQ3N0M0LjE1MjYyIDEwLjY2NyAyLjc0NjIzIDExLjE2OTEgMS4yMTgxOCAxMS4xNjkxQzAuOTU0ODc2IDExLjE2OTEgMC42OTUyOTYgMTEuMTU0MiAwLjQ0MDEyNSAxMS4xMjUyQzEuODgzNTMgMTIuMDE2MiAzLjU5Nzk0IDEyLjUzNjEgNS40Mzk4NCAxMi41MzYxQzExLjQzOTIgMTIuNTM2MSAxNC43MTk4IDcuNzUwOSAxNC43MTk4IDMuNjAxMTJDMTQuNzE5OCAzLjQ2NDkyIDE0LjcxNjcgMy4zMjk0OSAxNC43MTAzIDMuMTk0ODRDMTUuMzQ4OSAyLjc1MDQgMTUuOSAyLjE5OTkyIDE2LjMzNzkgMS41NjkyMycgZmlsbD0nd2hpdGUnLz4KPC9nPgo8ZGVmcz4KPGNsaXBQYXRoIGlkPSdjbGlwMF8zM180OTk1Jz4KPHJlY3Qgd2lkdGg9JzE2LjA2NjknIGhlaWdodD0nMTIuNDk2NCcgZmlsbD0nd2hpdGUnIHRyYW5zZm9ybT0ndHJhbnNsYXRlKDAuNDY4MDc5IDAuMDQ3ODUxNiknLz4KPC9jbGlwUGF0aD4KPC9kZWZzPgo8L3N2Zz4K"
                  alt="Twitterlogo334995"
                  class="frame10304132-image19"
                />
              </div>
              <div class="frame10304132-linkedin334997">
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAQSURBVHgBAQUA+v8A////vwm7A739ZN0TAAAAAElFTkSuQmCC"
                  alt="Rectangle15334998"
                  class="frame10304132-image20"
                />
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAdCAYAAABWk2cPAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABbSURBVHgB7daxDYAwDERRH6KHDRCbsAmMxCiswCSMYi4MYYr8LyVO95TOyswn6pp9rrG9JK1RkD+4eexD/BAoKCgoKCgoKChoD+i34XvzPqKmpV0yeHpOUdf9An3zEHIHNI06AAAAAElFTkSuQmCC"
                  alt="Rectangle157334999"
                  class="frame10304132-image21"
                />
                <img
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMTUnIGhlaWdodD0nMTQnIHZpZXdCb3g9JzAgMCAxNSAxNCcgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPGcgY2xpcC1wYXRoPSd1cmwoI2NsaXAwXzMzXzUwMDApJz4KPHBhdGggZD0nTTMuMzc2NDUgMTMuNTQ0M1Y0LjUxMDc2SDAuMzQ2Nzc5VjEzLjU0NDNIMy4zNzY0NVpNMS44NjIgMy4yNzY2NEMyLjkxODUgMy4yNzY2NCAzLjU3NjEyIDIuNTgyOTYgMy41NzYxMiAxLjcxNjFDMy41NTY0NCAwLjgyOTY5MyAyLjkxODU0IDAuMTU1MjczIDEuODgyMDUgMC4xNTUyNzNDMC44NDU3MjUgMC4xNTUyNzMgMC4xNjgwMyAwLjgyOTcwNiAwLjE2ODAzIDEuNzE2MUMwLjE2ODAzIDIuNTgzIDAuODI1NDg3IDMuMjc2NjQgMS44NDIyMyAzLjI3NjY0SDEuODYxOTFIMS44NjJaTTUuMDUzMzYgMTMuNTQ0M0g4LjA4MzAzVjguNDk5NTRDOC4wODMwMyA4LjIyOTU1IDguMTAyNzEgNy45NTk4NCA4LjE4MjcyIDcuNzY2ODRDOC40MDE3NCA3LjIyNzQxIDguOTAwMjQgNi42Njg3MSA5LjczNzE2IDYuNjY4NzFDMTAuODMzNSA2LjY2ODcxIDExLjI3MjEgNy40OTcxMiAxMS4yNzIxIDguNzExNVYxMy41NDQzSDE0LjMwMTVWOC4zNjQ1QzE0LjMwMTUgNS41ODk3NCAxMi44MDY5IDQuMjk4NjcgMTAuODEzNSA0LjI5ODY3QzkuMTc5MTQgNC4yOTg2NyA4LjQ2MTUzIDUuMjA0MDcgOC4wNjI4NyA1LjgyMDczSDguMDgzMDlWNC41MTA1N0g1LjA1MzQzQzUuMDkzMTkgNS4zNTgyMyA1LjA1MzQzIDEzLjU0NDEgNS4wNTM0MyAxMy41NDQxTDUuMDUzMzYgMTMuNTQ0M1onIGZpbGw9J3doaXRlJy8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0nY2xpcDBfMzNfNTAwMCc+CjxyZWN0IHdpZHRoPScxNC4yODE3JyBoZWlnaHQ9JzEzLjM4OScgZmlsbD0nd2hpdGUnIHRyYW5zZm9ybT0ndHJhbnNsYXRlKDAuMjA1NTM2IDAuMTU1MjczKScvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo="
                  alt="linkedinlogo335000"
                  class="frame10304132-image22"
                />
              </div>
              <div class="frame10304132-instagram335002">
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAQSURBVHgBAQUA+v8A////3wnbA91hMwAmAAAAAElFTkSuQmCC"
                  alt="Rectangle16335003"
                  class="frame10304132-image23"
                />
                <img
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAdCAYAAAC9pNwMAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABmSURBVHgB7ddRDYAwDATQK0EAEuqE4ARLOMIBs4ADHJRbUhSQdD93yWXZfl7211pEOICLfVCThT3mvDQz21AQfnTn4RMGRbBgwYIFCxYsWLBgwf/zbRKeE35FVvbucN+ZznyoSnsB/t8RqhI22jUAAAAASUVORK5CYII="
                  alt="Rectangle158335004"
                  class="frame10304132-image24"
                />
                <img
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMTUnIGhlaWdodD0nMTcnIHZpZXdCb3g9JzAgMCAxNSAxNycgZmlsbD0nbm9uZScgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KPGcgY2xpcC1wYXRoPSd1cmwoI2NsaXAwXzMzXzUwMDUpJz4KPHBhdGggZD0nTTcuMDgxNjEgNC42ODcyQzUuMDc1NDcgNC42ODcyIDMuNDU3MzEgNi4yOTcwMyAzLjQ1NzMxIDguMjkyODNDMy40NTczMSAxMC4yODg2IDUuMDc1NDcgMTEuODk4NSA3LjA4MTYxIDExLjg5ODVDOS4wODc3NSAxMS44OTg1IDEwLjcwNTkgMTAuMjg4NiAxMC43MDU5IDguMjkyODNDMTAuNzA1OSA2LjI5NzAzIDkuMDg3NzUgNC42ODcyIDcuMDgxNjEgNC42ODcyWk03LjA4MTYxIDEwLjYzN0M1Ljc4NTE5IDEwLjYzNyA0LjcyNTM0IDkuNTg1NzEgNC43MjUzNCA4LjI5MjgzQzQuNzI1MzQgNi45OTk5NSA1Ljc4MjAzIDUuOTQ4NyA3LjA4MTYxIDUuOTQ4N0M4LjM4MTE5IDUuOTQ4NyA5LjQzNzg4IDYuOTk5OTUgOS40Mzc4OCA4LjI5MjgzQzkuNDM3ODggOS41ODU3MSA4LjM3ODAzIDEwLjYzNyA3LjA4MTYxIDEwLjYzN1YxMC42MzdaTTExLjY5OTUgNC41Mzk3MUMxMS42OTk1IDUuMDA3MjkgMTEuMzIxIDUuMzgwNzEgMTAuODU0MiA1LjM4MDcxQzEwLjM4NDIgNS4zODA3MSAxMC4wMDg4IDUuMDA0MTUgMTAuMDA4OCA0LjUzOTcxQzEwLjAwODggNC4wNzUyOCAxMC4zODczIDMuNjk4NzIgMTAuODU0MiAzLjY5ODcyQzExLjMyMSAzLjY5ODcyIDExLjY5OTUgNC4wNzUyOCAxMS42OTk1IDQuNTM5NzFaTTE0LjA5OTkgNS4zOTMyN0MxNC4wNDYzIDQuMjY2NyAxMy43ODc3IDMuMjY4OCAxMi45NTgxIDIuNDQ2NjNDMTIuMTMxNyAxLjYyNDQ2IDExLjEyODYgMS4zNjcxNCA5Ljk5NjE5IDEuMzEwNjVDOC44MjkxIDEuMjQ0NzYgNS4zMzA5NyAxLjI0NDc2IDQuMTYzODcgMS4zMTA2NUMzLjAzNDYzIDEuMzY0IDIuMDMxNTYgMS42MjEzMiAxLjIwMTk4IDIuNDQzNDlDMC4zNzIzOTQgMy4yNjU2NiAwLjExNjg5NSA0LjI2MzU3IDAuMDYwMTE3NCA1LjM5MDEzQy0wLjAwNjEyMzExIDYuNTUxMjEgLTAuMDA2MTIzMTEgMTAuMDMxMyAwLjA2MDExNzQgMTEuMTkyNEMwLjExMzc0MSAxMi4zMTkgMC4zNzIzOTQgMTMuMzE2OSAxLjIwMTk4IDE0LjEzOUMyLjAzMTU2IDE0Ljk2MTIgMy4wMzE0OCAxNS4yMTg1IDQuMTYzODcgMTUuMjc1QzUuMzMwOTcgMTUuMzQwOSA4LjgyOTEgMTUuMzQwOSA5Ljk5NjE5IDE1LjI3NUMxMS4xMjg2IDE1LjIyMTcgMTIuMTMxNyAxNC45NjQzIDEyLjk1ODEgMTQuMTM5QzEzLjc4NDUgMTMuMzE2OSAxNC4wNDMyIDEyLjMxOSAxNC4wOTk5IDExLjE5MjRDMTQuMTY2MiAxMC4wMzEzIDE0LjE2NjIgNi41NTQzNSAxNC4wOTk5IDUuMzkzMjdWNS4zOTMyN1pNMTIuNTkyMiAxMi40MzgyQzEyLjM0NjIgMTMuMDUzMyAxMS44Njk5IDEzLjUyNzEgMTEuMjQ4NSAxMy43NzVDMTAuMzE3OSAxNC4xNDIyIDguMTA5OTIgMTQuMDU3NCA3LjA4MTYxIDE0LjA1NzRDNi4wNTMzMSAxNC4wNTc0IDMuODQyMTMgMTQuMTM5IDIuOTE0NzcgMTMuNzc1QzIuMjk2NTIgMTMuNTMwMiAxLjgyMDIyIDEzLjA1NjQgMS41NzEwMyAxMi40MzgyQzEuMjAxOTggMTEuNTEyNSAxLjI4NzE0IDkuMzE1ODQgMS4yODcxNCA4LjI5MjgzQzEuMjg3MTQgNy4yNjk4MiAxLjIwNTEzIDUuMDcwMDUgMS41NzEwMyA0LjE0NzQ2QzEuODE3MDcgMy41MzI0IDIuMjkzMzcgMy4wNTg1NSAyLjkxNDc3IDIuODEwNjVDMy44NDUyOSAyLjQ0MzQ5IDYuMDUzMzEgMi41MjgyMiA3LjA4MTYxIDIuNTI4MjJDOC4xMDk5MiAyLjUyODIyIDEwLjMyMTEgMi40NDY2MyAxMS4yNDg1IDIuODEwNjVDMTEuODY2NyAzLjA1NTQxIDEyLjM0MyAzLjUyOTI2IDEyLjU5MjIgNC4xNDc0NkMxMi45NjEyIDUuMDczMTggMTIuODc2MSA3LjI2OTgyIDEyLjg3NjEgOC4yOTI4M0MxMi44NzYxIDkuMzE1ODQgMTIuOTYxMiAxMS41MTU2IDEyLjU5MjIgMTIuNDM4MlonIGZpbGw9J3doaXRlJy8+CjwvZz4KPGRlZnM+CjxjbGlwUGF0aCBpZD0nY2xpcDBfMzNfNTAwNSc+CjxyZWN0IHdpZHRoPScxNC4yODE3JyBoZWlnaHQ9JzE2LjA2NjknIGZpbGw9J3doaXRlJyB0cmFuc2Zvcm09J3RyYW5zbGF0ZSgwLjA1MDUwNjYgMC4yNjIyMDcpJy8+CjwvY2xpcFBhdGg+CjwvZGVmcz4KPC9zdmc+Cg=="
                  alt="instagramlogo335005"
                  class="frame10304132-image25"
                />
              </div>
              <div class="frame10304132-group1899335007">
                <span class="frame10304132-text35">More</span>
                <span class="frame10304132-text36">Terms</span>
                <span class="frame10304132-text37">Privacy</span>
                <span class="frame10304132-text38">Forum</span>
                <span class="frame10304132-text39">Support</span>
              </div>
              <div class="frame10304132-group1900335013">
                <span class="frame10304132-text40">Contact Us</span>
                <span class="frame10304132-text41">contact@knowedu.pk</span>
              </div>
              <img
                src="data:image/png;base64,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"
                alt="logo1335016"
                class="frame10304132-image26"
              />
            </div>
          </div>
        </div>
f  </body>
</html>
