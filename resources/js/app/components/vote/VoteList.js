import React, { useState, useEffect } from 'react';

import axios from 'axios';

import { API_URL } from '../../Consts';
import Vote from './Vote';

function VoteList() {
    const [votes, setVotes] = useState([]);
    const [count, setCount] = useState(0);
    const [isLoading, setIsLoading] = useState(true);
    const [page, setPage] = useState(1);

    useEffect(() => {
        async function fetchData() {
            const res = await axios(`${API_URL}/users/1/received-votes`);
            setVotes(res.data.items);
            setCount(res.data.count);
            setIsLoading(false);
        }
        fetchData();
    }, []);

    const handleClick = async () => {
        const newPage = page + 1;

        const res = await axios(`${API_URL}/users/1/received-votes?page=${newPage}`);

        const newVotes = [...votes, ...res.data.items];
        const newCount = res.data.count;

        setVotes(newVotes);
        setCount(newCount);
        setPage(newPage);
    }

    if (isLoading) {
        return (
            <p>Loading...</p>
        )
    } else {
        return (
            <div>
                {votes.map(vote => {
                    return <Vote key={vote.id} vote={vote} />
                })}
                { votes.length !== count &&
                    <button className="btn btn-primary" onClick={handleClick}>Load more</button>
                }
            </div>
        );
    }
}

export default VoteList;
