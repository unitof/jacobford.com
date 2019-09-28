const phpServer = require('php-server')
const assert = require('assert')
const puppeteer = require('puppeteer')
const { percySnapshot } = require('@percy/puppeteer')

describe('Screenshot compare with previous deployment', function() {
  it('Loads the homepage', async function() {
    const server = await phpServer({
      port: 0, //random
    })
    const browser = await puppeteer.launch()
    const page = await browser.newPage() 
    await page.goto(server.url)
    await percySnapshot(page, this.test.fullTitle()) // doesn't reject/resolve, just runs (sadly)
  })

  it('Loads the business card page', async function() {
    const server = await phpServer({
      port: 0, //random
    })
    const browser = await puppeteer.launch()
    const page = await browser.newPage()
    await page.goto(`${server.url}/card`)
    await percySnapshot(page, this.test.fullTitle()) // doesn't reject/resolve, just runs (sadly)
  })
})
