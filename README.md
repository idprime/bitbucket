Please read the file inside <code>/stuff/Readme.docx</code> for more information

<h2>Deployment</h2>

<ol>
    <li>Change database values of <code>.env</code> file.</li>
    <li>Create database. (this app does not include automate database creation)</li>
    <li>Execute this command to generate tables <code>php artisan migrate</code></li>
    <li>Populate fake data in the database <code>php artisan db:seed</code></li>
    <li>Start the server and run the application <code>php artisan serve</code></li>
</ol>

<h2>Endpoint</h2>
<code>/api/v1/runner/2/form-data</code></li>
