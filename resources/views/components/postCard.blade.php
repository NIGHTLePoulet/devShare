<article>
    <div>
        <div>
            <button>
                <x-icons.like_icon />
            </button>

            <span>10</span>

            <button>
                <x-icons.dislike_icon />
            </button>
        </div>
    </div>

    <section>
        <div>
            <p>React</p>
            <p>Performance</p>

            <div>
                <div>
                    US
                </div>
                <p>User</p>

                <span></span>

                <p>2h ago</p>
            </div>
        </div>

        <h3>Optimize Context Re-renders with useMemo</h3>

        <p>
            When using React Context for global state, passing an object literal directly to the value prop causes all consumers to re-render whenever the provider re-
            renders. Wrapping the value in useMemo prevents this issue.
        </p>

        <pre>
            <code>
                function test () {
                    console.log('test')
                }
            </code>
        </pre>

        <div>
            <img src="{{ asset('/icons/comment_icon.svg') }}" alt="Comment icon" />
            n comments
        </div>
    </section>
</article>
