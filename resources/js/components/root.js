import React, { useEffect } from "react";
import ReactDOM from "react-dom";
import { BrowserRouter, Switch, Route } from "react-router-dom";
import Liff from "./liff/index";

function Root() {
    return (
        <BrowserRouter>
            <Switch>
                <Route path="/home" exact component={Liff} />
            </Switch>
        </BrowserRouter>
    );
}

export default Root;

ReactDOM.render(<Root />, document.getElementById("app"));
