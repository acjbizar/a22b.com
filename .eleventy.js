
module.exports = function(eleventyConfig) {
    eleventyConfig.setBrowserSyncConfig({
        files: './11ty/*.css'
    });

    eleventyConfig.addFilter("u", function(args) {
        return args.codePointAt(0).toString(16).padStart(4, '0');
    });

    // Return your Object options:
    return {
        dir: {
            input: "src",
            output: "11ty"
        }
    }
};
