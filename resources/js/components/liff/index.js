import React, { useState, useEffect, useContext } from "react";
import PropTypes from "prop-types";
import { withStyles } from "@mui/styles";
// import { LiffProvider, LiffContext } from "./liff-context";

const styles = (theme) => ({
    root: {
        "& .error-message": {
            display: "flex",
            justifyContent: "center",
            alignItems: "center",
            background: "#F7F1ED",
            height: "100vh",
            fontSize: "28px",
            color: "#a54141",
        },
    },
});

function LiffRoot(props) {
    const { classes } = props;
    return (
        <div className={classes.root}>
            <div>123132131</div>
        </div>
    );
}

LiffRoot.propTypes = {
    classes: PropTypes.object.isRequired,
};

function LiffRootWrap() {
    const A = withStyles(styles)(LiffRoot);
    return (
        <A />
    );
}

export default LiffRootWrap;
