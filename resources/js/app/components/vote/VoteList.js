import React, { useState, useEffect } from 'react';

import axios from 'axios';

import { API_URL } from '../../Consts';
import Vote from './Vote';

function VoteList() {
    const [votes, setVotes] = useState([]);
    const [isLoading, setIsLoading] = useState(true);

    useEffect(() => {
        async function fetchData() {
            const res = await axios(`${API_URL}/users/1/received-votes`);
            setVotes(res.data);
            setIsLoading(false);
        }
        fetchData();
    }, []);

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
            </div>
        );
    }
}

export default VoteList;
