/*
Language: WP
Requires: xml.js
Author: @jaswsinc
Website: https://jaswsinc.com
Description: Highlights WordPress shortcodes.
Category: common, markup
*/

/*
 * With shortened keys.
 * See: <http://jas.xyz/2bLIk5O>
 */
hljs.registerLanguage('wp', function (hljs) {
  return {
    aliases: [
      'wpsc',
      'wordpress',
      'wp-shortcode',
      'wp-shortcodes',
      'wordpress-shortcode',
      'wordpress-shortcodes'
    ],
    cI: true,

    c: [{
      cN: 'tag',
      b: /\[\/?/,
      e: /\/?\]/,
      r: 10,

      c: [{
        cN: 'name',
        b: /[a-z_\-][a-z0-9_\-]*/,
        r: 0
      }, {
        i: /[[\]]/,
        eW: true,
        r: 0,

        c: [{
          cN: 'attr',
          b: /[a-z0-9_\-]+/,
          r: 0
        }, {
          b: /\=\s*/,
          r: 0,

          c: [{
            cN: 'string',
            endsParent: true,

            v: [{
              b: /"/,
              e: /"/
            }, {
              b: /'/,
              e: /'/
            }, {
              b: /[^\="'\s[\]]+/
            }]
          }]
        }]
      }]
    }, {
      b: /</,
      e: />/,
      sL: 'xml',
      r: 0
    }]
  };
});
