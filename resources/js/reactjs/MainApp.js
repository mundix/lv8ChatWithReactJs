import React from "react";
import ReactDOM from "react-dom";
import {ChatApp} from "./ChatApp";

export const MainApp = () => {
    return (
        <>
            <ChatApp/>
        </>
    )
}

if (document.getElementById('ReactApp')) {
    ReactDOM.render(<MainApp/>, document.getElementById('ReactApp'));
}
