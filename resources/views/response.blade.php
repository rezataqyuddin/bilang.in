<div class="method-example"><span style="font-size: 0px;"></span>
    <div class="method-example-part">
        <div class="method-example-table">
            <div class="method-example-table-topbar">
                <div class="method-example-table-title">HTTP status code summary</div>
            </div>
            <section class="table">
                <table class="table-container">
                    <tbody>
                        <tr id="errors-200-OK">
                            <th class="table-row-property"><span>200 - OK</span></th>
                            <td class="table-row-definition"><span>Everything worked as expected.</span></td>
                        </tr>
                        <tr id="errors-400-BadRequest">
                            <th class="table-row-property"><span>400 - Bad Request</span></th>
                            <td class="table-row-definition"><span>The request was unacceptable, often due to missing a required
                                    parameter.</span></td>
                        </tr>
                        <tr id="errors-401-Unauthorized">
                            <th class="table-row-property"><span>401 - Unauthorized</span></th>
                            <td class="table-row-definition"><span>No valid API key provided.</span></td>
                        </tr>
                        <tr id="errors-402-RequestFailed">
                            <th class="table-row-property"><span>402 - Request Failed</span></th>
                            <td class="table-row-definition"><span>The parameters were valid but the request failed.</span></td>
                        </tr>
                        <tr id="errors-403-Forbidden">
                            <th class="table-row-property"><span>403 - Forbidden</span></th>
                            <td class="table-row-definition"><span>The API key doesn't have permissions to perform the request.</span></td>
                        </tr>
                        <tr id="errors-404-NotFound">
                            <th class="table-row-property"><span>404 - Not Found</span></th>
                            <td class="table-row-definition"><span>The requested resource doesn't exist.</span></td>
                        </tr>
                        <tr id="errors-409-Conflict">
                            <th class="table-row-property"><span>409 - Conflict</span></th>
                            <td class="table-row-definition"><span>The request conflicts with another request (perhaps due to
                                    using the same idempotent key).</span></td>
                        </tr>
                        <tr id="errors-429-TooManyRequests">
                            <th class="table-row-property"><span>429 - Too Many Requests</span></th>
                            <td class="table-row-definition"><span>Too many requests hit the API too quickly. We recommend an
                                    exponential backoff of your requests.</span></td>
                        </tr>
                        <tr id="errors-500502503504-ServerErrors">
                            <th class="table-row-property"><span>500, 502, 503, 504 - Server Errors</span></th>
                            <td class="table-row-definition"><span>Something went wrong on Stripe's end. (These are rare.)</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
        <div class="method-example-table">
            <div class="method-example-table-topbar">
                <div class="method-example-table-title">Error types</div>
            </div>
            <section class="table">
                <table class="table-container">
                    <tbody>
                        <tr id="errors-api_error">
                            <th class="table-row-property"><span>api_error</span></th>
                            <td class="table-row-definition"><span>API errors cover any other type of problem (e.g., a temporary
                                    problem with Stripe's servers), and are extremely
                                    uncommon.</span></td>
                        </tr>
                        <tr id="errors-card_error">
                            <th class="table-row-property"><span>card_error</span></th>
                            <td class="table-row-definition"><span>Card errors are the most common type of error you should
                                    expect to handle. They result when the user enters a card that
                                    can't be charged for some reason.</span></td>
                        </tr>
                        <tr id="errors-idempotency_error">
                            <th class="table-row-property"><span>idempotency_error</span></th>
                            <td class="table-row-definition"><span>Idempotency errors occur when an <code>Idempotency-Key</code>
                                    is re-used on a request that does not match the first request's
                                    API endpoint and parameters.</span></td>
                        </tr>
                        <tr id="errors-invalid_request_error">
                            <th class="table-row-property"><span>invalid_request_error</span></th>
                            <td class="table-row-definition"><span>Invalid request errors arise when your request has invalid
                                    parameters.</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>