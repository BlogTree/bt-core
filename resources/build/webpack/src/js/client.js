/**
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * MIT Public License for more details.
 *
 * Copyright (c) 2016 (original work) Blog-Tree.com;
 */

import React from "react";
import ReactDom from "react-dom";

class Layout extends React.Component {
    render() {
        const a = "name!";
        return (
            <h1>It {a}</h1>
        );
    }
}

const app = document.getElementById('app');

ReactDom.render(<Layout/>, app);
